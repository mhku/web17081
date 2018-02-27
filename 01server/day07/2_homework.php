<?php
/*
学子商城需要保存每个订单的状态:
$status = '待付款'
$status = '备货中'
$status = '运输中'
$status = '派送中'
$status = '已完成'
$status = '未知状态'
使用汉字保存固定的几种可能：浪费存储空间、不便于实现i18n
项目中一般使用TINYINT来存储固定的几种可能：
$status = 1;
$status = 2;
$status = 3;
$status = 4;
$status = 5;
$status = ?;
练习：创建一个整数变量表示一个订单的状态，输出为对应的汉字提示文字
*/
$status = 5;

$result =	$status===1 ? '待付款' : (
				$status===2 ? '备货中' : (
					$status===3 ? '运输中' : (
						$status===4 ? '派货中' : (
							$status===5 ? '已完成' : '未知状态'
						)
					)
				)
			);
echo "订单状态: $result";

