<?php
require("00_init.php");
//10:45--10:50
//0:uid/rid/state '1''0'
$uid = $_REQUEST["uid"];  //用户编号
$rid = $_REQUEST["rid"];  //角色色编号
//$state = $_REQUEST["state"];//状态 '1' '0'
//1:查询指定用户id与角色id是否存在关联关系
//$sql = "SELECT * FROM t_user_role ";
//$sql .= " WHERE uid=$uid";
//$sql .= " AND rid=$rid";
//$result = mysqli_query($conn,$sql);
//$row = mysqli_fetch_assoc($result);
//if($row)
//3:不存在添加
$sql = "INSERT INTO t_user_role VALUES(null,$rid,$uid)";
$result = mysqli_query($conn,$sql);
$row = mysqli_affected_rows($conn);
if($row>0){
  echo '{"code":1,"msg":"添加成功"}';
}else{
  echo '{"code":-1,"msg":"添加失败"}';
}