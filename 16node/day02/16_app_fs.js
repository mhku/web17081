//同步(Synchronize)同步向文件追加数据
const fs=require("fs");
var str=new Date().toString()+"\r\n";
console.log("追加开始");
fs.appendFileSync("./3.txt",str);
console.log("追加结束");