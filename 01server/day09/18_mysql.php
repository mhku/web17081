<?php
/*
使用PHP访问MySQL服务器，
向部门表中添加一行新的记录
*/

//1.连接到MySQL服务器
$conn = mysqli_connect('127.0.0.1', 'root', "", "danei", 3306);

#var_dump($conn);  测试查看一下连接是否成功了

//2.向MySQL服务器提交SQL命令
$sql = "INSERT INTO dept VALUES(50, 'TESTING')";
$result = mysqli_query($conn,  $sql);

//3.查看执行结果
if( $result===false ){
	echo "SQL语句执行失败！请检查语法：$sql";
}else {
	echo "新的部门信息已经保存到数据库！";
}
