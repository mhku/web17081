if(window.$==undefined){
  throw new Error("jquery未加载");
}
(()=>{
    $(function(){
      $.ajax({
        type:"get",
        url:'data/getbanner.php'
      }).then((data)=>{
            console.log(data);
            var html="";
            for(var p of data){
              console.log(p.pic);
              html+=`
               <img src="${p.pic}">
            `
            }
            //html+=`<img src="img/banner1.png">`;
            //  console.log(html);
            html+="<ul id='carsel'>";
            for(var i=0;i<data.length;i++){
              html+=`<li>${i+1}</li>`
            }
            html+="</ul>";
            html+=`<div class="ctrl-slider prev_pic"></div>
      <div class="ctrl-slider next_pic"></div>`;
            $("#slider").html(html);
          //error:function(){
          //  alert("网络出错，请检查");
          //}
      }).catch(()=>{
          alert("网络出错，请检查");
      })
        .then(()=>{
          var interval=2000;
        var $imgList=$("#slider>img");
        var $liList=$("#carsel>li");
        var prev_pic=$("div.prev_pic");
        var next_pic=$("div.next_pic");
        $imgList[0].className="active";
        $liList[0].className="active";
        var index=0;
        function trans(){
          $imgList.eq(index)
            .addClass("active")
            .siblings()
            .removeClass("active");
          $liList.eq(index)
            .addClass("active")
            .siblings()
            .removeClass("active");
        }
        function lunbo(){
          index++;
          (index>=4)&&(index=0);
         trans();
        }
        var timer=setInterval(
          lunbo,interval);
        //为所有的页码绑定事件
        $liList.mouseover(function(){
          clearInterval(timer);
          timer=null;
          index=parseInt($(this).html())-1;
          console.log(index);
        trans();
        });
        $liList.mouseout(function(){
           timer=setInterval(lunbo,interval);
        });
        $imgList.mouseover(function(){
          clearInterval(timer);
          timer=null;
        });
        $imgList.mouseout(function(){
          timer=setInterval(lunbo,interval);
        });
        $("#slider div.ctrl-slider").hover(
          function(){
            clearInterval(timer);
            timer=null;
          },
          function(){
            timer=setInterval(lunbo,interval);
          }
        );
         prev_pic.click(function(){
           console.log(index);
           (index==0)&&(index=4);
            if(index>0){
              index--;
              trans();
            }
         });
        next_pic.click(function(){
          index++;
          console.log(index);
          (index>3)&&(index=0);
          if(index<=3){
           trans();
          }
        })
      })
    })
})();