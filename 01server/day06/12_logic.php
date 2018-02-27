<?php
/*
1、价格打折：创建变量保存商品总金额：如果金额>=100元，则享受八折。输出最终实际应收金额
*/

#方法1：使用&&的短路逻辑实现
#  false &&  条件2
#  条件2：  $price*0.8
/*
$price = 120;
($price>=100) && ($price=$price*0.8);
echo $price;
*/
#方法2：使用||的短路逻辑实现
#   true ||  条件2
#   条件2： $price=$price*0.8
#$price = 90;
$price = 120;
($price<100) || ($price=$price*0.8);
echo $price;

?>