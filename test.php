<?php 
require_once 'model/function-api.php';;
$api = new Api();
$api->insertEmployee($_POST);
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Test</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="#" method="POST">
		<label>Url:</label>
		<input type="text" name="url" placeholder="">
		<label>id_layout:</label>
		<input type="text" name="id_layout" placeholder="">
		<label>thumbnail_post:</label>
		<input type="text" name="thumbnail_post" placeholder="">
		<label>title_post:</label>
		<input type="text" name="title_post" placeholder="">
		<label>url_post:</label>
		<input type="text" name="url_post" placeholder="">
		<label>text_post:</label>
		<input type="text" name="text_post" placeholder="">
		<label>id_category:</label>
		<input type="text" name="id_category" placeholder="">
		<label>status_post:</label>
		<input type="text" name="status_post" placeholder="">
		<input type="submit" name="submit" value="Gửi">
	</form>
</body>
</html>