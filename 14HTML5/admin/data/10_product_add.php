<?php
 require("init.php");
 $family_id=$_REQUEST["family_id"];
 $title=$_REQUEST["title"];
 $subtitle=$_REQUEST["subtitle"];
 $price=$_REQUEST["price"];
 $promise=$_REQUEST["promise"];
 $spec=$_REQUEST["spec"];
 $lname=$_REQUEST["lanme"];
 $os=$_REQUEST["os"];
 $memory=$_REQUEST["memory"];
 $resolution=$_REQUEST["$resolution"];
 $video_cart=$_REQUEST["video_cart"];
 $cpu=$_REQUEST["cpu"];
 $video_memory=$_REQUEST["video_memory"];
 $category=$_REQUEST["category"];
 $disk=$_REQUEST["disk"];
 $details=$_REQUEST["details"];
// $shelf_time=$_REQUEST["shelf_time"];
// $sold_count=$_REQUEST["sold_count"];
// $is_onsale=$_REQUEST["is_onsale"];
// $expire=$_REQUEST["expire"];
 $sql="INSERT INTO xz_laptop VALUES(NULL,family_id,'$title','$subtitle',$price,' $promise',' $spec','$lname','$os','$memory','$resolution','$video_cart','$cpu','$video_memory','$category')";
?>