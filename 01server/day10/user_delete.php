<?php
 /*根据客户端提交的用户编号，从数据库中删除该用户记录
 输入：uid(客户端必须提交要删除的用户的编号)
 输出：“删除成功或者删除失败”等提示信息
 */
 @$uid=$_REQUEST["uid"];
 $conn=$conn=mysqli_connect("127.0.0.1","root","","xuezi",3306);
 $sql="DELETE FROM xz_user WHERE uid='$uid'";
 $result=mysqli_query($conn,$sql);
 if($result){
  echo "删除成功";
  $count=mysql_affected_rows($conn);
  echo "删除操作影响的行数: $count"
 }else{
  echo "删除失败";
  echo "请检查： $sql";
 }
?>