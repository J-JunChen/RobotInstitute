<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/RobotInstitute/Public/robot.ico"/>

    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="/RobotInstitute/Public/css/Admin/main.css">

    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>机器人学院后台管理系统</title>

   <!-- 通过cdn添加css和js  -->
     <link href="/RobotInstitute/Public/css/Admin/bootstrap.min.css" rel="stylesheet">

 
    </head>
    <body class="app sidebar-mini">

   <!-- 引入目录文件 -->

    <!-- 导航栏-->
    <header class="app-header"><a class="app-header__logo" href="#">莞工机器人学院</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"></a>

      <!-- Navbar Right Menu-->
      <ul class="app-nav">

        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
           
            <li><a class="dropdown-item" href="user_information"><i class="fa fa-user fa-lg"></i> 个人资料</a></li>
            <li><a class="dropdown-item" href="login_out"><i class="fa fa-sign-out fa-lg"></i> 退出登录</a></li>
          </ul>
        </li>
      </ul>
    </header>

    <!-- 左侧滑动目录-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="/RobotInstitute/Public/images/Background/user.png" alt="User Image">
        <div>
            <?php
 echo '<p class="app-sidebar__user-name">'.session('user_name').'</p>
                <p class="app-sidebar__user-designation">'.session('user_type').'</p>'; ?>
              
        </div>
      </div>


      <ul class="app-menu">

      <li><a class="app-menu__item" href="index"><i class="app-menu__icon fa fa-home"></i><span class="app-menu__label app-menu_font"> 首页</span></a></li>

       <li><a class="app-menu__item" href="contact"><i class="app-menu__icon fa fa-address-card"></i><span class="app-menu__label app-menu_font"> 通讯录</span></a></li>

      </ul>
    </aside>


;

        
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-pie-chart"></i> 图表</h1>
          <h5>关于机器人学院网站的数据分析</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Line Chart</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="lineChartDemo"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Bar Chart</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="barChartDemo"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Radar Chart</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="radarChartDemo"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Polar Chart</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="polarChartDemo"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Pie Chart</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="pieChartDemo"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Doughnut Chart</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="doughnutChartDemo"></canvas>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- 添加jq.js，注意，所有的js必须在jquery.js的后面，因为所有的js都是基于jq -->
    <script src="/RobotInstitute/Public/js/Admin/jquery.min.js"></script> 
    <!-- 添加bootstrap框架的js -->
    <script src="/RobotInstitute/Public/js/Admin/bootstrap.min.js"></script>

    <script src="/RobotInstitute/Public/js/Admin/popper.min.js"></script>
    <!-- <script src="https://cdn.bootcss.com/popper.js/1.13.0/popper.min.js"></script> -->


    <script src="/RobotInstitute/Public/js/Admin/main.js"></script>

    <!-- The javascript plugin to display page loading on top-->
    <script src="/RobotInstitute/Public/js/Admin/pace.min.js"></script>
    <!-- <script src="https://cdn.bootcss.com/pace/1.0.2/pace.min.js"></script> -->

    <!-- Page specific javascripts-->
    <script type="text/javascript" src="/RobotInstitute/Public/js/Admin/chart.js"></script>


     <script type="text/javascript">
      var data = {
        labels: ["January", "February", "March", "April", "May","Jun"],
        datasets: [
            {
                label: "My First dataset",
                fillColor: "rgba(220,220,220,0.2)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: [65, 59, 80, 81, 56]
            },
            {
                label: "My Second dataset",
                fillColor: "rgba(151,187,205,0.2)",
                strokeColor: "rgba(151,187,205,1)",
                pointColor: "rgba(151,187,205,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [28, 48, 40, 19, 86]
            }
        ]
      };
      var pdata = [
        {
            value: 300,
            color:"#F7464A",
            highlight: "#FF5A5E",
            label: "Red"
        },
        {
            value: 50,
            color: "#46BFBD",
            highlight: "#5AD3D1",
            label: "Green"
        },
        {
            value: 100,
            color: "#FDB45C",
            highlight: "#FFC870",
            label: "Yellow"
        }
      ]
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxb = $("#barChartDemo").get(0).getContext("2d");
      var barChart = new Chart(ctxb).Bar(data);
      
      var ctxr = $("#radarChartDemo").get(0).getContext("2d");
      var radarChart = new Chart(ctxr).Radar(data);
      
      var ctxpo = $("#polarChartDemo").get(0).getContext("2d");
      var polarChart = new Chart(ctxpo).PolarArea(pdata);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
      
      var ctxd = $("#doughnutChartDemo").get(0).getContext("2d");
      var doughnutChart = new Chart(ctxd).Doughnut(pdata);
    </script>

  </body>
</html>