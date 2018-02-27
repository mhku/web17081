<?php
/*
练习：创建一个star.php，读取客户端提交的星星的行数(row)和列数(col)，根据这些数据向客户端输出指定行数和列数的※
*/
echo "STAR.PHP";
echo "<hr>";

//读取客户端提交的请求数据
$r = $_REQUEST['row'];
$c = $_REQUEST['col'];

for($i=0; $i<$r; $i++){
	for($j=0; $j<$c; $j++){
		echo "※";
	}
	echo "<br>";
}