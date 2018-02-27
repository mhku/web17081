const http=require("http");
//创建http服务器对象
var server=http.createServer();
//绑定监听端口
server.listen(8080);
server.on("request",function(req,res){
    "use strict";
    console.log("node.js服务器启动...");
    console.log("请求并且解析客户端消失。。。");
    console.log("请求方法"+req.method);
    console.log("请求地址"+req.url);
    console.log("请求协议的版本"+req.httpVersion);
    console.log("请求头部"+req.headers);
    console.log();
    //响应消失
    res.statusCode=200;
    res.setHeader("Content-Type","text/html;charset=utf-8");
    res.write("<html>");
    res.write("<body>");
    res.write("<h1>你麻痹，你大爷的，艹你麻痹</h1>");
    res.write("</body>");
    res.write("</html>");
    res.end();
})