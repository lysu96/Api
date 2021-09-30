<?php
/**
 * rest Api
 */
require_once 'DBConfing.php';
class Rest extends Database
{
	
	function __construct()
	{
		parent:: Connect();
	}

	// create
	function insertEmployee($empData){ 		
		$empName=$empData["empName"];
		$empSkills=$empData["empSkills"];
		$empAddress=$empData["empAddress"];		
		$empDesignation=$empData["empDesignation"];
		$empAge=$empData["empAge"];

		//$empQuery="INSERT INTO emp SET name='".$empName."', age='".$empAge."', skills='".$empSkills."', address='".$empAddress."', designation='".$empDesignation."'";

		$empQuery = "INSERT INTO emp SET name='$empName', skills='$empSkills', address='$empAddress', designation='$empDesignation', age='$empAge'";

		//$empQuery = "INSERT INTO emp(id, name, skills, address, designation, age) VALUES (null,'$empName','$empSkills','$empAddress','$empDesignation','$empAge')";

		if( mysqli_query($this->conn, $empQuery)) {
			$messgae = "Employee created Successfully.";
			$status = 1;			
		} else {
			$messgae = "Employee creation failed.";
			$status = 0;			
		}
		$empResponse = array(
			'status' => $status,
			'status_message' => $messgae
		);
		header('Content-Type: application/json');
		echo json_encode($empResponse);
	}

// read
	public function getEmployee($empId) {		
		//$sqlQuery = '';
		// if($empId) {
		// 	$sqlQuery = "WHERE id = '".$empId."'";
		// }	
		//$empQuery = "SELECT id, name, skills, address, age FROM ".$this->empTable." $sqlQuery ORDER BY id DESC";
		$empQuery = "SELECT id, name, skills, address, designation, age FROM emp WHERE id=$empId ORDER BY id DESC
		";	
		$resultData = mysqli_query($this->conn, $empQuery);
		$empData = array();
		while( $empRecord = mysqli_fetch_assoc($resultData) ) {
			$empData[] = $empRecord;
		}
		header("Content-Type: application/json; charset=UTF-8");
		echo json_encode($empData);	
	}

// update
	function updateEmployee($empData){ 		
		if($empData["id"]) {
			$empName=$empData["empName"];
			$empAge=$empData["empAge"];
			$empSkills=$empData["empSkills"];
			$empAddress=$empData["empAddress"];		
			$empDesignation=$empData["empDesignation"];
			$empQuery="
			UPDATE emp 
			SET name='".$empName."', age='".$empAge."', skills='".$empSkills."', address='".$empAddress."', designation='".$empDesignation."' 
			WHERE id = '".$empData["id"]."'";
			echo $empQuery;
			if( mysqli_query($this->conn, $empQuery)) {
				$messgae = "Employee updated successfully.";
				$status = 1;			
			} else {
				$messgae = "Employee update failed.";
				$status = 0;			
			}
		} else {
			$messgae = "Invalid request.";
			$status = 0;
		}
		$empResponse = array(
			'status' => $status,
			'status_message' => $messgae
		);
		header('Content-Type: application/json');
		echo json_encode($empResponse);
	}

// delete
	public function deleteEmployee($empId) {		
		if($empId) {			
			$empQuery = "
			DELETE FROM emp 
			WHERE id = '".$empId."'	ORDER BY id DESC";	
			if( mysqli_query($this->conn, $empQuery)) {
				$messgae = "Employee delete Successfully.";
				$status = 1;			
			} else {
				$messgae = "Employee delete failed.";
				$status = 0;			
			}		
		} else {
			$messgae = "Invalid request.";
			$status = 0;
		}
		$empResponse = array(
			'status' => $status,
			'status_message' => $messgae
		);
		header('Content-Type: application/json');
		echo json_encode($empResponse);	
	}
// Full data
	public function fullData()
	{
		$empQuery = "SELECT * FROM emp";
		$resultData = mysqli_query($this->conn,$empQuery);

		if(mysqli_num_rows($resultData)!=0){		
			$result = array();				
			while($r = mysqli_fetch_array($resultData)){			
				extract($r);			
				$result[] = array(
					// id, name, skills, address, designation, age
					"id" => $id, 
					"name" => $name, 
					"skills" => $skills,
					"address" => $address, 
					"designation" => $designation,
					"age" => $age
				);		
			}
			$status = 1;
			$messgae = "Successfully.";		
		} else{
			$messgae = "Employee creation failed.";
			$status = 0;
		}
		$empData = array(
			'status' => $status,
			'status_message' => $messgae,
			'data' => $result
		);
		header("Content-Type: application/json; charset=UTF-8");
		echo json_encode($empData);
	}
}
?>