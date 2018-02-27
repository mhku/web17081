import { Component, OnInit } from '@angular/core';
import {MyHttpService} from '../utility/service/http.service'
import {Router} from '@angular/router'

@Component({
  selector: 'storeLogin',
  templateUrl: './login.component.html',
  styleUrls:['assets/css/login.css']
})

export class LoginComponent implements OnInit {
  //存储表单中用户所输入的用户名和密码
  userName:string="";
  userPwd:string="";

  constructor(
    private myRouter:Router,
    private myHttpService:MyHttpService) { }

  ngOnInit() { }

  //当点击登录按钮时，调用方法向服务器发起请求
  login(){
      //验证数据的正确
      console.log(this.userName,this.userPwd);
      this.myHttpService
      .sendRequest('http://localhost/admin/data/user/login.php?uname='+this.userName+"&upwd="+this.userPwd)
      .subscribe((result)=>{
          console.log(result);
          if(result.code == 200)
          {
            //跳转到首页
            this.myRouter.navigateByUrl('');
          }
      });
  }
}