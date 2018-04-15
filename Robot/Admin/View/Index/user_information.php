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
    <include file="index_menu" />

    <!-- 用户信息： -->
     <main class="app-content">
          <!-- 用户信息： -->
      <div class="row user">
        <div class="col-md-2">
          <div class="profile">
            <div class="info"><img class="user-img" src="__PUBLIC__/images/Background/user.png">
             
          
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
    <script src="__PUBLIC__/js/Admin/jquery.min.js"></script> 
    <!-- 添加bootstrap框架的js -->
    <script src="__PUBLIC__/js/Admin/bootstrap.min.js"></script>

    <script src="__PUBLIC__/js/Admin/popper.min.js"></script>

    <script src="__PUBLIC__/js/Admin/main.js"></script>

    <!-- The javascript plugin to display page loading on top-->
    <script src="__PUBLIC__/js/Admin/pace.min.js"></script>

    <!-- Page specific javascripts-->
    <script type="text/javascript" src="__PUBLIC__/js/Admin/chart.js"></script>

  </body>
</html>