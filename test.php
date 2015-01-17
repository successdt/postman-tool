<?php
require_once('functions.php');

$dir = 'test_in';
$outDir = 'test_out';
$inFiles = scandir($dir);
$tpl = 'test_template/template.md';

$collect = isset($_GET['collection']) ? $_GET['collection'] : '';

$requestAttr = array();

$collections = array();

if(isset($inFiles[2])){
	$input = file_get_contents($dir . '/' . $inFiles[2]);
	
	$data = json_decode($input);
	
	$collections = $data->collections;
	
	foreach($collections as $i => $collection){
		if($collection->id == $collect) {
			$result = array();
			foreach($collection->requests as $j => $request){
				$url = 'http://' . $request->url;
				$params = array();
				foreach($request->data as $data){
					$params[$data->key] = $data->value;
				}
				
				switch($request->method) {
					case 'POST':
						$responses = postCurl($url, $params);
						break;
					default:
						$responses = getCurl($url);
				}
				
				
				$decoded = json_decode($responses['response']);
				
				$request->responses = json_encode($decoded, JSON_PRETTY_PRINT);
				
				$result[] = array(
					'url' => $url,
					'method' => $request->method,
					'name' => $request->name,
					'responses' => $request->responses,
					'error' => $decoded->error,
					'code' => $responses['code']
				);
				
				$collection->requests[$j] = $request;
			}
			writeOutput($collection->name, $collection->requests, $tpl, $outDir);			
		}
	}
	
}

function writeOutput($fileName, $data , $tpl, $outDir){
	//read file
	$inTpl = file_get_contents($tpl);
	
	$out = '';
	
	foreach($data as $request) {
		$params = '';
		
		foreach($request->data as $param){
			$params .= '
* ' . $param->key . ':';
		}
		
		$search = array('$name', '$description', '$responses', '$params');
		$replace = array($request->name, $request->description, $request->responses, $params);
		$out .= str_replace($search, $replace, $inTpl) . '
';		
	}
	

	
	file_put_contents($outDir . '/' . getFileName($fileName) . '.md', $out);
}

function getFileName($file){
	$file = preg_replace("([^\w\s\d\-_~,;:\[\]\(\).])", '', $file);
	// Remove any runs of periods (thanks falstro!)
	$file = preg_replace("([\.]{2,})", '', $file);
	
	$file = str_replace(' ', '_', $file);
	
	return $file;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Postman testing tool</title>
</head>
<style type="text/css">
ul.result {
	list-style-type: none;
	padding: 0;
}
.response {
	background: #EFEFEF;
	padding: 10px;
}
.success {
	color: #44BF4A;
	border: 1px solid #44BF4A;
	padding: 1px 3px;
	font-size: 12px;
	border-radius: 2px;
}
.error {
	color: #BC2121;
	border: 1px solid #BC2121;
	padding: 1px 3px;
	font-size: 12px;
	border-radius: 2px;	
}
.http-code {
	font-size: 12px;
}
.http-code .label {
	background: #EFEFEF;
	font-weight: normal;
	padding: 2px 4px;
}
</style>
<body>
	<?php if($collect): ?>
		<h2>Testing result</h2>
		<ul class="result">
			<?php foreach($result as $request): ?>
			<li>
				<h3><?php echo $request['name'] ?>
					<?php if($request['error']): ?>
						<span class="error">error</span>
					<?php else: ?>
						<span class="success">success</span>
					<?php endif ?>
					<span class="http-code">
						<span class="label">STATUS</span>
						<?php echo $request['code'] ?>
					</span>
				</h3>
				<div>
					<strong><?php echo $request['method'] ?></strong>
					<a href="<?php echo $url ?>" target="_blank"><?php echo $url ?></a>
				</div>
				<div class="response">
					<pre><?php echo $request['responses'] ?></pre>
				</div>
			</li>
			<?php endforeach; ?>
		</ul>	
	<?php else: ?>
		<h2>Choose collection</h2>
		<ul>
			<?php foreach($collections as $collection): ?>
			<li>
				<a href="test.php?collection=<?php echo $collection->id ?>"><?php echo $collection->name ?></a>
			</li>
			<?php endforeach; ?>
		</ul>	
	<?php endif; ?>
</body>
</html>