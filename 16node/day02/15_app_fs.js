const fs=require("fs");
var str=new Data().toString();
console.log("开始想文件内保存数据");
fs.writeFileSync("./2.log",str);
console.log("保存数据结构");