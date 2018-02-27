<?php
/*
练习：创建一个max.php文件，客户端浏览器向该文件传输三个成绩值，score1/score2/score3。max.php中读取客户端请求中提交的这三个数字，输出三个数中的最大值。
*/
echo "THIS IS MAX.PHP";
echo "<hr>";

//从请求中读取客户端提交的数据
$s1 = $_REQUEST['score1'];
$s2 = $_REQUEST['score2'];
$s3 = $_REQUEST['score3'];

//计算三个数中的较大值
$max = $s1>$s2 ? $s1 : $s2;  //取$s1和$s2中的较大值
$max = $max>$s3 ? $max : $s3;

echo $max;
