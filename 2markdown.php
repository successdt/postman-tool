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
		foreach ($collection->folders as $folder) {
			$folders[$folder->id] = array(
				'name'	=>	$folder->collection_name . '_' . $folder->name,
				'children'	=> $folder->order,
				'items'	=> 	array() 
			);
		}

		foreach ($collection->requests as $request) {
			foreach ($folders as $key => $folder) {
				if(in_array($request->id, $folder['children'])) {

				
					$folders[$key]['items'][] = array(
						'$$name'		=>	$request->name,
						'$$description'	=>	$request->description,
						'$$url'			=>	$request->url,
						'$$method'		=>	$request->method,
						'$$params'		=>	formatParams($request->url),
						'$$data'		=>	formatRequestData($request->data),
						'$$responses'	=> ($request->responses) ? format(json_decode($request->responses[0]->text)) : ''
					);
				}
			}
		}


		foreach ($folders as $key => $folder) {
			writeOutput($folder['name'], $folder['items'], $tpl, $outDir);
		}
	}
}

function writeOutput($fileName, $data , $tpl, $outDir){
	//read file
	$inTpl = file_get_contents($tpl);
	
	$out = '';
	
	foreach($data as $request) {
		
		$search = array_keys($request);
		$replace = array_values($request);
		$out .= str_replace($search, $replace, $inTpl);	
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
	parse_str($url, $params);

	foreach ($params as $key => $param) {
		if(strpos($key, 'token')) {
			$paramString .= '<code>token</code> $token' . PHP_EOL;
		} else {
			$paramString .= '<code>' . $key . '</code> ' . $param . PHP_EOL;
		}
	}

	return $paramString;
}