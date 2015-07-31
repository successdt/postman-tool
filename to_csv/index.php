<?php
require_once('../functions.php');

$dir = 'in';
$outDir = 'out';
$inFiles = scandir($dir);

$requestAttr = array();

$collections = array();

if(isset($inFiles[2])){
	$items = array();
	$input = file_get_contents($dir . '/' . $inFiles[2]);
	$data = json_decode($input);
	$fp = fopen($outDir . '/output.csv', 'w');
	
	$collections = $data->collections;

	foreach ($collections as $collect) {
		$collectName = extractName($collect->name);
		$folders = array();
		foreach ($collect->folders as $folder) {
			$folderName = extractName($folder->name);
			$folders[$folder->id]['name'] = $folderName;
		}
		foreach($collect->requests as $request) {
			$controller = explode('/', $request->url);
			preg_match('/.pw(\/[^?]*)/i', $request->url, $matches);

			$item = array(
				$collectName,
				$folders[$request->folder]['name'],
				$request->name,
				$request->method,
				$matches[1]
			);
			fputcsv($fp, $item);
		}
	}
	fclose($fp);
	echo "done";
}

function extractName($name) {
	return str_replace(array('[', ']'), array('', ''), $name);
}