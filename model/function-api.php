<?php
/**
 * rest Api
 */
require_once 'DBConfing.php';
class Api extends Database
{
	
	function __construct()
	{
		parent:: Connect();
	}

	// create
	public function insertEmployee($empData){ 		
		$url=$empData["url"];
		$id_layout=$empData["id_layout"];
		$thumbnail_post=$empData["thumbnail_post"];		
		$title_post=$empData["title_post"];
		$url_post=$empData["url_post"];
		$text_post=$empData["text_post"];		
		$id_category=$empData["id_category"];
		$status_post=$empData["status_post"];
		$date=date_create();
		$date_post = date_format($date,"Y-m-d H:i:s");

		// echo($url)."<br/>";
		// echo($id_layout)."<br/>";
		// echo($thumbnail_post)."<br/>";
		// echo($title_post)."<br/>";
		// echo($url_post)."<br/>";
		// echo($text_post)."<br/>";
		// echo($id_category)."<br/>";
		// echo($status_post)."<br/>";
		// echo($date_post)."<br/>";

		$empQuery = "
					INSERT INTO api 
					SET url='$url',
						id_layout='$id_layout', 
						thumbnail_post='$thumbnail_post', 
						title_post='$title_post', 
						url_post='$url_post', 
						text_post='$text_post', 
						id_category='$id_category', 
						status_post='$status_post',
						date_post='$date_post'";


		if( mysqli_query($this->conn, $empQuery)) {
			$messgae = "Employee created Successfully.";
			$status = 1;			
		} else {
			$messgae = "Employee creation failed.";
			$status = 0;			
		}
		$empResponse = array(
			'status' => $status,
			'status_messurl_post' => $messgae
		);
		header('Content-Type: application/json');
		echo json_encode($empResponse);
	}

// read
	public function getEmployee($empId) {		
		$empQuery = "
					SELECT
						api.id,
						api.url,
						tbl_layout.url_layout,
						tbl_layout.url_layout,
						api.thumbnail_post,
						api.title_post,
						api.url_post,
						api.text_post,
						tbl_category.url_category,
						tbl_category.url_category,
						api.status_post,
						api.date_post
					FROM
						api,
						tbl_layout,
						tbl_category
					WHERE
						api.id_category = tbl_category.id_category AND api.url_post = '$empId'
					ORDER BY id DESC";

		$resultData = mysqli_query($this->conn, $empQuery);
		$empData = array();
		while( $empRecord = mysqli_fetch_assoc($resultData) ) {
			$empData[] = $empRecord;
		}
		header("Content-Type: application/json; charset=UTF-8");
		echo json_encode($empData);	
	}

// update
	public function updateEmployee($empData){ 		
		if($empData["id"]) {
			$url=$empData["url"];
			$id_layout=$empData["id_layout"];
			$thumbnail_post=$empData["thumbnail_post"];		
			$title_post=$empData["title_post"];
			$url_post=$empData["url_post"];
			$text_post=$empData["text_post"];		
			$id_category=$empData["id_category"];
			$status_post=$empData["status_post"];
			$date=date_create();
			$date_post = date_format($date,"Y-m-d H:i:s");

			$empQuery = "
						UPDATE api
						SET	url = '$url',
							id_layout = '$id_layout',
							thumbnail_post = '$thumbnail_post',
							title_post = '$title_post',
							url_post = '$url_post',
							text_post = '$text_post',
							id_category = '$id_category',
							status_post = '$status_post',
							date_post = '$date_post'
						WHERE
							id = '".$empData["id"]."'";
			
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
			'status_messurl_post' => $messgae
		);
		header('Content-Type: application/json');
		echo json_encode($empResponse);
	}

// delete
	public function deleteEmployee($empId) {		
		if($empId) {			
			$empQuery = "
						DELETE FROM api 
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
			'status_messurl_post' => $messgae
		);
		header('Content-Type: application/json');
		echo json_encode($empResponse);	
	}
// Full data
	public function fullData()
	{
		$empQuery = "
					SELECT
						api.id,
						api.url,
						tbl_layout.url_layout,
						tbl_layout.url_layout,
						api.thumbnail_post,
						api.title_post,
						api.url_post,
						api.text_post,
						tbl_category.url_category,
						tbl_category.url_category,
						api.status_post,
						api.date_post
					FROM
						api,
						tbl_layout,
						tbl_category
					WHERE
						api.id_layout = tbl_layout.id_layout AND api.id_category = tbl_category.id_category";
			
		$resultData = mysqli_query($this->conn,$empQuery);

		if(mysqli_num_rows($resultData)!=0){		
			$result = array();				
			while($r = mysqli_fetch_array($resultData)){			
				extract($r);			
				$result[] = array(
					// id, url, id_layout, address, title_post, url_post
					"id" => $id, 
					"url" => $url, 
					"url_layout" => $url_layout,
					"url_layout" => $url_layout,
					"thumbnail_post" => $thumbnail_post,
					"title_post" => $title_post, 
					"url_post" => $url_post,
					"text_post" => $text_post,
					"url_category" => $url_category,
					"url_category" => $url_category, 
					"status_post" => $status_post,
					"date_post" => $date_post
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
			'status_messurl_post' => $messgae,
			'data' => $result
		);
		header("Content-Type: application/json; charset=UTF-8");
		echo json_encode($empData);
	}
}
?>