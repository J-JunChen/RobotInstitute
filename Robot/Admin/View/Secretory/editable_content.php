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
    </head>

    <body class="app sidebar-mini">

   <!-- 引入目录文件 -->
    <include file="secretory_menu" />;

    <!-- <main class="app-content">
      <iframe src='editable_content_list' style="height:800px;width: 100%;"></iframe>
    </main>
 -->

     <main class="app-content">
      <div class="app-title">
        <div>
             <?php
              echo '<h1><i class="fa fa fa-heart"> '.session('catalog').'</i></h1>';  //直接点击列表内容
            ?>
            <h5>温馨提示：由于数据较多，可能会造成<span style="color: red;">手机端竖屏</span>查看不佳，请选择<span style="color: red;">横屏</span>查看或<span style="color: red;">电脑端</span>查看</h5> 
        </div>
      
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="contentTable">
                <thead>
                  <tr>
                    <th>标题</th>
                    <th>更新时间</th>
                    <th>编辑</th>
                    <th>操作</th>
                  </tr>
                </thead>
                <tbody>

                  <?php

            use Think\Model;
            $table = new Model(session('catalog_table'));

          $data = $table->where('user_type="'.session('user_type').'"')->order('id desc')->select();

          foreach ($data as $key => $value) {

              echo "<tr><td><a id='review' href='review_content?id=".$value['id']."'>". $value['title']."</a></td> <td>".date('Y-m-d',$value['date'])."</td><td>".$value['user_name']."</td><td><a id='review' href='modify_content?id=".$value['id']."'>修改</a> | <span><a href='javascript:void(0)' style='color:red;'data ='".$value['id']."'>删除</a></span></td></tr>";

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
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 

    <script src="__PUBLIC__/js/Admin/popper.min.js"></script>

    <!-- 添加bootstrap框架的js -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

    <script src="__PUBLIC__/js/Admin/main.js"></script>

    <!-- The javascript plugin to display page loading on top-->
    <script src="__PUBLIC__/js/Admin/pace.min.js"></script>

    <script src="__PUBLIC__/js/Admin/working_content.js"></script>

      <!-- Data table plugin-->
    <script type="text/javascript" src="__PUBLIC__/js/Admin/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/Admin/dataTables.bootstrap.min.js"></script>

    <script type="text/javascript">$('#contentTable').DataTable();</script>


  </body>
</html>