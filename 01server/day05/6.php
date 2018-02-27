<?php

#声明变量时无需指定类型，其类型会根据值自动的判定——弱类型语言
$time = 150;		#int(150)

#echo 只能输出变量的值
#var_dump  输出变量的类型和值
#var_dump($time);

#$time = 2147483647;		#int(2147483647)
$time = 2147483648;			#float(2147473648)
var_dump($time);


?>