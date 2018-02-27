<?php

/*
 练习：创建一个add.php文件，客户端浏览器向该文件传输两个数字，num1和num2。add.php中读取客户端请求中提交的这两个数字，输出这两个数的和。
*/
echo "THIS IS ADD.PHP";
echo "<hr>";

//var_dump($_REQUEST);  
$n1 = $_REQUEST['num1']; //从关联数组中获取请求数据
$n2 = $_REQUEST['num2']; //从关联数组中获取请求数据
echo  $n1 + $n2;   //'10'+'20'