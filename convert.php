<?php
/**
 * @author successdt
 * @copyright 2015
 */
$dir = 'convert_input';
$outDir = 'convert_output';

$fromUrl = 'api.hottab.net';
$toUrl = 'api.hottab.pw';

$customerToken = 'custom_token';
$adminToken = 'admin_token';
$waiterToken = 'waiter_token';


$inFiles = scandir($dir);
unset($inFiles[0], $inFiles[1]);

$requestAttr = array();

foreach($inFiles as $inFile){
	$input = file_get_contents($dir . '/' . $inFile);
	
	$data = json_decode($input);
	
	$collections = $data->collections;
	
	foreach($collections as $i => $collection){
		
		foreach($collection->requests  as $j => $request) {
			$request->url = str_replace($fromUrl, $toUrl, $request->url);
			
			//if is admin request
			if(strpos($request->url, '/admin') != false) {
				$request = replaceToken($request, $adminToken);		
			}
			//if is waiter
			elseif (strpos($request->url, '/waiter') != false) {
				$request = replaceToken($request, $waiterToken);
			}
			else{
				$request = replaceToken($request, $customerToken);
			}
			
			$collection->requests[$j] = $request;
		}
	}
	
	file_put_contents($outDir . '/' . $inFile, json_encode($data));
	
	echo "done";
}


function replaceToken($request, $token) {
	foreach($request->data as $i => $data) {
		if($data->key == 'token') {
			$data->value = $token;
		}
		$request->data[$i] = $data;
		
		
	}
	return $request;
}


?>