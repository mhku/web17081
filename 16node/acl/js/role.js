$(function(){

  $.ajax({
    url:"data/01_user_list.php",
    type:"GET",
    success:function(data){
      var html = "";
      for(var i=0;i<data.length;i++){
        var obj = data[i];
        html += `
        <tr>
            <td>${obj.uid}</td>
            <td>${obj.uname}</td>
            <td>
              <a href="#" class="btn-del">删除</a>
              <a href="#" class="btn-update">更新</a>
              <a href="#" class="btn-detail">详情</a>
              <a href="#" class="btn-role">拥有角色</a>
             </td>
        </tr>          
        `;
      }
      $("#tbody1").html(html);
    },
    error:function(){
      alert("网络故障请检查!");
    }
  });
});
