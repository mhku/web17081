onmessage = function(e){      //绑定接收数据事件
  var num = parseInt(e.data); //获取ui传来数值
  var sum = 0;
  for(var i=1;i<=num;i++){    //循环计算累加和
    sum+=i;
  }
  postMessage(sum);           //将累加和结果发送ui
}