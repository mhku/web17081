<?php
/*
创建各种类型的变量，并输出
*/
#笔记本编号
$lid = 23;	#int(23)
$lid = 230;
#图片地址
$pic = 'img/23.jpg';
#标题
$title = '戴尔燃7000';
#价格
$price = 3500.00;		#float(3500.00)
#是否特价
$isOnsale = false;  #true
#上架时间
$shelfTime = 1501234567890;   #float


#echo '编号：$lid';
echo "编号：$lid <br>图片地址：$pic<br>";
echo "价格：$price<br>";
echo "是否特价：$isOnsale<br>";
echo "上架时间：$shelfTime<br>";

?>