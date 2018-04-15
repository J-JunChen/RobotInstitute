<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

 
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
            <p class="app-sidebar__user-name">用户名字</p>
            <p class="app-sidebar__user-designation">用户类型</p>
        </div>
      </div>


      <ul class="app-menu">

      <li><a class="app-menu__item" href="index"><i class="app-menu__icon fa fa-home"></i><span class="app-menu__label app-menu_font"> 首页</span></a></li>


        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-heart "></i><span class="app-menu__label app-menu_font">学院风采</span><i class="treeview-indicator fa fa-angle-right"></i></a>
         <ul class="treeview-menu">

          <?php
 $json_string = session('editable_session'); $editable_json = json_decode($json_string,TRUE); foreach ($editable_json as $key =>$value) { if ($value['editable_title'] == '学院风采') { foreach ($value as $key => $value) { if(is_array($value)){ foreach ($value as $key => $value) { echo ' <li><a class="treeview-item" href="editable_content?title='.$value['catalog'].'&content='.$value['catalog_table'].'"><i class="icon fa fa-circle-o"></i>'.$value['catalog'].'</a></li>'; } } } } } ?>  
          </ul>
        </li>

         <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-book"></i><span class="app-menu__label app-menu_font" >学习资源</span><i class="treeview-indicator fa fa-angle-right"></i></a>

          <ul class="treeview-menu">

            <?php
 $learning_resources_string = session('learning_resources_session'); $learning_resources_json = json_decode($learning_resources_string,TRUE); foreach ($learning_resources_json as $key => $value) { echo ' <li><a class="treeview-item" href="learning_resources?title='.$value['catalog'].'&content='.$value['catalog_table'].'"><i class="icon fa fa-circle-o"></i>'.$value['catalog'].'</a></li>'; } ?>
            
          </ul>
        </li>

        <!-- <li><a class="app-menu__item" href="photo_album"><i class="app-menu__icon fa fa-picture-o "></i><span class="app-menu__label app-menu_font">学院相册</span></a></li> -->

         <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-picture-o"></i><span class="app-menu__label app-menu_font" >学院相册</span><i class="treeview-indicator fa fa-angle-right"></i></a>

          <ul class="treeview-menu">

            <?php
 $institute_album_string = session('institute_album_session'); $institute_album_json = json_decode($institute_album_string,TRUE); foreach ($institute_album_json as $key => $value) { echo ' <li><a class="treeview-item" href="institute_album?title='.$value['catalog'].'&content='.$value['catalog_table'].'"><i class="icon fa fa-circle-o"></i>'.$value['catalog'].'</a></li>'; } ?>
            
          </ul>
        </li>


         <li><a class="app-menu__item" href="add_content"><i class="app-menu__icon fa  fa-pencil-square-o "></i><span class="app-menu__label app-menu_font"> 新建图文素材</span></a></li>

          <li><a class="app-menu__item" href="contact"><i class="app-menu__icon fa fa-address-card"></i><span class="app-menu__label app-menu_font"> 通讯录</span></a></li>

          <li><a class="app-menu__item" href="add_user"><i class="app-menu__icon fa fa-user-plus"></i><span class="app-menu__label app-menu_font"> 添加用户</span></a></li>

          <li><a class="app-menu__item" href="send_all"><i class="app-menu__icon fa fa-envelope-o"></i><span class="app-menu__label app-menu_font"> 群发邮件</span></a></li>

      </ul>
    </aside>




    <!-- 用户信息： -->
     <main class="app-content">
          <!-- 用户信息： -->
      <div class="row user">
        <div class="col-md-2">
          <div class="profile">
            <div class="info"><img class="user-img" src="/RobotInstitute/Public/images/Background/user.png">
             
          
               <h4>用户名字</h4>
              <p>用户类型</p>
              
            </div>

          </div>
        </div>

         <!-- 完善个人信息 -->
        <div class="col-md-7" style = "margin-left: 0px;">
          <div class="tab-content">
            <div class="tab-pane active" id="user-settings">
              <div class="tile user-settings">
                <h3 class="line-head" style="color: red;font-size: 20px;">完善个人信息<span style="color:#1E90FF; font-size: 15px;">（为了方便大家以后联系，以自愿原则填写好通讯录）</span></h3>

