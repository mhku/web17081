<?php
/*
练习：创建一个函数，leiJia( )，其中可以计算出1~50的累加和，并输出总和。试着调用该函数三次。
*/

function leiJia(){
	$sum = 0;
	for($i=1; $i<=50; $i++){
		$sum += $i;
	}
	echo $sum;
	echo "<hr>";
}

leiJia();
leiJia();
leiJia();
