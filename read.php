<?php
$requestMethod = $_SERVER["REQUEST_METHOD"];
// require_once 'Rest.php';
require_once 'model/function-api.php';
// $api = new Rest();
$api = new Api();
switch($requestMethod) {
	case 'GET':
		$empId = '';	
		if(isset($_GET['id'])) {
			$empId = $_GET['id'];
			$api->getEmployee($empId);
		} else{
			$messgae = "Employee creation failed.";
			$status = 0;
			
			$empResponse = array(
				'status' => $status,
				'status_message' => $messgae
			);
			header('Content-Type: application/json');
			echo json_encode($empResponse);
		}
		break;
	default:
	header("HTTP/1.0 405 Method Not Allowed");
	break;
}
?>