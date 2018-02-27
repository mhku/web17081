<?php
/**
创建一个整数变量表示一个订单的状态，
1-
2-
3-
4-
5-
其它-
输出对应的汉字提示文字
**/

$status = 4;

/*
if($status===1){
	echo "待付款";
}else{
	if($status===2){
		echo "备货中";
	}else{
		if($status===3){
			echo "运输中";
		}else{
			if($status==4){
				echo "派货中";
			}else{
				if($status===5){
					echo "已完成";
				}else{
					echo "未知订单状态";
				}
			}
		}
	}
}
*/
if($status===1){
	echo "待付款";
}else if($status===2){
	echo "备货中";
}else if($status===3){
	echo "运输中";
}else if($status===4){
	echo "派货中";
}else if($status===5){
	echo "已完成";
}else {
	echo "未知订单状态";
}
