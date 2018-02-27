<?php 
	#1、接收前端传递过来的数据
	$uname=$_REQUEST["uname"];
	$upwd =$_REQUEST["upwd"];
	#2、对数据进行验证，并给出响应
	if($uname=="lwh" && $upwd=="fbb"){
		echo "登录成功";
	}else{
		echo "登录失败";
	}
?>