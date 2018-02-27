<?php
header("Content-Type:application/json;charset=utf-8");
$conn=mysqli_connect("127.0.0.1","root","","lb_pic",3306);
mysqli_query($conn,"SET NAMES UTF8");
$sql="SELECT * FROM pic_detail";
$result=mysqli_query($conn,$sql);
if($result){
   $row=mysqli_fetch_all($result,MYSQLI_ASSOC);
   if($row){
     echo json_encode($row);
   }else{
     echo '{"code":-1,"msg":"err"}';
   }
}else{
 echo 'SQL有误';
}