<?php
	$url = "127.0.0.1";
	$user = "root";
	$password = "";
	$timezone="Asia/Shanghai";
	
	$db = new mysqli($url,$user,$password,'jsbccase');
	if(!$db)
	{
		echo "Connect ERROR!";
	}
	$db->query("set names utf8");
	
	header("Content-type: text/html; charset=utf-8");
	date_default_timezone_set($timezone); //北京时间
?>