<?php
 /*
  更新用户的基本信息，包括用户真实姓名、性别、邮箱、电话
  输入user_name/gender/email/phone/uid
  输出 修改成功或修改失败等提示内容
 */
 @$uid=$_REQUEST["uid"]or die("请输入uid编号");
 @$user_name=$_REQUEST["user_name"] or die("请输入用户名");
 @$gender=$_REQUEST["gender"]or die("请输入性别");
 @$email=$_REQUEST["email"]or die("请输入邮箱);
 @$phone=$_REQUEST["phone"]or die("请输入电话");
 require("init.php");
 $sql=""UPDATE xz_user SET user_name='$user_name',gender='$gender',email='$email',phone='$phone' WHERE uid=$uid" ";
$result=mysqli_query($conn,$sql);
 if($result){
  echo "修改成功";
  $c = mysqli_affected_rows($conn);
  	echo "修改操作影响的行数：$c";
 }
 else{
  echo "修改失败";
 }
?>