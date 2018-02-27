<?php 
	#1、接收传递过来的数据
	$uname=$_REQUEST["uname"];
	$upwd =$_REQUEST["upwd"];
	#2、将数据进行响应
	echo "欢迎：$uname,密码：$upwd";
?>