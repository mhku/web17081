<?php

/*
while和for的比较
*/

$i = 0;
while( $i<10 ){
	echo $i;
	$i++;
}

echo "<hr>";

#for( $i=0; $i<10; $i++){
#	echo $i;
#}

/*
$i=0;
for( ; $i<10; $i++){
	echo $i;
}
*/

/*
$i=0;
for( ; $i<10;  ){
	echo $i;
	$i++;
}
*/

/*
$i=0;
for( ; ; ){					///  while( true ){   }
	echo $i.'<br>';
	$i++;
}
*/



/*
$i=0;
while(true){
	if($i>=10){
		break;  //终断循环的执行
	}
	echo $i;
	$i++;
}
*/


//使用for的死循环输出0~9
$i=0;
for( ; ; ){
	if($i>=10){  //当$i的值大于等于10，则终止for循环
		break;	
	}
	echo $i;
	$i++;
}


echo "脚本执行结束";