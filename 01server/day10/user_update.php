<?php
 /*
  �����û��Ļ�����Ϣ�������û���ʵ�������Ա����䡢�绰
  ����user_name/gender/email/phone/uid
  ��� �޸ĳɹ����޸�ʧ�ܵ���ʾ����
 */
 @$uid=$_REQUEST["uid"]or die("������uid���");
 @$user_name=$_REQUEST["user_name"] or die("�������û���");
 @$gender=$_REQUEST["gender"]or die("�������Ա�");
 @$email=$_REQUEST["email"]or die("����������);
 @$phone=$_REQUEST["phone"]or die("������绰");
 require("init.php");
 $sql=""UPDATE xz_user SET user_name='$user_name',gender='$gender',email='$email',phone='$phone' WHERE uid=$uid" ";
$result=mysqli_query($conn,$sql);
 if($result){
  echo "�޸ĳɹ�";
  $c = mysqli_affected_rows($conn);
  	echo "�޸Ĳ���Ӱ���������$c";
 }
 else{
  echo "�޸�ʧ��";
 }
?>