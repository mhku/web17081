(()=>{
    "use strict";
    //var textName=document.getElementsByName("username")[0];
    var textName=document.querySelector("[name=username]");
    var txtPwd=document.querySelector("[name=pwd]")
    textName.onfocus=txtPwd.onfocus=e=>{
        e.target.className="txt_focus";
        e.target.parentNode.nextElementSibling.children[0].className="";
    }
    textName.onblur=e=>vali(e.target,/^\w{1,10}$/);
    function vali(txt,reg){
        txt.className="";
        var div=txt.parentNode.nextElementSibling.children[0];
        if(reg.test(txt.value)==true){
            div.className="vali_success";
        }else
        div.className="vali_fail";
    }
    txtPwd.onblur=e=>vali(e.target,/^\d{6}$/)
})();