<?php
/*
练习：创建一个数组，保存5个学生的语文成绩
练习：创建一个数组，保存5个员工的姓名
练习：创建一个数组，保存5个员工的婚姻状态
*/

#提示：数组变量名尽量“见文知意”

$scoreList = [ 75, 85, 90.5, 77, 98.5 ];

#echo $scoreList;//运行时错误！PHP中不能使用echo输出数组！！
var_dump( $scoreList );
echo "<hr>";

#$enameList = [Tom, Mary, King, Jerry, Ada]; 
#$enameList = ['Tom, Mary, King, Jerry, Ada'];
$enameList = ['Tom', 'Mary', 'King', 'Jerry', 'Ada'];
var_dump($enameList);
echo "<hr>";

$empMarriedList = [ true,  false, true, true, false ];
var_dump($empMarriedList);	
echo "<hr>";

$empData = [101, 'Tom', 5000.00, true];
$empData[0] = 121;
$empData[1] = 'Tommy';
$empData[2] = 6500.00;
$empData[3] = false;


var_dump($empData);
echo "<hr>";


//输出数组中某个元素
echo $empData[0];
echo "<hr>";
echo $empData[1];
echo "<hr>";
echo $empData[2];
echo "<hr>";
echo $empData[3];
echo "<hr>";
#echo $empData[4];  #运行时错误！