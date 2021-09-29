<?php
if(isset($_POST['submit']))	{
	$url = $_POST['url'];				
	$client = curl_init($url);
	curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
	$response = curl_exec($client);		
	$result = json_decode($response);	
	print_r($result);		
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Api</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="#" method="POST">
		<label>Url:</label>
		<input type="text" name="url" placeholder="https://hmooblee.com">
		<input type="submit" name="submit" value="Gửi">
	</form>
</body>
</html>