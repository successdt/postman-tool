<?php
function getCurl($url){
	// Get cURL resource
	$curl = curl_init($url);
	// Set some options - we are passing in a useragent too here
	curl_setopt_array($curl, array(
	    CURLOPT_RETURNTRANSFER => 1,
	    CURLOPT_URL => $url,
	));
	// Send the request & save response to $resp
	$resp = curl_exec($curl);
	
	//get status code
	$http_status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
	
	// Close request to clear up some resources
	curl_close($curl);
	
	return array(
		'response' => $resp,
		'code' => $http_status
	);	
}

function postCurl($url, $params){
	// Get cURL resource
	$curl = curl_init();
	// Set some options - we are passing in a useragent too here
	curl_setopt_array($curl, array(
	    CURLOPT_RETURNTRANSFER => 1,
	    CURLOPT_URL => $url,
	    CURLOPT_POST => 1,
	    CURLOPT_POSTFIELDS => $params
	));
	// Send the request & save response to $resp
	$resp = curl_exec($curl);
	
	//get status code
	$http_status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
	
	// Close request to clear up some resources
	curl_close($curl);
	
	return array(
		'response' => $resp,
		'code' => $http_status
	);
}
