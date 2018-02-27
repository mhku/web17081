const url=require("url");
var str="https://qd:123@www.jd.com:443/ad/index?uname=tom#chapter3";
var obj=url.parse(str);
console.log(obj);
var obj=url.parse(str,true);
console.log(obj);