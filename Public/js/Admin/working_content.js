
$("span a").click( function () { 

  if(confirm('确认删除？')){

     var id = $(this).attr("data");

       $.ajax({
          url: "delete_content",
          data: {id:id},
          type: 'POST',
          success: function (data) {
            alert(data);
            window.location.reload();
          },

          error:function(){
            alert("提交失败！");
          }
      });
  }
   
 });
   