<?php
/**
判定论坛中用户积分所在的等级
	>=500   元老
	>=200   精英
	>0		战士
**/

$score = 150;

if( $score>=500 ){
	echo "元老";
}else{
	if($score>=200){
		echo "精英";
	}else{
		echo "战士";
	}
}

