<?php
/*
收银台程序V1.0

顺序执行逻辑： 输入 -> 计算 -> 输出
*/

#1输入
$money = 100;
$price = 35;
$count = 2;

#2计算
$sum = $price * $count;  #总价
$change = $money - $sum;  #找零

#3输出
echo "应付金额：$sum 应找零：$change";

