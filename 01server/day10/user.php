<?php
@$n=$_REQUEST["uname"] or die("用户名是必须的");
@$p=$_REQUEST["upwd"]or die("密码是必须的");
@$e=$_REQUEST["email"]or die("邮箱是必须的");
@$h=$_REQUEST["phone"]or die("电话是必须的");
$conn=mysqli_connect("127.0.0.1","root","","xuezi",3306);
$sql="INSERT INTO xz_user(uname,upwd,email,phone) VALUES('$n','$p','$e','$h')";
$result=mysqli_query($conn,$sql);
if($result===false){
 echo "注册失败";
}else{
 echo "注册成功";
 $uid=mysqli_insert_id($conn);
 echo "新用户在数据库中的编号为：$uid";
}
?>