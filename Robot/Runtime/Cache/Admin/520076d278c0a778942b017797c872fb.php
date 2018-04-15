<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/RobotInstitute/Public/robot.ico"/>
    <title>机器人学院后台管理系统</title>

    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="/RobotInstitute/Public/css/Admin/main.css">

    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

   <!-- 通过cdn添加css和js  -->
     <link href="/RobotInstitute/Public/css/Admin/bootstrap.min.css" rel="stylesheet">
     <link href="/RobotInstitute/Public/css/Admin/bootstrap-multiselect.css" rel="stylesheet">

 
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

        <li><a class="app-menu__item" href="slides"><i class="app-menu__icon fa fa-video-camera"></i><span class="app-menu__label app-menu_font"> 幻灯片</span></a></li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-university"></i><span class="app-menu__label app-menu_font" >学院概况</span><i class="treeview-indicator fa fa-angle-right"></i></a>

          <ul class="treeview-menu">

        <?php
 $institute_overview_string = session('institute_overview_session'); $institute_overview_json = json_decode($institute_overview_string,TRUE); foreach ($institute_overview_json as $key => $value) { echo ' <li><a class="treeview-item" href="institute_overview?title='.$value['catalog'].'&content='.$value['catalog_table'].'"><i class="icon fa fa-circle-o"></i>'.$value['catalog'].'</a></li>'; } ?>

           
            
          </ul>
        </li>

          <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label app-menu_font">教学工作</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">

          <?php
 $json_string = session('editable_session'); $editable_json = json_decode($json_string,TRUE); foreach ($editable_json as $key =>$value) { if ($value['editable_title'] == '教学工作') { foreach ($value as $key => $value) { if(is_array($value)){ foreach ($value as $key => $value) { echo ' <li><a class="treeview-item" href="editable_content?title='.$value['catalog'].'&content='.$value['catalog_table'].'"><i class="icon fa fa-circle-o"></i>'.$value['catalog'].'</a></li>'; } } } } } ?>  
          </ul>
        </li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-users "></i><span class="app-menu__label app-menu_font">学院招生</span><i class="treeview-indicator fa fa-angle-right"></i></a>
         <ul class="treeview-menu">

          <?php
 $json_string = session('editable_session'); $editable_json = json_decode($json_string,TRUE); foreach ($editable_json as $key =>$value) { if ($value['editable_title'] == '学院招生') { foreach ($value as $key => $value) { if(is_array($value)){ foreach ($value as $key => $value) { echo ' <li><a class="treeview-item" href="editable_content?title='.$value['catalog'].'&content='.$value['catalog_table'].'"><i class="icon fa fa-circle-o"></i>'.$value['catalog'].'</a></li>'; } } } } } ?>  
          </ul>
        </li>

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


;

    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-user-plus"></i> 添加用户</h1>
          <h5>温馨提示：由于分组较多，会造成<span style="color: red;">手机端竖屏</span>查看不佳，请选择<span style="color: red;">横屏</span>查看或<span style="color: red;">电脑端</span>查看</h5>
        </div>
      
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="add_userTable">
                <thead>
                  <tr>
                    <th>学号</th>
                    <th>姓名</th>
                    <th>邮箱</th>
                    <th>班级</th>
                    <th>专业 or 职位</th>
                    <th>性别</th>
                    <th>用户类型</th>
                    <th>操作</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
 use Think\Model; $table = M('Temporary'); $data = $table->select(); foreach ($data as $key => $value) { echo "  <tr>
                                    <td>".$value['student_no']."</td>
                                     <td>".$value['name']."</td>
                                     <td>".$value['email']."</td>
                                    <td>".$value['class']."</td>
                                    <td>".$value['major']."</td>
                                     <td>".$value['sex']."</td>
                                    <td>
                                    <div>
                                      <select class='user_type-select' id='select".$value['id']."' name='select_major'>
                                              <option value=1 selected='selected'>Student</option>
                                              <option value=2>Teacher</option>
                                              <option value=3>Editor</option>
                                              <option value=4>LabAdmin</option>
                                              <option value=5>Secretory</option>
                                      </select>
                                    </div>

                                    </td>
                                    <td><span id='add_temperory'><a href = 'javascript:void(0)' data ='".$value['id']."'>添加 </a></span> / <span id='delete_temperory'><a href = 'javascript:void(0)' style='color:red;' data ='".$value['id']."'>删除</a></span></td>
                                  </tr>"; } ?>
                 </tbody>
              </table>
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


    <!-- Data table plugin-->
    <script type="text/javascript" src="/RobotInstitute/Public/js/Admin/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="/RobotInstitute/Public/js/Admin/dataTables.bootstrap.min.js"></script>
    <script src="/RobotInstitute/Public/js/Admin/bootstrap-multiselect.js"></script>


    <script type="text/javascript">$('#add_userTable').DataTable();</script>

    <script type="text/javascript"  src="/RobotInstitute/Public/js/Admin/add_user.js"></script>



  </body>
</html>