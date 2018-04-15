
$('#submit_album').click(function () {

    // if(title.replace(/^\s+|\s+$/g,"").length == 0) //去除前后空格
    //   alert('标题不能为空');
 
    // var album_file = document.getElementById('input-b3').files[0];  //相册原始路径
   
    var album_file = new Array();
     album_file  = document.getElementById('input-b3').files;  //相册原始路径
          
     var album_description = $('#album_description').val().replace(/^\s+|\s+$/g,""); //相册描述


    if(album_file.length == 0) //如果没有选择图片或者其他格式的文件
        alert('请选择一张图片');
    else if(album_description.length == '')
         alert('请填写图片描述');
    else{
             //ajax上传图片
        var formData = new FormData();

        for(var i = 0; i<album_file.length;i++){
             
            formData.append("album_file"+i, album_file[i]);

        }

        formData.append('album_length',album_file.length)

        formData.append("album_description",album_description);

        $.ajax({

            url: "add_album",
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
               window.location.href = 'institute_album_list';
            },

            error:function(){
              alert("上传失败！");
            }
        });

    }

})


 $('#delete_album').click(function () {
    obj = document.getElementsByName("album_check");
    check_val = [];
    for(k in obj){
        if(obj[k].checked)
            check_val.push(obj[k].value);
    }

    if(check_val!='')
    {
        if(confirm("确认删除选中项？")){
          var jsonString = JSON.stringify(check_val);
            $.ajax({
                    type: "POST",
                    url: "delete_album",
                    data: {data : jsonString}, 
                    cache: false,

                    success: function(data){
                        alert(data);
                        window.location.href = 'institute_album_list';
                    },

                    error:function(){
                      alert("删除失败！");
                    }
            });
        }
    }

})
