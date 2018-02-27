import { Component, OnInit } from '@angular/core';
import {MyHttpService} from '../utility/service/http.service'
import {Router} from '@angular/router'

@Component({
  selector: 'storeCart',
  templateUrl: './cart.component.html',
  styleUrls:['assets/css/cart.css']
})

export class CartComponent implements OnInit {
  list:Array<any> = [];
  //记录是否选中了 全选
  isAllSelected:boolean = false;

  constructor(
    private myRouter:Router,
    private myHttpService:MyHttpService) { }

  ngOnInit() { 
    //向服务器端发起请求
    this.myHttpService
      .sendRequest('http://localhost/admin/data/cart/list.php')
      .subscribe((result)=>{
          console.log(result);
          this.list = result.data;
          //遍历list，给每一个商品添加一个isSelected属性
          for(var i=0;i<this.list.length;i++){
            this.list[i].isSelected = false;
          }
      });

  }

  //当全选的复选框触发ngModelChange事件 调用该方法
  selectAll(){
    //遍历list，将list中每一个对象的isSelected修改为当前全选的结果
    for(var i=0;i<this.list.length;i++){
      this.list[i].isSelected = this.isAllSelected;
    }
  }
  //当选中购物车列表中某一个商品时，调用该方法
  selectOne(){
    let result:boolean = true;
    //逻辑与运算
    for(var i=0;i<this.list.length;i++){
      result = this.list[i].isSelected && result
    }
    //将与运算的结果赋值给isAllSelected
    this.isAllSelected = result;
  }

  //跳转到订单确认页面
  jumoToOrderConfirm(){
      this.myRouter.navigateByUrl('/orderConfirm');
  }

  //实现修改购物车中指定产品的数量
  //isAdd 是加还是减 index是修改的产品在购物车列表背后数组的下标
  modifyProductCount(isAdd:boolean,index:number){
    console.log(this.list,index);
    if(isAdd)
    {
      this.list[index].count++;
    }
    else{
      if(this.list[index].count == 1){
        return
      }
      this.list[index].count--;
    }
    console.log(this.list);
  }

}