<?php
/*
练习：创建一个表示购物车的数组，开始时其中没有任何商品（即空数组）；
向其中添加一个商品的价格；
向其中添加一个商品的价格；
向其中添加一个商品的价格；
向其中添加一个商品的价格；
向其中添加一个商品的价格；
使用for循环输出购物车数组中的所有商品价格。
*/
#$shoppingCart
$cart = [ ] ;

//向数组中添加新元素
$cart[] = 3.5;
$cart[] = 4.5;
$cart[] = 5.5;
$cart[] = 6.5;
$cart[] = 7.5;

#var_dump($cart);
#echo count($cart);

/*
echo $cart[0];
echo $cart[1];
echo $cart[2];
echo $cart[3];
echo $cart[4];
*/

#for($i=0; $i<5; $i++){
for($i=0; $i<count($cart); $i++){
	echo "$i - $cart[$i] <br>";
}