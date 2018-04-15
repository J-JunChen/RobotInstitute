<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Summernote富文本的图片在服务器上传和删除、emojis的使用</title>

  <!-- 通过cdn添加css和js  -->
     <link href="/RobotInstitute/Public/css/Admin/bootstrap.min.css" rel="stylesheet">
   <!-- 添加summernote的css -->

  <link href="https://cdn.bootcss.com/summernote/0.8.9/summernote.css" rel="stylesheet">
  <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  
  <link rel="stylesheet" type="text/css" href="/RobotInstitute/Public/css/Admin/select-css.css">

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
          <!-- <option value=''  disabled selected style='display:none;'>请选择栏目</option>   -->
          <option value="'.$value['editable_table'].'">学院风采</option>
        </select>
      </div>

      <div class="custom-select">
        <select  id="editable_catalog">
            <option>学院时事</option> 
            <option>项目设计</option> 
            <option>学科竞赛</option> 
            <option>比赛获奖</option> 
            <option>假期培训</option> 
            <option>外出参观</option> 
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
    <script src="/RobotInstitute/Public/js/Admin/jquery.min.js"></script> 
    <!-- 添加bootstrap框架的js -->
    <script src="/RobotInstitute/Public/js/Admin/bootstrap.min.js"></script>

<!-- 添加summernote的js -->
<script src="/RobotInstitute/Public/js/Admin/summernote.js"></script>

<!-- 添加中文包js -->
<script type="text/javascript" src="/RobotInstitute/Public/lang/summernote-zh-CN.js"></script>

<script type="text/javascript">
   //调用富文本编辑
  $(document).ready(function() {

    var $summernote = $('#summernote').summernote({
      height: 400,
      minHeight: null,
      maxHeight: null,
      focus: true,
      lang: 'zh-CN', //必须先加入summernote-zh-CN.js才能使用
      placeholder: "在此输入文字",
      fontNames: ['宋体','微软雅黑','楷体','黑体','Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Merriweather','Consolas'],
      popover: {
          image: [
            ['imagesize', ['imageSize100', 'imageSize50', 'imageSize25']],
            ['remove', ['removeMedia']],
          ],
      },

        toolbar: [
              ['color', ['color']],
              ['fontname',['fontname']],
              ['fontsize',['fontsize']],
              ['bold',['bold']],
              ['italic',['italic']],
              ['underline',['underline']],
              ['clear',['clear']],
              ['superscript',['superscript']],

              //para
              ['style', ['style']],
              ['height',['height']],
              ['ul',['ul']],
              ['ol',['ol']],
              ['paragraph',['paragraph']],
            
              //view
              ['fullscreen',['fullscreen']],
              ['undo',['undo']],
              ['redo',['redo']],


              //insert
              ['table', ['table']], 
              ['link',['link']],
              ['picture',['picture']],
              ['video',['video']],
        ],

    });

})

    </script>
</html>