(()=>{
    "use strict";
    var sheet=document.styleSheets[1];
    //console.log(sheet);
    //var rule=sheet.cssRules;
    //console.log(rule);
    var sRule=sheet.cssRules[4];
    var mRule=sheet.cssRules[5];
    var hRule=sheet.cssRules[6];
    var sRule_start=sRule.cssRules[0];
    var sRule_end=sRule.cssRules[1];
    var mRule_start=mRule.cssRules[0];
    var mRule_end=mRule.cssRules[1];
    var hRule_start=hRule.cssRules[0];
    var hRule_end=hRule.cssRules[1];
    var now=new Date();
    var s=now.getSeconds();
    var m=now.getMinutes();
    var h=now.getHours();
    var sDeg=s/60*360;//秒针起始的旋转角度
    console.log(sDeg);
    var mDeg=(m*60+s)/3600*360;//分针起始的旋转角度
    console.log(mDeg);
    var hDeg=(h*3600+m*60+s)/(3600*12)*360;//时针起始的旋转角度
    console.log(hDeg);
    sRule_start.style.transform="rotate("+sDeg+"deg)";
    sRule_end.style.transform="rotate("+(sDeg+360)+"deg)";
    mRule_start.style.transform="rotate("+mDeg+"deg)";
    mRule_end.style.transform="rotate("+(mDeg+360)+"deg)";
    hRule_start.style.transform="rotate("+hDeg+"deg)";
    hRule_end.style.transform="rotate("+(hDeg+360)+"deg)";
})();