<!-- 不可修改的form -->
                <form id="unavailable-form">
                  <div class="row mb-4"> 
                    <div class="col-md-6">
                      <label>真实姓名：</label>
                      <input class="form-control" type="text" name="name" value="" readonly="true" >
                    </div>

                    <div class="col-md-6">
                      <label>邮箱：</label>
                      <input class="form-control" type="text" name="email" value="" readonly="true">
                    </div>
                  </div>

                  <div class="row mb-4">
                    <div class="col-md-6">
                      <label>班级：</label>
                      <input class="form-control" type="text" name="class" readonly="true">
                    </div>
                    <div class="col-md-6">
                      <label>专业：</label>
                      <input class="form-control" type="text" name="major" readonly="true">
                    </div>
                  </div>

                  <div class="row mb-4">
                    <div class="col-md-6">
                      <label>学号：</label>
                      <input class="form-control" type="text" name="student_no" readonly="true">
                    </div>
                    <div class="col-md-6">
                      <label>性别：</label>
                      <input class="form-control" type="text" name="sex" readonly="true">
                    </div>
                  </div>
                </form>

<!-- 可修改的form -->
                <form id="available-form">
                  <div class="row mb-4">
                    <div class="col-md-6">
                      <label>手机长号：</label>
                      <input class="form-control" type="text" name="long_no" onkeyup ="this.value=this.value.replace(/\s+/g,'')" maxlength="11">
                    </div>
                    <div class="col-md-6">
                      <label>短号（如有）：</label>
                      <input class="form-control" type="text" name="short_no" onkeyup ="this.value=this.value.replace(/\s+/g,'')"  maxlength="6">
                    </div>
                  </div>

                  <div class="row mb-4">
                    <div class="col-md-6">
                      <label>微信号：</label>
                      <input class="form-control" type="text" name="wechat" onkeyup ="this.value=this.value.replace(/\s+/g,'')" maxlength="50">
                    </div>
                    <div class="col-md-6">
                      <label>QQ号：</label>
                      <input class="form-control" type="text" name="qq" onkeyup ="this.value=this.value.replace(/\s+/g,'')" maxlength="15">
                    </div>

                     <div class="col-md-6" style="display: none;">
                      <label>id：</label>
                      <input class="form-control" type="text" name="id">
                    </div>
                  </div>

                  
                  <div class="row mb-10">
                    <div class="col-md-12">
                      <button class="btn btn-primary" type="button" onclick="saveInformation()"><i class="fa fa-fw fa-lg fa-check-circle"></i> 更新信息</button>
                      <span id="save_information_span" style="color: red;"></span>
                    </div>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
        
        <!-- 更换密码 -->
         <div class="col-md-3" style = "margin-left: 0px;">
          <div class="tab-content">
            <div class="tab-pane active" id="user-settings">
              <div class="tile user-settings">
                <h3 class="line-head" style="color: red;font-size: 20px;">更换密码</h3>

                <form>
                   <div class="row mb-4">
                      <div class="col-md-12">
                        <label>原密码：</label>
                        <input class="form-control" type="text" name="user_name">
                      </div>
                    </div>

                     <div class="row mb-4">
                        <div class="col-md-12">
                          <label>新密码：</label>
                          <input class="form-control" type="text" name="email">
                        </div>
                    </div>

                     <div class="row mb-4">
                         <div class="col-md-12">
                          <label>确认新密码：</label>
                          <input class="form-control" type="text" name="email">
                        </div>
                     </div>
                  <div class="row mb-10">
                    <div class="col-md-12">
                      <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-square-o"></i> 确认更改</button>
                    </div>
                  </div>
                </form>

              </div>
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

    <script src="/RobotInstitute/Public/js/Admin/main.js"></script>

    <!-- The javascript plugin to display page loading on top-->
    <script src="/RobotInstitute/Public/js/Admin/pace.min.js"></script>

    <!-- Page specific javascripts-->
    <script type="text/javascript" src="/RobotInstitute/Public/js/Admin/chart.js"></script>

  </body>
</html>