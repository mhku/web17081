<?php
header("Content-Type:application/json;charset=utf-8");
$rows = [];
$rows[] = ["label"=>"部门一","value"=>180];
$rows[] = ["label"=>"部门二","value"=>190];
$rows[] = ["label"=>"部门三","value"=>210];
$rows[] = ["label"=>"部门四","value"=>210];
echo json_encode($rows);
