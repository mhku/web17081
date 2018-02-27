<?php
/*
各种比较运算
*/
$num1 = 123;
$num2 =	33;

#$result = $num1>$num2;
#$result = $num1>=$num2;
#$result = $num1<$num2;
#$result = $num1 = $num2;	#错误写法
#$result = $num1==$num2;
#$result = $num1!=$num2;


$s1 = '123';
$s2 = '33';
#$result = $s1 > $s2;


#$result = $s1 > $num1;
#$result = $s1 > $num1;
#$result = $s1 == $num1;

$n1 = 1;
$b1 = true;
#$result = $n1 < $b1;
#$result = $n1 == $b1;

$b2 = false;
#$result = $b1 != $b2;


#$s3 = 'true';
$s3 = 'abc';    #string=>int
$result = $b1 == $s3;


#$s1 = 'abc';
#$s2 = 'true';
#$result = $s1==$s2;  //false



$n3 = -1;
$n4 = null;

#$result = $n3>$n4;


$n5 = null;
$n6 = null;
$result = $n5==$n6;



$s1 = '123';
$n1 = 123;
#$result = $s1==$n1;   //true
#$result = $s1 != $n1;	//false

#$result = $s1===$n1;   //false
$result = $s1 !== $n1;	//true
var_dump($result);
?>