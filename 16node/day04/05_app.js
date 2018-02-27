//使用express创建web服务器
const http = require("http");
const express = require("express");
const mysql = require("mysql");
const qs=require("querystring");
const bodyParse=require("body-parser");

var app = express();
app.use(bodyParse.urlencoded({extended:false}))
var server = http.createServer(app);
server.listen(8080);
app.get("/login.html",(req,res)=>{
    "use strict";
    res.sendFile(__dirname+"/login.html");
});
app.post("/user",(req,res)=>{
    var uname=req.body.uname;
    var upwd=req.body.upwd;
    console.log(uname,upwd);
    res.send("ok");
    //req.on("data",(buf)=>{
    //    var obj=qs.parse(buf.toString());
    //    console.log(obj);
    //    res.send("ok");
    //})
})