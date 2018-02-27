<?php
/*
练习：创建一个用于保存一个用户信息的空数组，向其中添加一个用户编号、再添加一个用户名、再添加一个用户的积分、再添加一个用户当前是否在线、再添加一个用户的注册时间。使用for循环遍历数组中的每个元素。
*/
$userData = [];

$userData[] = 1001;
$userData[] = "dingding";
$userData[] = 220;
$userData[] = true;
$userData[] = 1501234567890;

var_dump($userData);
//遍历数组中的每个元素
/*
for($i=0;  $i<count($userData);  $i++){
	echo "$i : $userData[$i] <br>";
}
*/

