<?php
/*
收银台程序V1.0

选择执行逻辑： “如果已付金额>=总价，则计算找零；否则输出错误提示”
*/

#1输入
$price = 300;
$count = 2;
$money = 1000;

#2计算
$sum = $price * $count;  #总价
#判定是否应该打折
if( $sum >= 500 ){
	#$sum = $sum*0.9;
	$sum *= 0.9;
	echo "您已经享受我们的折扣<br>";
}

#判定已付金额是否足够
if( $money>=$sum ){
	$change = $money - $sum;  #找零
	#3输出
	echo "应付金额：$sum 应找零：$change";
}else{
	echo "错误：已付金额不足！";
}



