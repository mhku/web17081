<?php
 /*���ݿͻ����ύ���û���ţ������ݿ���ɾ�����û���¼
 ���룺uid(�ͻ��˱����ύҪɾ�����û��ı��)
 �������ɾ���ɹ�����ɾ��ʧ�ܡ�����ʾ��Ϣ
 */
 @$uid=$_REQUEST["uid"];
 $conn=$conn=mysqli_connect("127.0.0.1","root","","xuezi",3306);
 $sql="DELETE FROM xz_user WHERE uid='$uid'";
 $result=mysqli_query($conn,$sql);
 if($result){
  echo "ɾ���ɹ�";
  $count=mysql_affected_rows($conn);
  echo "ɾ������Ӱ�������: $count"
 }else{
  echo "ɾ��ʧ��";
  echo "���飺 $sql";
 }
?>