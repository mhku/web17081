<?php
/*
  练习：创建两个变量，分别保存一个整数，使用三目运算输出这两个数中较大的那个的值。
*/
$score1 = 65;
$score2 = 85;
$result = $score1>$score2 ? $score1 : $score2;
echo "较大的分数为：$result";



echo "<hr>";
/*
  练习：使用一个bool变量保存员工是否已婚，根据此值输出：该员工婚姻状况：已婚
*/
$isMarried = true;
#echo "该员工婚姻状况：$isMarried";

$result = $isMarried===true ? '已婚' : '未婚';
echo "该员工婚姻状况：$result";

?>