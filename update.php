<?php
$requestMethod = $_SERVER["REQUEST_METHOD"];
// require_once 'Rest.php';;
// $api = new Rest();
require_once 'model/function-api.php';
$api = new Api();
switch($requestMethod) {	
	case 'POST':
	print_r($_POST);
		$api->updateEmployee($_POST);
		break;
	default:
	header("HTTP/1.0 405 Method Not Allowed");
	break;
}
?>