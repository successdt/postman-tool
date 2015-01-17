<?php

/**
 * @author successdt
 * @copyright 2015
 */
$dir = 'merge_input';
$outDir = 'merge_output';
$inFiles = scandir($dir);
unset($inFiles[0], $inFiles[1]);

$requestAttr = array();

foreach($inFiles as $inFile){
	$input = file_get_contents($dir . '/' . $inFile);
	
	$data = json_decode($input);
	
	$collections = $data->collections;
	
	foreach($collections as $i => $collection){
		
		foreach($collection->requests  as $j => $request) {
			if(isset($requestAttr[$request->id]['description']) && $requestAttr[$request->id]['description']) {
				$data->collections[$i]->requests[$j]->description = $requestAttr[$request->id]['description'];
			} else {
				$requestAttr[$request->id]['description'] = $request->description;
			}
			
		}
	}
	
	file_put_contents($outDir . '/' . $inFile, json_encode($data));
}


?>