<?php
	header("Content-type: text/html; charset=utf-8");
	
	$status_id = $_POST['status_id'];
	$status = $_POST['status'];
	
	//test
	echo "Status ID:".$status_id."</br>";
	echo "Status:".$status."</br>";
	//test
	
	$url = "127.0.0.1";
	$user = "root";
	$password = "";
	
	$db = new mysqli($url,$user,$password,'jsbccase');
	if(!$db)
	{
		echo "Connect ERROR!";
	}
	$db->query("set names utf8");
	$query = "UPDATE upload_case SET status='".$status."' WHERE id='".$status_id."'";
	echo "query:".$query."</br>";
	//$query = "insert into upload_case(id,title,name,content,status) values ('1048575.9999821','aa','nnn','dddd','ffff')";
	$result = $db->query($query);
	if($result)
	{
		echo "Success!";
	}
	else
	{
		echo "Fail";
	}
	$db->close();
	
	header("location: success.html");

?>