<?php
/*
练习：输出0~9
*/
for( $i=0; $i<10; $i++ ){
	echo $i;
}

echo "<hr>";

/*
练习：输出0、2、4、6、8	
*/
//for($i=0; $i<10; $i+2){  //错误！
for($i=0; $i<10; $i+=2){
	echo $i;
}
echo "<hr>";


/*
练习：输出9、7、5、3、1
*/
for($i=9; $i>0; $i-=2){
	echo $i;
}
echo "<hr>";

/*
练习：计算1~100的累加和
*/
/*
$i=1;
$sum=0;
while($i<=100){
	$sum+=$i;
	$i++;
}
echo $sum;
*/
#$sum=0;
#for($i=1; $i<=100; $i++){
for($i=1,$sum=0; $i<=100; $i++){
	$sum += $i;
}
echo $sum;
echo "<hr>";


/*
练习：计算1~10的累乘积
*/
#$result = 1;
for( $i=1,$result=1; $i<=10; $i++){
	$result *=  $i;
}
echo $result;
echo "<hr>";
/*
练习：计算1/99 + 2/98 + 3/97 +... 10/90的和	11:25
*/
for( $i=1,$j=99,$sum=0;   $i<=10;    $i++,$j--){
	$sum += $i/$j;
}
echo $sum;

