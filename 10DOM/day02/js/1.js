//查找触发事件的元素
//绑定事件
//查找要修改的元素
//修改元素

//查找class为tree下的所有span,保存在spans中
var spans=document.querySelectorAll(".tree span");
for(var span of spans){//遍历spans中每个span
    span.onclick=e=>{//为当前span绑定单击事件
        var span=e.target;//获得当前span，保存在span中
        //如果当前span的className是open
        if(span.className=="open")
            span.className="";//清空当前span的className
        else{//否则
            //查找class为tree下的class为open的span,保存在openSpan中
            var openSpan=document.querySelector(
                ".tree span.open"
            );
            if(openSpan)//如果找到openSpan
            //清除openSpan的className
                openSpan.className="";
            //设置当前span的className为open
            span.className="open";
        }
    }
}
//练习8分钟，下课休息10分钟