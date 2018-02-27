<?php
/*
练习：编写一个文件5.php，创建多个变量，保存一个用户的信息，包括用户编号、用户名、密码、邮箱、手机号、注册时间、是否已婚、头像地址。输出上述变量的值。	 
*/

$uid = 10;

#echo $uid;

/*echo '用户编号:';
echo $uid;*/

#echo '用户编号：$uid';		#错误
#echo '用户编号：'+$uid;	#错误！+只能做算术运算
echo '用户编号：', $uid;	#正确！,表示停顿
echo '用户编号：' . $uid;	#正确！.表示字符串拼接
echo "用户编号：$uid<hr>";	#正确！PHP中的'和"字符串有着细微的差别



$uname = 'tom';
echo "用户名：$uname <hr>";

$upwd = '000000';
echo "用户密码：$upwd <hr>";

$email = 'tom@tedu.cn';
echo "邮箱：$email <hr>";

$phone = '86-10-135012345677';
echo "电话：$phone <hr>";

$avatar = 'img/1.jpg';
echo "头像路径：$avatar <hr>";

$isMarried = false;
echo "是否已婚：$isMarried <hr>";#true输出为1，false输出为空


$registerTime = 1501234567890; #PHP中没有DATETIME类型
echo "注册时间：$registerTime";

?>