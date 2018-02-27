<?php
/*
带返回值的函数   
*/

function myMax($n1, $n2, $n3){
	$max = $n1>$n2 ? $n1 : $n2;
	$max = $max>$n3 ? $max : $n3;
	//echo $max;  画蛇添足
	//计算最大值，算完成把返还给用户
	return  $max;  //此句执行完成后函数立即终止
	//return之后不能再有其它语句
}

$result = myMax( 40, 50, 35 );
echo $result;

$result = myMax(10, 30, 20);
var_dump($result);


