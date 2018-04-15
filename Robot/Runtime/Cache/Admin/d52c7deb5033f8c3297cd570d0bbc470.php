<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/thinkphp/Public/robot.ico"/>

    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="/thinkphp/Public/css/Admin/main.css">

    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>机器人学院后台管理系统</title>

   <!-- 通过cdn添加css和js  -->
     <link href="/thinkphp/Public/css/Admin/bootstrap.min.css" rel="stylesheet">

 
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
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="/thinkphp/Public/images/Background/user.png" alt="User Image">
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
          <h1><i class="fa fa-address-card"></i> 通讯录</h1>
          <h5>温馨提示：由于分组较多，会造成<span style="color: red;">手机端竖屏</span>查看不佳，请选择<span style="color: red;">横屏</span>查看或<span style="color: red;">电脑端</span>查看</h5>
        </div>
      
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="contactTable">
                <thead>
                  <tr>
                    <th>学号</th>
                     <th>姓名</th>
                    <th>班级</th>
                    <th>专业 or 职位</th>
                    <th>长号 <span style="color: red; font-size: 18px;">/</span> 短号</th>
                    <th>微信号</th>
                    <th>QQ号</th>
                    <th>用户类型</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
 use Think\Model; $table = D('Login'); $data = $table->order('student_no')->relation(true)->select(); foreach ($data as $key => $value) { echo "  <tr>
                                    <td>".$value['student_no']."</td>
                                     <td>".$value['name']."</td>
                                    <td>".$value['class']."</td>
                                    <td>".$value['major']."</td>
                                     <td>".$value['long_no']." <span style='color: red; font-size: 18px;'>/</span> ".$value['short_no']."</td>
                                     <td>".$value['wechat']."</td>
                                    <td>".$value['qq']."</td>
                                    <td>".$value['UserType']['type']."</td>
                                  </tr>"; } ?>
                 </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>


    <!-- 添加jq.js，注意，所有的js必须在jquery.js的后面，因为所有的js都是基于jq -->
    <script src="/thinkphp/Public/js/Admin/jquery.min.js"></script> 
    <!-- 添加bootstrap框架的js -->
    <script src="/thinkphp/Public/js/Admin/bootstrap.min.js"></script>

    <script src="/thinkphp/Public/js/Admin/popper.min.js"></script>
    <!-- <script src="https://cdn.bootcss.com/popper.js/1.13.0/popper.min.js"></script> -->


    <script src="/thinkphp/Public/js/Admin/main.js"></script>

    <!-- The javascript plugin to display page loading on top-->
    <script src="/thinkphp/Public/js/Admin/pace.min.js"></script>


    <!-- Data table plugin-->
    <script type="text/javascript" src="/thinkphp/Public/js/Admin/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="/thinkphp/Public/js/Admin/dataTables.bootstrap.min.js"></script>

    <script type="text/javascript">$('#contactTable').DataTable();</script>


  </body>
</html>