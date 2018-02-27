var form=document.forms[0];
//Step1:为name为username和pwd的文本框绑定获得焦点事件
var txtName=form.username;
var txtPwd=form.pwd;
txtName.onfocus=getFocus;
txtPwd.onfocus=getFocus;
function getFocus(){
  //this->当前文本框
  //当前文本框边框加粗
  this.className="txt_focus";
  //清除旁边div的class
  var div=this.parentNode
      .nextElementSibling
      .firstElementChild;
  div.className="";
}
txtName.onblur=function(){
  vali(this,/^\w{1,10}$/);
}
function vali(txt,reg){
  //清除当前文本框的class
  txt.className="";
  //获取旁边div
  var div=txt.parentNode
    .nextElementSibling
    .firstElementChild;
  //用reg测试当前文本框的内容
  //如果通过,就修改div的class为vali_success
  if(reg.test(txt.value)){
    div.className="vali_success";
		return true;
  }else{//否则修改div的class为vali_fail
    div.className="vali_fail";
		return false;
	}
}
txtPwd.onblur=function(){vali(this,/^\d{6}$/);}
//找到倒数第二个提交按钮，为其绑定单击事件
form.elements[form.length-2].onclick=()=>{
	//验证txtName
    /*var rName=vali(form.username,/^\w{1,10}$/);
	//验证txtPwd
	var rPwd=vali(form.pwd,/^\d{6}$/);
	//如果都通过，才手动提交
	if(rName&&rPwd) form.submit();*/
    if(!vali(form.username,/^\w{1,10}$/)){
        form.username.focus();
    }else if(!vali(form.pwd,/^\d{6}$/)){
        form.pwd.focus();
    }else{
        form.submit();
    }

}




