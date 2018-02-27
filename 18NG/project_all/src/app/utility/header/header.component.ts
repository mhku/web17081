import { Component, OnInit } from '@angular/core';
import {MyHttpService} from '../service/http.service'

@Component({
  selector: 'storeHeader',
  templateUrl: './header.component.html'
})

export class HeaderComponent implements OnInit {
  isUserLogin:boolean = false;
  userName:string = "";
  constructor(private myHttpService:MyHttpService) { }

  ngOnInit() { 
      //检查用户是否登录（与服务器端的通信）
      this.myHttpService
        .sendRequest('http://localhost/admin/data/user/session_data.php')
        .subscribe((result:any)=>{
          console.log(result);
          if(result.uname){
            this.isUserLogin = true;
            this.userName = result.uname;
          }
          else{
            this.isUserLogin = false;
            this.userName = "";
          }
        });
  }

//退出登录
  logout(){
    this.myHttpService
    .sendRequest('http://localhost/admin/data/user/logout.php').subscribe((result)=>{
        console.log(result);
        if(result.code == 200)
        {
          this.isUserLogin = false;
          this.userName = "";
        }
    })
  }
}