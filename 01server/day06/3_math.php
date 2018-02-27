<?php

/*
练习：创建一个变量，表示月薪6000；另一个变量表示每月奖金500；另一个变量表示年终奖15000，最后计算出一年的总薪资值，并输出。
*/

$salary = 6000;
$comm = 500;
$yearComm = 15000;
#$total = ($salary+$comm)*12 + $yearComm;

#echo "年终总收入：$total";
echo "年终总收入：($salary+$comm)*12 + $yearComm";  #双引号字符串中的算术运算不会执行！！！


?>