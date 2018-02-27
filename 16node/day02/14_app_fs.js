//加载模块fs
const fs=require("fs");
//同步读取文件内容
//node.js解析器
console.log("开始进行文件的读取");
var data=fs.readFileSync("./7.html");
console.log("2文件读取完成");
console.log(data);
console.log(data.toString());