<?php 
	#1、接收前端传递过来的参数 uname
	$uname=$_REQUEST["uname"];
	#2、将 uname 拼成 "欢迎:uname",再响应
	echo "欢迎:$uname";
?>