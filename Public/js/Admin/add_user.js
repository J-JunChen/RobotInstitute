
$('.user_type-select').multiselect();  //获取专业

$('#add_temperory a').click(function () { //添加注册用户

    var id = $(this).attr("data");
    var type_id = $('#select'+id+' option:selected').val();
    // console.log(type_id);

    $.ajax({

      type:'POST',
      url:'add_temperory',
      data:{id:id,type_id:type_id}, 
      success:function(data) {
        alert(data);
        window.location.reload();
      },
      error:function () {
        alert('抱歉！出现未知错误，添加不了。');
      }

    });

});


$('#delete_temperory a').click(function () {  ////删除注册用户

   // var user_type = 
    var id = $(this).attr("data");

    $.ajax({

      type:'POST',
      url:'delete_temperory',
      data:{id:id}, 
      success:function(data) {

        alert(data);
        window.location.reload();
      },
      error:function () {
        alert('抱歉！出现未知错误，删除不了。');
      }

    });

})
