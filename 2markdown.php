<?php
set_time_limit(60);
require_once('functions.php');

$dir = 'test_in';
$outDir = '2markdown_out';
$inFiles = scandir($dir);
$tpl = '2markdown_template/template.md';
$folders = array();

$requestAttr = array();

$collections = array();

if(isset($inFiles[2])){
	$input = file_get_contents($dir . '/' . $inFiles[2]);

	$data = json_decode($input);
	
	$collections = $data->collections;

	foreach ($collections as $collection) {
		$collectionItems = [];
		$folders = [];

		if(isset($collection->folders)) {
			foreach ($collection->folders as $folder) {
				$folders[$folder->id] = array(
					'name'	=>	$collection->name . ' ' . $folder->name,
					'children'	=> $folder->order,
					'items'	=> 	array() 
				);
			}			
		}


		foreach ($collection->requests as $request) {
			$added = 0;
			foreach ($folders as $key => $folder) {
				if(in_array($request->id, $folder['children'])) {
					$response = 

					$folders[$key]['items'][] = array(
						'$$name'		=>	$folder['name'] . ' ' . $request->name,
						'$$description'	=>	$request->description,
						'$$url'			=>	formatUrl($request->url),
						'$$method'		=>	$request->method,
						'$$params'		=>	formatParams($request->url),
						'$$data'		=>	formatRequestData($request->data),
						'$$responses'	=> 	getResponses($request)
					);
					$added = 1;
				} else {

				}
			}

			if(!$added) {
				$collectionItems[] = array(
					'$$name'		=>	$request->name,
					'$$description'	=>	$request->description,
					'$$url'			=>	formatUrl($request->url),
					'$$method'		=>	$request->method,
					'$$params'		=>	formatParams($request->url),
					'$$data'		=>	formatRequestData($request->data),
					'$$responses'	=>	getResponses($request)
				);				
			}
		}

		foreach ($folders as $key => $folder) {
			writeOutput($folder['name'], $folder['items'], $tpl, $outDir, $collection->name);
		}

		writeOutput($collection->name, $collectionItems, $tpl, $outDir);
	}

	exit('Finished');
}

function writeOutput($fileName, $data , $tpl, $outDir, $dirName = null){
	//read file
	$inTpl = file_get_contents($tpl);
	
	$out = '';
	
	foreach($data as $request) {
		
		$search = array_keys($request);
		$replace = array_values($request);
		$out .= str_replace($search, $replace, $inTpl);	
	}
	
	// create directory
	if($dirName) {
		$outDir .= '/' . $dirName;	
		if(!file_exists($outDir)) {
			mkdir($outDir, 777);
		}
	}
	
	file_put_contents($outDir . '/' . getFileName($fileName) . '.md', $out);
}

function getFileName($file){
	$file = str_replace(array('[', ']'), array('', ''), $file);
	// Remove any runs of periods (thanks falstro!)
	$file = preg_replace("([\.]{2,})", '', $file);
	
	$file = str_replace(' ', '_', $file);
	
	return $file;
}

function format($string) {
	return json_encode($string, JSON_PRETTY_PRINT);
}

function formatRequestData($data) {
	if(is_array($data)) {
		$params = array();
		foreach ($data as $value) {
			$params[$value->key] = $value->value;
		}

		return format($params);
	}

	return format(json_decode($data));
}

function formatParams($url) {
	// process request query
	$paramString = '';

	$parseUrl = explode('?', $url);

	if(isset($parseUrl[1])) {
		parse_str($parseUrl[1], $params);

		foreach ($params as $key => $param) {
			if(strpos($key, 'token')) {
				$paramString .= 'token: $token' . PHP_EOL;
			} else {
				$paramString .= $key . ': ' . $param . PHP_EOL;
			}
		}		
	}


	return $paramString;
}


function formatUrl($url) {
	$arr = explode('?', $url);

	if(is_array($arr)) {
		return $arr[0];
	}

	return $url;
}

// list all resposes of request
function getResponses($request) {
	$responseTpl = '2markdown_template/response.md';
	$responseTpl = file_get_contents($responseTpl);
	$responseData = '';
	$search = array('$$name', '$$data', '$$responses');

	if(isset($request->responses)) {
		foreach ($request->responses as $response) {
			$replace = array(
				$response->name,
				format(json_decode($response->request->data)),
				format(json_decode($response->text))
			);

			$responseData .= str_replace($search, $replace, $responseTpl) . PHP_EOL;
		}
	}

	return $responseData;
}



