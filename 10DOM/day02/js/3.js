(()=>{
    var tabs=document.querySelectorAll("[data-toggle=tab]");
    for(var tab of tabs){
        tab.onclick=e=>{
            "use strict";
            var tab=e.target;
            var divs=document.querySelectorAll("#container div");
            for(var div of divs){
                div.style.zIndex="";
                var i=tab.href.lastIndexOf("#")
                var id=tab.href.slice(i);
                document.querySelector(id).style.zIndex="10";
            }
        }
    }
})();