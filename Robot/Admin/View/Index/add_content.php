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
    <link href="__PUBLIC__/css/Admin/bootstrap.min.css" rel="stylesheet">

 
    </head>
    <body class="app sidebar-mini">

   <!-- 引入目录文件 -->
    <include file="index_menu" />;

    <main class="app-content">
      <iframe src='summernote' style="height:800px;width: 100%;"></iframe>
    </main>


    <!-- 添加jq.js，注意，所有的js必须在jquery.js的后面，因为所有的js都是基于jq -->
    <script src="__PUBLIC__/js/Admin/jquery.min.js"></script> 
    <!-- 添加bootstrap框架的js -->
    <script src="__PUBLIC__/js/Admin/bootstrap.min.js"></script>
    

    <script src="__PUBLIC__/js/Admin/popper.min.js"></script>

    <script src="__PUBLIC__/js/Admin/main.js"></script>

    <!-- The javascript plugin to display page loading on top-->
    <script src="__PUBLIC__/js/Admin/pace.min.js"></script>

  </body>
</html>