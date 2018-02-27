<?php
/*
练习：创建一个login.php文件，读取客户端提交的登录用户名(loginName)和密码(loginPwd)，假设用户名必须为admin，密码必须为123456，若都正确，向客户端输出“登录成功”；否则输出“用户名或密码错误”
*/
echo "LOGIN.PHP";
echo "<hr>";

//读取客户端提交给服务器的登录信息
$n = $_REQUEST['loginName'];
$p = $_REQUEST['loginPwd'];

//验证客户端提交数据
if( $n==='admin' && $p==='123456' ){
	echo "登录成功";
}else {
	echo "用户名或密码错误";
}