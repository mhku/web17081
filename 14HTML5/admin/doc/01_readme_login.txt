1:创建学子商城后台管理员表
注意事项:
1:表名，列名全小写
2:每张表必须的主键id
3:重要内容表
4:添加列创建记录时间
5:添加列创建用户id
6:添加列修改记录时间
7:添加列修改用户id
8:添加列冗余字段 小表2个(1 int 1 varchar )大表4个
9:添加列  expire 失效字段 enum('0','1')
10:密码必须加密保密处理

2:密码加密处理
加密:
原文:123456
      |加密
密文:8sdd7afsdh23389d3723uxhe83
加密方式:
1:单向不可逆(只能加密没有解密方法)
2:对称加密  (加密有解密)    DES
3:非对称加密(安全级别最高)

如何实现加密操作
(1)js 自己写一个加密算法
(2)php自己写一个加密算法
(3)mysql 自带函数 md5();

示例:
SELECT md5('123456');
md5加密结果 128位密码->32位字符
e10adc3949ba59abbe56e057f20f883e

3:解密方式
碰撞测试
SELECT md5('122%_ {}`--`!exp~11138djh387yn2322__-');
7ebf7d8f36cb3e27ce17ed497adf5f82
4:多次加密
md5(md5(md5('123456')));
5:其它加密算法
AES
SHA2 加密算法  512位


流程:
1:添加测试数据
  INSERT INTO xz_admin VALUES(null,'tom',md5('123456'),......);
2:登录流程
  tom/123456
  SELECT * FROM xz_admin
  WHERE uname='$uname' AND upwd='md5($upwd) ;

#模块一:后台管理员登录
1:admin/data/01_login.php
2:admin/index.html  [己存在]
3:admin/js/index.js


添加功能:php验证用户名和密码格式
通用规则:前端js验证一次用户名和密码格式
         后端php再验证一次用户名和密码格式
原因:    js验证可以跳过
解决:    php preg_match("正则表达式",字符串);
true false




错锦集锦1:
<b>Warning</b>:  mysqli_fetch_assoc() expects parameter 1 to be mysqli_result, boolean given in
 on line <b>14
解析:错误在14行上下,错误原因sql出错

解决方案一:输出sql
echo $sql;
解决方案二:判断sql是否出错
$result = mysqli_query($conn,$sql);
if(mysqli_error($conn)){
  echo mysqli_error($conn);
}

用户登录问题:易受攻击性
网络攻手段:机器人攻击
循环->ajax->程序

解决方案:验证码
1:全数字加干扰线，干扰点
2:字母,数字,字体,斜干扰线复杂(***)
  所有验证码(图片)都是后台程序生成
  java/php/....
3:短信(居多)
4:第三方验证(博客园)

添加程序
1:03_code.php  作用生成验证码图片->生成验证码文字
               并且保存 $_SESSION["code"];
修改程序
index.html
index.js
01_login.php

添加功能:"看不清点击换一张"
1:<img id="setYzm" title="看不清点击换一张"
  src="data/03_code.php" />
2:setYzm.onclick = function(){
    //发送异步请求，获取新的验证码
    this.src = "data/03_code.php";
  }

如何调试程序错误()
1:最常见错误 json拼写错误
  出错提示;undefined 发送不是json
  (1)php拼写错误
     echo  '{"code":0,"msg":"错误"}';
     echo  {"code":0,"msg":"错误"}';
  (2)header错
header("Content-Type:application/json;charset=utf-8");
   F12->network->response header
  (3)php语法出错
2:缓存问题:如何解决
  f12>network->[*]Disable cache
3:数据库操作:sql







