<?php

/*
此文件不应被用户直接请求！
此文件中含有其它页面都需要的一些公共代码，应该被其它页面包含
*/

#2.连接到数据库服务器
$conn = mysqli_connect('127.0.0.1',"root","","xuezi",3306);

//执行一条特殊的SQL语句：设置后面要执行的语句的字符编码
$sql = "SET NAMES UTF8";
mysqli_query($conn, $sql);