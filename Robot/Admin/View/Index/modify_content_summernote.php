<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>内容修改</title>

  <!-- 通过cdn添加css和js  -->
     <link href="__PUBLIC__/css/Admin/bootstrap.min.css" rel="stylesheet">
   <!-- 添加summernote的css -->

  <link href="https://cdn.bootcss.com/summernote/0.8.9/summernote.css" rel="stylesheet">
  <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/Admin/select-css.css">

</head>
<body>

    <h3>标题：</h3>

<input type="text" name="title" id="title" maxlength="30" placeholder="标题：不能为空（不能超过30字）" value = '学院风采'>
 

    <div id="content">

          <div id="content-title">
              <div><p>文章内容：</p></div>
              <div>     
                    <a href="#" onClick="javascript :history.back(-1);"><button type="button" class="btn btn-warning" >&nbsp;取消&nbsp;</button></a>

                   
                    <button type="button" class="btn btn-info" id="modify">&nbsp;修改&nbsp;</button>
                    
                   
              </div>

          </div>

         <div id="summernote">
            hello
         </div>
      </div>

</body>

    <!-- 添加jq.js，注意，所有的js必须在jquery.js的后面，因为所有的js都是基于jq -->
    <script src="__PUBLIC__/js/Admin/jquery.min.js"></script> 
    <!-- 添加bootstrap框架的js -->
    <script src="__PUBLIC__/js/Admin/bootstrap.min.js"></script>

<!-- 添加summernote的js -->
<script src="__PUBLIC__/js/Admin/summernote.js"></script>

<!-- 添加中文包js -->
<script type="text/javascript" src="__PUBLIC__/lang/summernote-zh-CN.js"></script>

<!-- 啊Jun定义的summernote.js -->
<script type="text/javascript" src="__PUBLIC__/js/Admin/jun_summernote.js"></script>


<script type="text/javascript">


$("#modify").click(function () { //点击修改按钮，

    var title = $('#title').val();
    var content = $('#summernote').summernote('code');
    var filteredContent = $(content).text().replace(/\s+/g, ''); //判断内容是否为空

    if(title.replace(/^\s+|\s+$/g,"").length == 0) //去除前后空格
      alert('标题不能为空');
   

    else if(filteredContent.length <= 0) 
          alert('内容不能为空');

    else if(confirm("确认修改？")){ //所有填写充分时

        var submit_infor ={  
          'title':title,  
          'content':content
       } 

      
    }

})

</script>
</html>