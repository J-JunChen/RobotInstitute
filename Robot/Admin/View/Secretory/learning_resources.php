<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="__PUBLIC__/robot.ico"/>
    
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/Admin/main.css">

    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>机器人学院后台管理系统</title>

   <!-- 通过cdn添加css和js  -->
   <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="__PUBLIC__/css/Admin/fileinput.min.css" rel="stylesheet">
    </head>

    <body class="app sidebar-mini">

   <!-- 引入目录文件 -->
    <include file="secretory_menu" />;

    <!-- <main class="app-content">
      <iframe src='learning_resources_list' style="height:800px;width: 100%;"></iframe>
    </main> -->
            <!-- submit File Modal -->
<div class="modal fade" id="submitFileModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">编辑文件</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="file-loading">
            <input id="input-b3" name="input-b3" type="file" class="file"  data-show-upload="false" data-show-caption="true" data-msg-placeholder="支持上传常用文本类型和压缩包类型" data-allowed-file-extensions='["txt","pdf","xlsx","xls","doc","docx","ppt","pptx","rar","zip"]' data-language = 'zh'>
        </div>
         <form>
           <div class="form-group" style="margin-top: 20px;">
            <label for="recipient-name" class="control-label">文件标题:</label>
            <input id='file_title' type="text" class="form-control"  placeholder="（选填），不超过50字，默认为文件名" maxlength="50">
          </div>

          <div class="form-group">
            <label for="message-text" class="control-label">文件描述:</label>
            <textarea  id='file_description' class="form-control" placeholder="（必填）不超过100字" maxlength="100" style="resize: none; overflow:visible"></textarea>
          </div>
        </form>
        <div id="kartik-file-errors"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
        <button type="button" class="btn btn-primary" title="Your custom upload logic" id="submit_file">上传</button>
      </div>
    </div>
  </div>
</div>

<!-- modify File Modal -->
<div class="modal fade" id="modifyFileModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">修改文件</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form>
         <div class="form-group">
            <label class="control-label">文件名:</label>
            <input id='modify_file_name' type="text" class="form-control"  readonly="true" maxlength="50" >
          </div>
          <div class="form-group">
            <label  class="control-label">文件标题:</label>
            <input id='modify_file_title' type="text" class="form-control"  placeholder="（选填），不超过50字，默认为文件名" maxlength="50">
          </div>
          <div class="form-group">
            <label class="control-label">文件描述:</label>
            <textarea  id='modify_file_description' class="form-control"  placeholder="（必填）不超过100字" maxlength="100" style="resize: none; overflow:visible"></textarea>
          </div>
        </form>
        <div id="kartik-file-errors"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
        <button type="button" class="btn btn-primary" title="Your custom upload logic" id="modify_file_button">修改</button>
      </div>
    </div>
  </div>
</div>

<!-- read File Modal -->
<div class="modal fade" id="readFileModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">查看文件</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form>
         <div class="form-group">
            <label class="control-label">文件名:</label>
            <input id='read_file_name' type="text" class="form-control"  readonly="true" >
          </div>
          <div class="form-group">
            <label  class="control-label">文件标题:</label>
            <input id='read_file_title' type="text" class="form-control"  readonly="true">
          </div>
          <div class="form-group">
            <label class="control-label">文件描述:</label>
            <textarea  id='read_file_description' class="form-control" readonly="true" style="resize: none; overflow:visible"></textarea>
          </div>
        </form>
        <div id="kartik-file-errors"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
        <button type="button" class="btn btn-primary" title="Your custom upload logic" id="download_file_button">下载</button>
      </div>
    </div>
  </div>
</div>
   

     <main class="app-content">


      <div class="app-title" >

        <div style="width: 100%;">

        <?php
          echo '<h1><i class="fa fa-book"> '.session('catalog').'</i></h1>';  //直接点击列表内容
        ?>
        <h5>温馨提示：由于数据较多，可能会造成<span style="color: red;">手机端竖屏</span>查看不佳，请选择<span style="color: red;">横屏</span>查看或<span style="color: red;">电脑端</span>查看</h5> 

         <div class="text-right" >
        <button class="btn btn-info" id="upload_file" data-toggle="modal" data-target="#submitFileModal">上传文件</button>
      </div>

        </div>
      
      </div>
      
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="resourcesTable">
                <thead>
                  <tr>
                   <th>标题</th>
                    <th>上传时间</th>
                    <th>上传者</th>
                    <th>操作</th>
                  </tr>
                </thead>
                <tbody>

                  <?php

                      use Think\Model;

          $table = new Model(session('catalog_table'));

          $data = $table->where('user_type="'.session('user_type').'"')->order('id desc')->select();

          foreach ($data as $key => $value) {

              echo "<tr> <td><span id='read_file'><a href='#' data-toggle='modal' data-target='#readFileModal' data ='".$value['id']."'>". $value['file_title']."</a></span> </td> <td>".date('Y-m-d',$value['date'])."</td> <td>".$value['user_name']."</td> <td><span id='modify_file'><a href='#' data-toggle='modal' data-target='#modifyFileModal'data ='".$value['id']."'>修改</a></span> | <span id='delete_file'><a href='javascript:void(0)' style='color:red;'data ='".$value['id']."'>删除</a></span></td></tr>";

            }
                  ?>
                 </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>



    <!-- 添加jq.js，注意，所有的js必须在jquery.js的后面，因为所有的js都是基于jq -->
    <script src="__PUBLIC__/js/Admin/jquery.min.js"></script> 
    <!-- 添加bootstrap框架的js -->
    <script src="__PUBLIC__/js/Admin/bootstrap.min.js"></script>

    <script src="__PUBLIC__/js/Admin/popper.min.js"></script>

    <script src="__PUBLIC__/js/Admin/main.js"></script>

    <!-- The javascript plugin to display page loading on top-->
    <script src="__PUBLIC__/js/Admin/pace.min.js"></script>


    <script src="__PUBLIC__/js/Admin/working_files.js"></script>

      <!-- 添加bootstrap-fileinput框架的js -->
  <script src="__PUBLIC__/js/Admin/fileinput.min.js"></script>

  <script src="https://cdn.bootcss.com/bootstrap-fileinput/4.3.1/js/fileinput_locale_zh.js"></script>

    <!-- Data table plugin-->
    <script type="text/javascript" src="__PUBLIC__/js/Admin/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/Admin/dataTables.bootstrap.min.js"></script>

    <script type="text/javascript">$('#resourcesTable').DataTable();</script>
 
  </body>
</html>