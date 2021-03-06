//加载index.html->自动执行header.js
(()=>{
	function loadStatus(){
		//判断登录:
		var loginList=document.getElementById("loginList");
		var welcomeList=document.getElementById("welcomeList");
		ajax({
			type:"get",
			url:"data/routes/users/isLogin.php"
		}).then(data=>{//data:{ok:1,uname:xxx}
			console.log(data.ok);
			if(data.ok==1){
				loginList.style.display="none";
				welcomeList.style.display="block";
				document.getElementById("uname").innerHTML=data.uname;
			}else{
				loginList.style.display="block";
				welcomeList.style.display="none";
			}
		});
	}
	//向header.html发送ajax get请求
	ajax({
		type:"get",
		url:"header.html",
		dataType:"html"
	})
	//然后，将获得的html片段，设置为header的内容
	.then(html=>{
		var header=document.getElementById("header");
		header.innerHTML=html;

		/*如果url中有kw参数，就读取kw参数到txtSearch文本框中*/
		if(location.search)
			document.getElementById("txtSearch")
			        .value=decodeURI(
								location.search.split("=")[1]
			        );
		
		/*为search按钮添加单击事件，跳转到商品列表页*/
		//查找data-trigger属性为search的a绑定单击事件
		document.querySelector("[data-trigger=search]")
			.onclick=()=>{
			//获得id为txtSearch的内容,去掉开头和结尾的空格保存在变量kw中
			var kw=document.getElementById("txtSearch")
										.value.trim();
			if(kw!=="")//如果kw不为""
				//用location跳转到products.html?kw=kw
				location="products.html?kw="+kw;
		}

		loadStatus();

		//注销: 
		document.getElementById("logout").onclick=()=>{
			ajax({
				type:"get",
				url:"data/routes/users/logout.php",
				dataType:"text"
			}).then(()=>{
				location.reload();
			})
		}
	})
})();