<?php
	
	include_once('connect.php');
	
	$text_title = $_POST['text_title'];
	$text_type_choose = $_POST['type_choose'];
	$text_name = $_POST['text_name'];
	$text_content = $_POST['text_content'];
	
	
	//test
	echo "title:".$text_title."</br>";
	echo "text_type_choose:".$text_type_choose."</br>";
	echo "name:".$text_name."</br>";
	echo "content:".$text_content."</br>";
	//test
	
	
	$id = hexdec(uniqid())/(time()+microtime());
	echo "id:".$id."</br>";
	
	//$createTime = gmdate("Y-m-d H:i:s", time() + 8 * 3600);
	//$createTime = now();
	//$sql = "insert into xxxx (addDateTime) values ($createTime)";
	//echo "time:".$createTime."</br>";
	
	$status = "undef";
	
	echo "status:".$status."</br>";
	$db->query("set names utf8");
	$query = "insert into upload_case(id,title,update_type,name,content,status) values ('".$id."','".$text_title."','".$text_type_choose."','".$text_name."','".$text_content."','".$status."')";
	echo "query:".$query."</br>";
	//$query = "insert into upload_case(id,title,update_type,name,content,status) values ('1048575.9999821','aa','new','nnn','dddd','ffff')";
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