import { Component, OnInit } from '@angular/core';
import {MyHttpService} from '../utility/service/http.service'

@Component({
  selector: 'storeList',
  templateUrl: './list.component.html',
  styleUrls:['assets/css/products.css']
})

export class ListComponent implements OnInit {
  nowPage:number = 1;//记录当前选中的第几页
  pageCount:number = 1;//记录一共有几页
  pageList:Array<any>=[];//记录页码的数组 1,2,3,4,5
  list:Array<any> = [];
  constructor(private myHttpService:MyHttpService) { }

  ngOnInit() {
    //在组件初始化完成之后，向服务器端请求产品列表的数据
    this.loadData();
   }

   //切换页面
   changePage(pageNo:number){
     //设置当前是第几页
      this.nowPage = pageNo;
      //请求该页面对应的数据
      this.loadData();
   }

   //点击上一页或者下一页，切换不同的页面
   modifyPage(isNext:boolean){
     if(isNext)
     {
       if(this.nowPage == this.pageCount){
         return;
       }
       //下一页
       this.nowPage++;
     }
     else{
       if(this.nowPage == 1){
         return;
       }
       //上一页
       this.nowPage--;
     }
     this.loadData();

   }

   //加载数据
   loadData(){
    this.myHttpService
      .sendRequest('http://localhost/ajia_code/data/product/list.php?pno='+this.nowPage).subscribe((result)=>{
          console.log(result);
          //保存列表数据到list数组中
          this.list = result.data;
          //保存一共有多少页
          this.pageCount = result.pageCount;
          //根据页码总数 向pageList数组去放数据
          this.pageList = [];
          for(var i=0;i<this.pageCount;i++){
            var page = i+1;
            this.pageList.push(page);
          }
      });
   }

}