<?php
@$n=$_REQUEST["uname"] or die("�û����Ǳ����");
@$p=$_REQUEST["upwd"]or die("�����Ǳ����");
@$e=$_REQUEST["email"]or die("�����Ǳ����");
@$h=$_REQUEST["phone"]or die("�绰�Ǳ����");
$conn=mysqli_connect("127.0.0.1","root","","xuezi",3306);
$sql="INSERT INTO xz_user(uname,upwd,email,phone) VALUES('$n','$p','$e','$h')";
$result=mysqli_query($conn,$sql);
if($result===false){
 echo "ע��ʧ��";
}else{
 echo "ע��ɹ�";
 $uid=mysqli_insert_id($conn);
 echo "���û������ݿ��еı��Ϊ��$uid";
}
?>