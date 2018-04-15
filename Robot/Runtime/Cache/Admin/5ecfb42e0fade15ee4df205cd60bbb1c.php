<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>内容修改</title>

  <!-- 通过cdn添加css和js  -->
     <link href="/RobotInstitute/Public/css/Admin/bootstrap.min.css" rel="stylesheet">
   <!-- 添加summernote的css -->

  <link href="https://cdn.bootcss.com/summernote/0.8.9/summernote.css" rel="stylesheet">
  <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/RobotInstitute/Public/css/Admin/select-css.css">

</head>
<body>

    <h3>标题：</h3>

    
    <?php
 $json_string = session('json_string'); $content_table_whole = json_decode($json_string,TRUE); foreach ($content_table_whole as $key => $value) { echo '<input type="text" name="title" id="title" maxlength="30" placeholder="标题：不能为空（不能超过30字）" value = '.$value['title'].'>'; } ?>


    <div id="content">

          <div id="content-title">
              <div><p>文章内容：</p></div>
              <div>     
                    <a href="#" onClick="javascript :history.back(-1);"><button type="button" class="btn btn-warning" >&nbsp;取消&nbsp;</button></a>
                    <?php
 foreach ($content_table_whole as $key => $value) { echo '<button type="button" class="btn btn-info" id="modify">&nbsp;修改&nbsp;</button>'; } ?>
                   
              </div>

          </div>

         <div id="summernote">
              <?php
 foreach ($content_table_whole as $key => $value) { echo $value['content']; } ?>
         </div>
      </div>

</body>

    <!-- 添加jq.js，注意，所有的js必须在jquery.js的后面，因为所有的js都是基于jq -->
    <script src="/RobotInstitute/Public/js/Admin/jquery.min.js"></script> 
    <!-- 添加bootstrap框架的js -->
    <script src="/RobotInstitute/Public/js/Admin/bootstrap.min.js"></script>

<!-- 添加summernote的js -->
<script src="/RobotInstitute/Public/js/Admin/summernote.js"></script>

<!-- 添加中文包js -->
<script type="text/javascript" src="/RobotInstitute/Public/lang/summernote-zh-CN.js"></script>

<!-- 啊Jun定义的summernote.js -->
<script type="text/javascript" src="/RobotInstitute/Public/js/Admin/jun_summernote.js"></script>


<script type="text/javascript">


$("#modify").click(function () { //点击修改按钮，

    var id = <?php  foreach ($content_table_whole as $key => $value) echo $value['id']; ?>;


    var title = $('#title').val();
    var content = $('#summernote').summernote('code');
    var filteredContent = $(content).text().replace(/\s+/g, ''); //判断内容是否为空

    //console.log(title.replace(/^\s+|\s+$/g,"").length);

    if(title.replace(/^\s+|\s+$/g,"").length == 0) //去除前后空格
      alert('标题不能为空');
   

    else if(filteredContent.length <= 0) 
          alert('内容不能为空');

    else if(confirm("确认修改？")){ //所有填写充分时

        var submit_infor ={  
          'id':id,
          'title':title,  
          'content':content
       } 

       $.ajax({
          url: "modify",
          data: submit_infor,
          type: 'POST',
          dataType: 'json', //声明成功使用json数据类型回调
          success: function (msg) {

            alert(msg.msg);
            // window.parent.location.href=document.referrer;  //返回上一页并刷新
            window.parent.location.href = "editable_content?title="+msg.catalog+"&content="+msg.catalog_table;//父页跳转
          },

          error:function(){
            alert("提交失败！");
          }
      });
    }

})

</script>
</html>