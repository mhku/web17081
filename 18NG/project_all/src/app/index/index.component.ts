import { Component, OnInit } from '@angular/core';
import {MyHttpService} from '../utility/service/http.service'

@Component({
  selector: 'storeIndex',
  templateUrl: './index.component.html',
  styleUrls:['assets/css/animate.css','assets/css/item_cat.css','assets/css/slide.css']
})

export class IndexComponent implements OnInit {
  carouselItems:Array<any> = [];
  recommendedItems:Array<any> = [];
  newArrivalItems:Array<any> = [];
   //图片之间轮播的间隔时间
  private NextPhotoInterval: number = 1000;
  //是否要禁用循环播放
  private noLoopSlides: boolean = false;
  //Photos
  private slides: Array<any> = [];

  constructor(private myHttpService:MyHttpService) { }

  ngOnInit() {
    // 向服务器端请求数据(data/product/index.php)
    this.myHttpService
      .sendRequest('http://localhost/admin/data/product/index.php').subscribe((result)=>{
        console.log(result);
        //分别保存轮播图数据、推荐商品数据、新到商品数据
        this.carouselItems = result.carouselItems;
        this.recommendedItems = result.recommendedItems;
        this.newArrivalItems = result.newArrivalItems

        //给轮播图组件 准备图片的数据
        for(var i=0;i<this.carouselItems.length;i++){
          //读取每一张图片，将它放在声明的slides数组中
          var imgUrl = this.carouselItems[i].img;
          this.slides.push({image:imgUrl});
        }
        console.log(this.slides);
      })
   }
}