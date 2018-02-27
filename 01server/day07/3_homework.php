<?php
/*
计算克雷托健康指数
*/
$weight = 80;   //kg
$height = 1.8;  //m

//计算克雷托指数
$factor = $weight / ($height * $height) ;

//判定所处的范围
$result =	$factor>=25 ? '正常' : (
				$factor>=20 ? '正常' : '偏瘦'
			);
echo "您的体重状况：$result";