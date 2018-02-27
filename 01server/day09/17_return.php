<?php
/*
 练习：创建一个函数，arrAvg()，接收一个数组做形参，函数内计算出所有元素的平均值，返回该值；试着调用该函数arrAvg()，接收其返回值 
*/

function arrAvg( $arr ){
	$sum = 0;
	for($i=0; $i<count($arr); $i++){
		$sum += $arr[$i];
	}
	$avg = $sum / count($arr); //求平均值
	return  $avg;
}

$result = arrAvg( [1, 2, 3, 4] );
echo $result;

$result = arrAvg( [10, 20, 30, 40, 50] );
var_dump($result);


