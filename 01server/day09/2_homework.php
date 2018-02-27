<?php		
/*		
输出关联数组中的元素 —— 关联数组元素下标是string
*/
$user = ['uid'=>10, 'uname'=>'dingding'];

echo $user['uid'];
#echo $user['uname'];

#echo $user[uid];  //运行时错误

#echo "编号：$user['uid']";  //运行时错误
echo "编号：$user[uid]";
echo "编号：". $user[uid];




