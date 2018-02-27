<?php
/*
向数组中添加新元素
*/
$scoreList = [];

$scoreList[0]  = 55;	#添加一个新元素
$scoreList[1]  = 65;	#添加一个新元素
#$scoreList[0]  = 75;	#修改一个已有元素的值
$scoreList[2]  = 75;	#添加一个新元素

#echo count($scoreList);

$scoreList[ count($scoreList) ]  = 85;	
$scoreList[ count($scoreList) ]  = 91;	
$scoreList[ count($scoreList) ]  = 92;	
$scoreList[ count($scoreList) ]  = 93;	

$scoreList[] = 31;  #向数组尾部添加新元素
$scoreList[] = 32;  #向数组尾部添加新元素
$scoreList[] = 33;  #向数组尾部添加新元素

var_dump( $scoreList );
