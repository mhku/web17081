<?php
/*
练习：创建一个函数，arrSum()，接收一个数组做形参，函数内计算出所有元素的总和，返回该值；试着调用该函数arrSum()，接收其返回值  
*/

//function arrSum($n1, $n2, $n3){
function arrSum( $arr ){
	$sum = 0;
	foreach($arr as $v){
		$sum += $v;
	}
	return $sum;  //返回计算的总和
}
//$arr = [20,30,50];
$result = arrSum( [20,30,50] );	
var_dump($result);
echo $result;

