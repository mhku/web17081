<?php		
/*		
使用foreach循环遍历数组
*/

$user = ['uid'=>10, 'uname'=>'tom', 'age'=>20];

foreach($user  as   $v){
	echo $v."<br>";
}
//$v = 10;  执行循环体
//$v = 'tom';  执行循环体
//$v = 20;  执行循环体

echo "<hr>";
foreach($user as  $k=>$v){
	echo "$k - $v<br>";
}
//$k='uid'  $v=10  执行循环体
//$k='uname'  $v=tom  执行循环体
//$k='age'  $v=20  执行循环体