onmessage = function(e){
  console.log("接收到UI发来数据:"+e.data);
}


/**
 * 求质数
 * @param num           计算数值
 * @return boolean true 质数/false 不是
 * 9 [2 3 ]       false
 * 7 [2 3 4 5 6]  true 14:22--14:25
 */
function isPrime(num){
  //小技巧：让程序执行5S
  var start = new Date().getTime();
  do{
    var end = new Date().getTime();
  }while(end-start<=5000);

  for(var i=2;i<num;i++){
    if(num%i===0){
      break;
    }
  }
  return i==num;
}
//console.time("flag1");
var rs = isPrime(1234567890);
//console.timeEnd("flag1");
//var msg = document.getElementById("msg");
//msg.innerHTML = rs;
postMessage(rs);


