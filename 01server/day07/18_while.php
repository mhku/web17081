<?php
/*
 练习：输出1+2+3+....+100的累加和
*/
$i = 1;
$result = 0;

while( $i<=100 ){
	$result += $i;    //$result=$result+$i;
	$i++;
}
echo "1到100的累加和为: $result";


/*
 练习：输出1*2*3*...*10的累乘积
*/
$i = 1; 
$result = 1;
while( $i<=10 ){
	$result *= $i;    //$result = $result * $i;
	$i++;
}
echo "1到10的累乘积为：$result";