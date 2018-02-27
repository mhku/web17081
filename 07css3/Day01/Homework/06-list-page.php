<?php 
	/*1、练习1*/
	#1、声明currentPage,如果前端没传递过来的话，默认为1
	@$currentPage=$_REQUEST["currentPage"];
	if($currentPage == null){
		$currentPage = 1;
	}
	#2、声明pageSize,如果前端没传递过来的话，默认为10
	@$pageSize=$_REQUEST["pageSize"];
	if($pageSize == null){
		$pageSize = 10;
	}
	
	require("00-init.php");

	/*以下内容被移到页码计算之后*/
	/*#3、根据pageSize 和 currentPage，来计算当前页显示的首条记录的下标是多少,将结果保存在 $start中
	$start=($currentPage-1)*$pageSize;

	
	#1、根据 $pageSize以及$start查询数据
	require("00-init.php");
	$sql="select * from xz_user limit $start,$pageSize";
	$result=mysqli_query($conn,$sql);
	$array=mysqli_fetch_all($result,MYSQLI_ASSOC);*/


	/*3、练习3：计算页码*/
	#1、计算尾页即总页数
	#1.1 计算总记录数，保存在$total中
	$sql = "select count(*) from xz_user";
	$result=mysqli_query($conn,$sql);
	$row = mysqli_fetch_row($result);
	$total=$row[0];
	#1.2 根据$total和$pageSize计算总页数，保存$totalPage
	$totalPage = ceil($total / $pageSize);


	#增加：判断 currentPage 是否超出 $totalPage,如果currentPage 超出 totalPage的话，那么就将currentPage强制更改为 totalPage
	if($currentPage > $totalPage){
		$currentPage = $totalPage;
	}
	#增加：判断 currentPage是否小于1,如果小于1的话，则将 currentPage 强制更改为1
	if($currentPage < 1){
		$currentPage = 1;
	}



	#2、计算上一页
	$prePage = 1;
	if($currentPage > 1){
		$prePage = $currentPage - 1;
	}
	#3、计算下一页
	$nextPage = $totalPage;
	if($currentPage < $totalPage){
		$nextPage = $currentPage + 1;
	}


	#3、根据pageSize 和 currentPage，来计算当前页显示的首条记录的下标是多少,将结果保存在 $start中
	$start=($currentPage-1)*$pageSize;

	/*2、练习2*/
	#1、根据 $pageSize以及$start查询数据
	
	$sql="select * from xz_user limit $start,$pageSize";
	$result=mysqli_query($conn,$sql);
	$array=mysqli_fetch_all($result,MYSQLI_ASSOC);

	//将页码的信息插入到 $array的最后一个元素位置处
	Array_push($array,"{\"firstPage\":1,\"prePage\":$prePage,\"nextPage\":$nextPage,\"totalPage\":$totalPage}");

	echo json_encode($array);


	/*{
		\"firstPage\":1,
		\"prePage\":$prePage,
		nextPage:$nextPage,
		totalPage:$totalPage
	}*/

	/*
		\" : "
	*/
















	#echo json_encode($array);
?>