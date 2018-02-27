//使用express创建web服务器
const http = require("http");
const express = require("express");
const mysql = require("mysql");
//const qs=require("querystring");
const bodyParse=require("body-parser");

var app = express();
app.use(bodyParse.urlencoded({extended:false}));
app.use(express.static("public"));

var server = http.createServer(app);
server.listen(8080);

app.post("",()=>{})