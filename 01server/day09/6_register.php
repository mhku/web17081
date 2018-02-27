<?php
/*
使用PHP预定义变量 $_REQUEST： array(0){ }
*/

echo "USER REGISTER";
echo "<hr>";

#var_dump( $_REQUEST );
echo "要存入数据库的用户名：". $_REQUEST['uname'];
echo "要存入数据库的密码：". $_REQUEST['upwd'];
