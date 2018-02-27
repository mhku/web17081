<?php
header("Content-Type:application/json;charset=utf-8");
//所有上传文件信息都保存在数组
//1:获取上传文件名称
//2:获取上传文件大小
$picname = $_FILES["myfile"]["name"];
$picsize = ceil($_FILES["myfile"]["size"]/1000);
//3:最大512KB
if($picsize>512){
 echo '{"code":-1,"msg":"上传文件过大不能超过 512K"}';
 exit;
}
//4:获取文件后缀 .jpg .png .gif  1.jpg==>.jpg
$type = strstr($picname,".");
//5:如果文件后缀不上以范围,程序停止
if($type != ".gif" && $type !=".jpg"
   && $type!=".png"){
 echo '{"code":-2,"msg":"上传文件必须是图片 "}';
 exit;
}
//6:创建新文件名
$pics = time().rand(1,9999).$type;
//7:将临时文件移动新目录 upload/新文件名称
$old =  $_FILES["myfile"]["tmp_name"];//临时文件名
$new =  "upload/".$pics;
move_uploaded_file($old,$new);
echo '{"code":1,"msg":"上传文件成功"}';
