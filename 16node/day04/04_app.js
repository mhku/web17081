//使用express创建web服务器
const http = require("http");
const express = require("express");
const mysql = require("mysql");

var pool = mysql.createPool({
  host:"127.0.0.1",
  user:"root",
  database:"web1708acl02",
  password:"",
  port:3306,
  connectionLimit:25
});
var app = express();
var server = http.createServer(app);
server.listen(8080);

app.get("/role/:rid",(req,res)=>{
   var rid = req.params.rid;
   pool.getConnection((err,conn)=>{
      if(err)throw err;
      var sql = "SELECT * FROM t_role WHERE rid = ?";
      conn.query(sql,[rid],(err,result)=>{
         res.json(result);
         conn.release();
      });
   });
});
