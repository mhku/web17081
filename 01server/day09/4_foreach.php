<?php
/*
练习：创建一个数组，其中保存5个商品的单价，使用foreach循环输出每个单价，最后再输出所有商品的总价 —— 索引数组
*/
$priceList = [100, 200, 300, 400, 500];

/*
$sum = 0;
for($i=0; $i<count($priceList); $i++){
	echo "$priceList[$i]<br>";
	$sum += $priceList[$i];
}
echo $sum;					
*/
$sum = 0;
foreach( $priceList as  $v){
	echo "$v <br>";   # 错误写法！$priceList[$v]
	$sum += $v;
}
echo $sum;

//结论：for循环遍历数组更加灵活(跳序倒序等)但容易出错(下标越界)！foreach更加简单但不够灵活(只能从前往后依次遍历)


echo "<hr>";
/*
练习：创建一个数组，保存一个笔记本商品的数据，名称、单价、上架时间、是否特价，使用foreach循环输出所有的数据 —— 关联数组
*/
$laptop = [
	'title'=>'戴尔燃7000',
	'price'=>5500.00,
	'shelfTime'=>1501234568890,
	'isOnsale'=>true
];

#for循环无法遍历关联数组
foreach($laptop  as  $k=>$v){
	echo "$k  $v  <br>";
}

#说明：一般项目中，关联数组不需要遍历，逐个输出即可






