<?php
/*
练习：创建一个函数，max()，接收三个数字做形参，找出这三个数中较大的那个，并输出。试着调用该函数三次，使用不同类型的值做实参。    
*/

//function max($n1, $n2, $n3){
function myMax($n1, $n2, $n3){
	$max = $n1>$n2 ? $n1 : $n2;
	$max = $max>$n3 ? $max : $n3;
	echo $max;
	echo "<hr>";
}

myMax( 40, 50, 35 );
myMax( 'cc' ,'aa', 'bb' );
myMax( 2.5, 1.5 , 1.8 );
