import { Component, OnInit,OnDestroy } from '@angular/core';
import {Router} from '@angular/router'

@Component({
  selector: 'step3',
  templateUrl: './orderConfirmStepThree.component.html'
})

export class OrderConfirmStepThreeComponent implements OnInit ,OnDestroy{
  count:number = 5;
  myTimer:any;
  constructor(private myRouter:Router) { }

  ngOnInit() { 
    this.myTimer = setInterval(
      ()=>{
        this.count--;
        if(this.count == 0){
          //结束定时器
          clearInterval(this.myTimer);
          this.myTimer = null;
          //跳转到首页
          this.myRouter.navigateByUrl('/index');
        }
      },
      1000);
  }

  ngOnDestroy(){

    //检查定时器是否已经关闭，如果没有关闭，结束掉定时器
    if(this.myTimer){
        clearInterval(this.myTimer);
        this.myTimer = null;
    }

  }
}