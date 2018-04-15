<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Summernote富文本的图片在服务器上传和删除、emojis的使用</title>

  <!-- 通过cdn添加css和js  -->
     <link href="__PUBLIC__/css/Admin/bootstrap.min.css" rel="stylesheet">
   <!-- 添加summernote的css -->

  <link href="https://cdn.bootcss.com/summernote/0.8.9/summernote.css" rel="stylesheet">
  <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  
  <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/Admin/select-css.css">
  <style type="text/css">
/*  iframe{
    width: 50%;
    height: 50%;
  }
*/

  </style>

</head>
<body>

<div style="color: red; border:dotted ; padding: 15px; margin-bottom: 50px;">
    <p>温馨提示：由于该富文本编辑器的原因，直接编辑会造成排版问题。</p>
    <p>1、建议使用 office word 或者 微信公众号平台 编辑完成，再拷贝到该编辑器上。</p>
    <p>2、并且内容里有图片的话，需要另外在该编辑上插入添加，且注意图片大小分布，图片分布过大会造成手机端浏览不佳。</p>
    <p>3、由于存在浏览器兼容问题，建议使用 Google浏览器 或者 火狐浏览器 进行编辑。</p>
    <p>4、编辑的过程中，先按键盘的F12，再同时按住键盘的 “ Ctrl+Shift+M ” 即可切换到手机端的界面，即可体验到不同屏占比例的阅读效果。</p>
</div>
    <h3>标题：</h3>
    <input type="text" name="title" id="title" maxlength="30" placeholder="标题：不能为空（不能超过30字）">

    <h3>选择分类：</h3>

    <div style="width:100%; min-width:10em;" id="select">
      
      <div class="custom-select">
        <select id="editable_title">
          <option value=''  disabled selected style='display:none;'>请选择栏目</option>  

            <?php

               $json_string = session('editable_session');

               $editable_json = json_decode($json_string,TRUE);

                foreach ($editable_json as $key =>$value) {

                     echo '<option value="'.$value['editable_table'].'">'.$value['editable_title'].'</option>';
                   
                }
            ?>
        </select>
      </div>

      <div class="custom-select">
        <select  id="editable_catalog">
            <option value=''  disabled selected style='display:none;'>请选择子栏目</option>  
        </select>
      </div>

    </div>

    <div id="content">

          <div id="content-title">
              <div><p>文章内容：</p></div>
              <div>     
                    <button type="button" class="btn btn-warning" id="cancel">&nbsp;取消&nbsp;</button>
                    <button  type="button" class="btn btn-info" id="submit">&nbsp;提交&nbsp;</button>
              </div>

          </div>

         <div id="summernote"></div>
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

</html>