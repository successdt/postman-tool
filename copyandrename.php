<?php

/**
 * @author successdt
 * @copyright 2015
 */

copyFiles();

function copyFiles($dir = '.'){

	$inFiles = scandir($dir);
	unset($inFiles[0], $inFiles[1]);
	
	
	foreach($inFiles as $inFile){
		if(is_dir($inFile)){
			copyFiles($dir . '/' . $inFile);
		} else {
			$inFile = $dir . '/' . $inFile;
			copy($inFile, str_replace(' ', '_', $inFile));
		}
	}	
}

?>