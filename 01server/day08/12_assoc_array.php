<?php
/*
使用关联数组存储
练习：创建一个用于保存一个用户信息的空数组，向其中添加一个用户编号、再添加一个用户名、再添加一个用户的积分、再添加一个用户当前是否在线、再添加一个用户的注册时间。使用for循环遍历数组中的每个元素。
*/
$userData = [ 'uid'=>10,  'uname'=>'dingding' ];

//向关联数组中添加新元素
$userData['age'] = 20;
//修改关联数组中的指定元素
$userData['age'] = 25;

//向关联数组中添加新元素
$userData['isOnline'] = true;

#var_dump($userData);
#echo $userData[0];		#关联数组中没有下标0/1/2....
#echo $userData[1];

echo $userData['uid']."<br>";
echo $userData['uname']."<br>";
echo $userData['age']."<br>";
echo $userData['isOnline']."<br>";