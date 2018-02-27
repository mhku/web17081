const fs=require("fs");
var src="./3.txt";
var des="./31.backup.txt";
console.log("开始复制");
fs.readFile(src,function(err,data){
    "use strict";
    if(err)throw err;
    console.log("2复制文件");
    fs.writeFile(des,data,function(err){
        if(err)throw err;
    })
});
console.log("3.复制结束");