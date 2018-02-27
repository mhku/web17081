<?php
/*
练习：使用for循环打印一行中的10个※
*/
for( $i=0;  $i<10;  $i++ ){
	echo '※';
}

echo "<hr>";

/*
练习：使用for循环打印5行10列的※
*/
for($i=0; $i<5; $i++){
	#打印一行的※
	for($j=0; $j<10; $j++){
		echo "※";
	}
	#打印一个<br>
	echo "<br>";
}
echo "<hr>";

/*
练习：使用for循环嵌套打印三角形
*/
for($i=1; $i<=5; $i++){
	for($j=1; $j<=$i; $j++){
		echo "※";
	}
	echo "<br>";
}
