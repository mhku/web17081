//查找触发事件的元素
//绑定事件
//查找要修改的元素
//修改元素

//查找table下thead下第一个th下的input,保存在chbAll
var chbAll=document.querySelector(
    "table>thead th:first-child>input"
);
//为chbAll绑定单击事件
chbAll.onclick=e=>{
    //获得当前input，保存在chbAll中
    var chbAll=e.target;
    //查找table下tbody下每行第一个td下的input,保存在变量chbs中
    var chbs=document.querySelectorAll(
        "table>tbody td:first-child>input"
    );
    //遍历chbs中每个chb
    for(var chb of chbs)
        //设置chb的checked等于chbAll的checked
        chb.checked=chbAll.checked;
}

//查找table下tbody下每行第一个td下的input,保存在变量chbs中
var chbs=document.querySelectorAll(
    "table>tbody td:first-child>input"
);
for(var chb of chbs)//遍历chbs中每个chb
    chb.onclick=e=>{//为每个chb绑定单击事件
        var chb=e.target;//获得当前chb
        //查找table下tbody下每行第一个td下的未选中的input,保存在unchecked中
        var unchecked=document.querySelector(
            "table>tbody td:first-child>input:not(:checked)"
        );
        if(unchecked)//如果找到unchecked
            chbAll.checked=false;
        else//否则
            chbAll.checked=true;
    }
