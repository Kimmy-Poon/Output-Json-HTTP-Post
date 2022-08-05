<?php
$result = array();

if(isset($_POST['name']) && !empty($_POST['name'])){
	$result = array(
		'status' => true,
		'html' => 'Hello, '.$_POST['name']
	);
} else {
	$result = array(
		'status' => false,
		'html' => 'Error...?'
	);
}

echo json_encode($result);
?>