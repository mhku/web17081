<?php
/**
练习：数据库中订单的支付方式存储为数字，1-银行卡支付  2-支付宝支付  3-微信支付  4-京东白条  其它-未知方式。创建一个整数变量表示支付方式，输出为对应的汉字。
**/
$payment = 8;

if( $payment===1 ){
	echo "银行卡支付";
}else if( $payment===2 ){
	echo "支付宝支付";
}else if( $payment===3 ){
	echo "微信支付";
}else if( $payment===4 ){
	echo "京东白条";
}else {
	echo "其它方式";
}