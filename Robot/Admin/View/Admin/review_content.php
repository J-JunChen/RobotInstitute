<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="__PUBLIC__/robot.ico"/>
    <title>机器人学院后台管理系统</title>

    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/Admin/main.css">

    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

   <!-- 通过cdn添加css和js  -->
     <link href="__PUBLIC__/css/Admin/bootstrap.min.css" rel="stylesheet">
 
    </head>
    <body class="app sidebar-mini">

   <!-- 引入目录文件 -->

    <include file="admin_menu" />;

    <main class="app-content">
      <div class="app-title">
          <div>
             <?php
              echo '<h1><i class="fa fa fa-heart"> '.session('catalog').'</i></h1>';  //直接点击列表内容
            ?>
            <h5>温馨提示：由于排版原因，可能会造成直接编辑时候，出现页面查看问题，请在<span style="color: red;">office word</span>编辑好再复制到<span style="color: red;">新建图文素材</span></h5> 
        </div>
      
      </div>

        <!-- Containers-->
      <div class="tile mb-4">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">

             

            <?php

             foreach ($catalog_table_whole as $key => $value) {

              echo "<h2 class='mb-5  id='containers' style = 'font-weight: bold; '>标题：".$value['title']."</h2>";

              echo "<h4 class='mb-3  id='containers'>更新时间：".date('Y-m-d',$value['date'])."</h4>";
              echo "<h4 class='mb-5 line-head' id='containers'>编辑：".$value['user_name']."</h4>";

              echo " <div>".$value['content']."</div>";

              }
          ?>
           
          </div>
        </div>
   
      </div>
 
    </main>


    <!-- 添加jq.js，注意，所有的js必须在jquery.js的后面，因为所有的js都是基于jq -->
    <script src="__PUBLIC__/js/Admin/jquery.min.js"></script> 
    <!-- 添加bootstrap框架的js -->
    <script src="__PUBLIC__/js/Admin/bootstrap.min.js"></script>

    <script src="__PUBLIC__/js/Admin/popper.min.js"></script>
    <!-- <script src="https://cdn.bootcss.com/popper.js/1.13.0/popper.min.js"></script> -->


    <script src="__PUBLIC__/js/Admin/main.js"></script>

    <!-- The javascript plugin to display page loading on top-->
    <script src="__PUBLIC__/js/Admin/pace.min.js"></script>


  </body>
</html>
