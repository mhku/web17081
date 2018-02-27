<?php

/*
常量的使用
*/
const WITHDRAW_LIMIT = 20000;
#echo "取款限额为：WITHDRAW_LIMIT";		#错误写法！
#取款限额为：WITHDRAW_LIMIT

echo "取款限额为："  .  WITHDRAW_LIMIT ;
#const WITHDRAW_LIMIT = 25000;   #错误！常量值不能改变

echo "<hr>";




/**
中学数学：
  角度制： 一圈为360度
  弧度制： 一圈为2*PI
  角度转为弧度：deg*PI/180
**/

const PI = 3.14;

$deg = 30;
$result = $deg * PI / 180;
echo "$deg 对应的弧度值为： $result <br>";

$deg = 60;
$result = $deg * PI / 180;
echo "$deg 对应的弧度值为： $result <br>";

?>