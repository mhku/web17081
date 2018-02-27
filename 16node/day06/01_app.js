const http=require("http");
const express=require("express");
var app=express();
var server=http.createServer(app);
server.listen(8080);
app.use(function(req,res,next){
    "use strict";
    console.log("1个中间件");
    console.log(new Date());
    next();
})
app.use("/admin",function(req,res,next){
    "use strict";
    console.log("2个中间件");
    console.log(new Date());
    var uid=req.query.uid;
    if(uid==1){
        next();
    }else{
        res.send("非法访问");
    }
});
app.get("/",(req,res)=>{
    "use strict";
    console.log("第一个请求");
    res.send("hello nodejs")
})
app.get("/test",(req,res)=>{
    "use strict";
    console.log(3);
    res.send("hello test");
})