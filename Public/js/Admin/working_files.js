$('#input-b3').change(function () { //自动填充文件标题
   var file_file = document.getElementById('input-b3').files[0];  //幻灯片原始路径
   if(file_file != null)
   {
      $('#file_title').val(file_file.name.substr(0,50)) ;
   }
})



$('#submit_file').click(function () {

    // if(title.replace(/^\s+|\s+$/g,"").length == 0) //去除前后空格
    //   alert('标题不能为空');
 
    var file_file = document.getElementById('input-b3').files[0];  //幻灯片原始路径
    var file_title = $('#file_title').val().replace(/^\s+|\s+$/g,""); //幻灯片标题
    var file_description = $('#file_description').val().replace(/^\s+|\s+$/g,""); //幻灯片描述


    if(file_file == null) //如果没有选择图片或者其他格式的文件
        alert('请选择一个文件');
   // else if(file_title.length == '')
       // alert(file_file.name)
    else if(file_description.length == '')
         alert('请填写文件描述')
    else{

        if(file_title.length == '')
          file_title = file_file.name.substr(0,50);
       // console.log(file_title);

        var formData = new FormData();

        formData.append("file_file", file_file);
        formData.append("file_title",file_title);
        formData.append("file_description",file_description);

        $.ajax({

            url: "add_file",
            data: formData,
            type: 'POST',
            data:formData,  
           // dataType:"json", //声明成功使用json数据类型回调 

            //如果提交data是FormData类型，那么下面三句一定需要加上
            cache: false,  
            contentType: false,
            processData: false,

            success: function (data) {
                //$('#summernote').summernote('insertImage', 'Public/images/20180131/logo4.jpg');
               alert(data);
               // window.location.href = 'learning_resources_list';
               window.location.reload();
            },

            error:function(){
              alert("上传失败！");
            }
        });

    }

})

$("#delete_file a").click( function () { 

  if(confirm('确认删除？')){

     var id = $(this).attr("data");

       $.ajax({
          url: "delete_file",
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

$("#modify_file a").click( function () {

  var id = $(this).attr("data");

  //console.log(id);
   $.ajax({
      url: "get_file",
      data: {id:id},
      type: 'POST',
      success: function (data) {
        $json_file = JSON.parse(data)
        //console.log($json_file);

         $('#modify_file_name').val($json_file.file_name);
         $('#modify_file_title').val($json_file.file_title);
         $('#modify_file_title').text($json_file.id);
        $('#modify_file_description').val($json_file.file_description);
      },

      error:function(){
        alert("修改失败！");
      }
  });
   
 });

$('#modify_file_button').click(function () {
 
    var id = $("#modify_file_title").text();
    //console.log(id);
    var file_name =  $('#modify_file_name').val();  //幻灯片原始路径
    var file_title = $('#modify_file_title').val().replace(/^\s+|\s+$/g,""); //幻灯片标题
    var file_description = $('#modify_file_description').val().replace(/^\s+|\s+$/g,""); //幻灯片描述

    if(file_description.length == '')
         alert('请填写图片描述')
    else{

        if(file_title.length == '')
          file_title = file_name.substr(0,50);
       // console.log(file_title);

        var formData = new FormData();

        formData.append("id",id);
        formData.append("file_title",file_title);
        formData.append("file_description",file_description);

        $.ajax({

            url: "modify_file",
            data: formData,
            type: 'POST',
            data:formData,  
           // dataType:"json", //声明成功使用json数据类型回调 

            //如果提交data是FormData类型，那么下面三句一定需要加上
            cache: false,  
            contentType: false,
            processData: false,

            success: function (data) {
                //$('#summernote').summernote('insertImage', 'Public/images/20180131/logo4.jpg');
               alert(data);
               // window.location.href = 'learning_resources_list';
               window.location.reload();
            },

            error:function(){
              alert("上传失败！");
            }
        });

    }

});

$("#read_file a").click( function () {

  var id = $(this).attr("data");

  //console.log(id);
   $.ajax({
      url: "read_file",
      data: {id:id},
      type: 'POST',
      success: function (data) {
        $json_file = JSON.parse(data)
        //console.log($json_file);

         $('#read_file_name').val($json_file.file_name);
         $('#read_file_title').val($json_file.file_title);
         $('#read_file_title').text($json_file.id);
        $('#read_file_description').val($json_file.file_description);
      },

      error:function(){
        alert("查看失败！");
      }
  });
   
 });
   
 $('#download_file_button').click(function ()  {
  
    var id = $("#read_file_title").text();
 
   $.ajax({
      url: "download_file",
      data: {id:id},
      type: 'POST',
      async:false,
      success: function (data) {
        var json_file = JSON.parse(data)
         window.open(json_file.file_path);

      },

      error:function(){
        alert("下载失败！");
      }
  });
      
 }) 
