
$('#submit_slides').click(function () {

    // if(title.replace(/^\s+|\s+$/g,"").length == 0) //去除前后空格
    //   alert('标题不能为空');
 
    var slides_file = document.getElementById('input-b3').files[0];  //幻灯片原始路径
    var slides_title = $('#slides_title').val().replace(/^\s+|\s+$/g,""); //幻灯片标题
    // var slides_description = $('#slides_description').val().replace(/^\s+|\s+$/g,""); //幻灯片描述


    if(slides_file == null) //如果没有选择图片或者其他格式的文件
        alert('请选择一张图片');
    else if(slides_title.length == '')
        alert('请填写图片标题')
    // else if(slides_description.length == '')
    //      alert('请填写图片描述')
    else{
             //ajax上传图片
        var formData = new FormData();

        formData.append("slides_file", slides_file);
        formData.append("slides_title",slides_title);
        // formData.append("slides_description",slides_description);

        $.ajax({

            url: "add_slides",
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
               window.location.href = 'slides_list';
            },

            error:function(){
              alert("上传失败！");
            }
        });

    }

})

 $('#delete_slides').click(function () {
    obj = document.getElementsByName("slides_check");
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
                    url: "delete_slides",
                    data: {data : jsonString}, 
                    cache: false,

                    success: function(data){
                        alert(data);
                        window.location.href = 'slides_list';
                    },

                    error:function(){
                      alert("删除失败！");
                    }
            });
        }
    }

})

