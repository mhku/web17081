<?php		
/*		

数据库中的表格，读取到PHP中，呈现为二维数组结构

创建一个数组$userList，用于保存多个用户的信息，初始时为空数组。
创建一个数组$user0，保存一个用户的数据，编号、登录名、头像、注册时间、是否在线等数据 —— 关联数组。
创建一个数组$user1，保存一个用户的数据，编号、登录名、头像、注册时间、是否在线等数据 —— 关联数组。
创建一个数组$user2，保存一个用户的数据，编号、登录名、头像、注册时间、是否在线等数据 —— 关联数组。
创建一个数组$user3，保存一个用户的数据，编号、登录名、头像、注册时间、是否在线等数据 —— 关联数组。
把上述四个关联数组，保存入$userList这个大数组，使用for循环遍历出所有的用户数据   [ [],[],[],[] ]
*/
$user0 = ['uid'=>10, 'uname'=>'dingding', 'avatar'=>'img/10.jpg', 'registerTime'=>1501234567890, 'isOnline'=>true];
#$user0[] = true;
#$user0[] = 123;
#var_dump($user0);
$user1 = ['uid'=>20, 'uname'=>'doudou', 'avatar'=>'img/20.jpg', 'registerTime'=>1521234567890, 'isOnline'=>false];

$user2 = ['uid'=>30, 'uname'=>'dingding', 'avatar'=>'img/40.jpg', 'registerTime'=>1531234567890, 'isOnline'=>false];

$user3 = ['uid'=>40, 'uname'=>'yaya', 'avatar'=>'img/40.jpg', 'registerTime'=>1541234567890, 'isOnline'=>true];

$userList = [ $user0, $user1 ];
#userList = $user2;
$userList[] = $user2;
$userList[] = $user3;
#var_dump($userList);  /// [ [],[],[],[] ]

for($i=0; $i<count($userList); $i++){
	$u = $userList[$i];//数组中的每个元素是一个用户
	#echo $u;
	#用户的属性不会无限多，无需循环遍历
	echo $u['uid'] . "&nbsp;&nbsp;";
	echo $u['uname'] . "&nbsp;&nbsp;";
	echo $u['avatar'] . "&nbsp;&nbsp;";
	echo $u['registerTime'] . "&nbsp;&nbsp;";
	echo $u['isOnline']?'是':'否' . "<br>";

}






