<?php
/*
  练习：创建一个函数，add()，其中声明两个整数，计算出他们的和，并输出。试着调用该函数三次。   
*/
/*
function add(){
	$n1 = 10;
	$n2 = 20;
	$sum = $n1 + $n2;
	echo $sum;
	echo "<hr>";
}

//调用已经声明过的函数
add();
add();
add();
*/

function add( $n1, $n2 ){
	//$n1 = 10;
	//$n2 = 20;
	$sum = $n1 + $n2;
	echo $sum;
	echo "<hr>";
}

add( 10, 20 );	//$n1=10   $n2=20
add( 100, 200 );	//$n1=100   $n2=200
add( 5, 8 );	//$n1=5   $n2=8
add( 'abc', 'xyz' );	//$n1='abc'   $n2='xyz'

