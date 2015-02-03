<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hottab";
$input = 'template/template.md';
$output = 'output/';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SHOW TABLES FROM " . $dbname;

$tables = getData($sql, $conn);
$tableNames = array();

//read file
$inTpl = file_get_contents($input);

foreach ($tables as $i => $table) {
	$out = '';
	
	$table = array_values($table);
	$sql = "DESCRIBE " . $table[0];
	$rows = getData($sql, $conn);

	$tableNames[] = $table[0];

	$in = str_replace("\n.", "\n..", $inTpl);
	
	$search = array('\n.', '$tableName', '$model');
	$replace = array('\n..', $table[0], str_replace('_', '', ucfirst($table[0])));
	$in = str_replace($search, $replace, $inTpl);

	$fields = '';
	foreach ($rows as $key => $value) {
		
		$fields .= '
		$table->increments(\'id\');
		';
	}

	$in = str_replace('$fields', $fields, $in);

	$out .= '
' . $in;
	
	file_put_contents($output . date('Y_m_d_his', time()) . '_' . $table[0], $out);
}



$conn->close();
echo implode(',', $tableNames);

function getData($query, $conn){
	$arr = array();

	$result = $conn->query($query);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        $arr[] = $row;
	    }
	} else {
	    
	}

	return $arr;	
}