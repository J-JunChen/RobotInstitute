<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/RobotInstitute/Public/robot.ico"/>

    <!-- Main CSS-->
     <link rel="stylesheet" type="text/css" href="/RobotInstitute/Public/css/Admin/main.css">

    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
   <link href="/RobotInstitute/Public/css/Admin/fileinput.min.css" rel="stylesheet">
   <link href="/RobotInstitute/Public/css/Admin/bootstrap-multiselect.css" rel="stylesheet">

    <title>机器人学院后台管理系统</title>

  </head>
  <body>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <!--学生注册 Modal -->
      <div class="modal fade" id="student_register_Model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel">
                  <span style="color: blue; font-size: 25px;">注册新用户</span>
                  <span style="color: red; font-size: 18px;">（注意：本系统只提供给机器人学院的同学，教师和管理员使用，所以需要提供真实信息进行审核）</span>
              </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
              <form id="register_form">
                <div class="form-group">

                  <div class="row clearfix">
                      <div class="col-md-6 column">
                        <label for="message-text" class="control-label">邮箱：<span id="email_span">*</span></label>
                        <input name='register_email' type="text" class="form-control"  placeholder="（非常重要，用于邮箱验证，密码找回）" onchange="validateRegisterEmail(this.value)"  onkeyup ="this.value=this.value.replace(/\s+/g,'')">
                      </div>


                      <div class="col-md-6 column">
                       <label for="message-text" class="control-label">真实姓名：<span>*</span></label>
                        <input name='register_realName' type="text" class="form-control"  placeholder="（必填）不超过6字" maxlength="6" onkeyup ="this.value=this.value.replace(/\s+/g,'')" >
                      </div>


                      <div class="col-md-6 column">
                         <button type="button" class="btn btn-info" disabled="disabled" title="发送" id="send_email_button" onclick="sendVerficationCode()">发送验证码到邮箱</button><span id="send_email_span"></span>
                      </div> 

                      <div class="col-md-6 column">
                         <label for="message-text" class="control-label">邮箱收到的验证码：<span>*</span></label>
                          <input name='register_verificationCode' type="text" class="form-control"  placeholder="" maxlength="6" onkeyup ="this.value=this.value.replace(/\s+/g,'')">
                      </div>

                       <div class="col-md-6 column">
                         <label for="message-text" class="control-label">设置登录密码：<span>*<span id ="set_pwd_span"></span></span></label>
                          <input name='register_pwd' type="password" class="form-control"  placeholder="（必填）密码长度控制在3~15个数内" onkeyup ="this.value=this.value.replace(/\s+/g,'')" onchange="setRegisterPwd(this.value, '#set_pwd_span')">
                      </div>

                       <div class="col-md-6 column">
                         <label for="message-text" class="control-label">密码确认：<span>*<span id="comfirm_pwd_span"></span></span></label>
                          <input name='comfirm_pwd' type="password" class="form-control"     onkeyup ="this.value=this.value.replace(/\s+/g,'')" placeholder="（必填）确认注册密码"
                          onchange="comfirmPwd('register_pwd', this.value,'#comfirm_pwd_span')">
                      </div>

                      <div class="col-md-6 column">
                       <label for="message-text" class="control-label">班级：<span>*</span></label>
                         <div>
                            <select id="class-select" name="select_class">
                                <optgroup label="2017级" class="group-2017">
                                    <option value="2017级机器人1班" selected="selected">2017级机器人1班</option>
                                    <option value="2017级机器人2班">2017级机器人2班</option>
                                    <option value="2017级机器人3班">2017级机器人3班</option>
                                    <option value="2017级机器人4班">2017级机器人4班</option>
                                </optgroup>

                                 <optgroup label="2016级" class="group-2016">
                                    <option value="2016级机器人1班">2016级机器人1班</option>
                                    <option value="2016级机器人2班">2016级机器人2班</option>
                                    <option value="2016级机器人3班">2016级机器人3班</option>
                                    <option value="2016级机器人4班">2016级机器人4班</option>
                                </optgroup>

                                <optgroup label="2015级" class="group-2015">
                                    <option value="2015级机器人1班">2015级机器人1班</option>
                                    <option value="2015级机器人2班">2015级机器人2班</option>
                                    <option value="2015级机器人3班">2015级机器人3班</option>
                                    <option value="2015级机器人4班">2015级机器人4班</option>
                                </optgroup>
                            </select>

                          </div>
                      </div>

                      <div class="col-md-6 column">
                          <label for="message-text" class="control-label">专业：<span>*</span></label>
                            <div>
                              <select id="major-select" name="select_major">
                                      <option value="电子工程" selected="selected">电子工程</option>
                                      <option value="自动化">自动化</option>
                                      <option value="机械工程">机械工程</option>
                                      <option value="软件工程">软件工程</option>
                              </select>
                            </div>
                      </div>

                      <div class="col-md-6 column">
                         <label for="message-text" class="control-label">学号：<span>*</span></label>
                          <input name='register_studentNo' type="text" class="form-control"  placeholder="（必填）" maxlength="15"  onkeyup ="this.value=this.value.replace(/\s+/g,'')">
                      </div>

                      <div class="col-md-6 column">
                        <label for="message-text" class="control-label">性别：<span>*</span></label>
                          <div>
                               <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-info active" id="sex_radio">
                                  <input type="radio" name="sex" autocomplete="off" checked  value="男"> 男
                                </label>

                                <label class="btn btn-info " id="sex_radio">
                                  <input type="radio" name="sex"  autocomplete="off"  value="女"> 女
                                </label>
                              </div>
                            </div>
                      </div>

                  </div>
 
                </div>
              </form>
              <div id="kartik-file-errors"></div>
            </div>

            <div class="modal-footer">
               <span id="register_span"></span>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
              <button type="button" class="btn btn-primary" title="上传相册" id="register_button" onclick="register()">注册</button>
            </div>
          </div>
        </div>
      </div>

     </div>        
  </div>


  <div class="row">
    <div class="col-md-12">
      <!--教师注册 Modal -->
      <div class="modal fade" id="teacher_register_Model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel">
                  <span style="color: blue; font-size: 25px;">注册新用户</span>
                  <span style="color: red; font-size: 18px;">（注意：本系统只提供给机器人学院的同学，教师和管理员使用，所以需要提供真实信息进行审核）</span>
              </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
              <form id="teacher_register_form">
                <div class="form-group">

                  <div class="row clearfix">
                      <div class="col-md-6 column">
                        <label for="message-text" class="control-label">邮箱：<span id="teacher_email_span">*</span></label>
                        <input name='teacher_register_email' type="text" class="form-control"  placeholder="（非常重要，用于邮箱验证，密码找回）" onchange="teacherValidateRegisterEmail(this.value)"  onkeyup ="this.value=this.value.replace(/\s+/g,'')">
                      </div>


                      <div class="col-md-6 column">
                       <label for="message-text" class="control-label">真实姓名：<span>*</span></label>
                        <input name='teacher_register_realName' type="text" class="form-control"  placeholder="（必填）不超过6字" maxlength="6" onkeyup ="this.value=this.value.replace(/\s+/g,'')" >
                      </div>


                      <div class="col-md-6 column">
                         <button type="button" class="btn btn-info" disabled="disabled" title="发送" id="teacher_send_email_button" onclick="teacherSendVerficationCode()">发送验证码到邮箱</button><span id="teacher_send_email_span"></span>
                      </div> 

                      <div class="col-md-6 column">
                         <label for="message-text" class="control-label">邮箱收到的验证码：<span>*</span></label>
                          <input name='teacher_register_verificationCode' type="text" class="form-control"  placeholder="" maxlength="6" onkeyup ="this.value=this.value.replace(/\s+/g,'')">
                      </div>

                       <div class="col-md-6 column">
                         <label for="message-text" class="control-label">设置登录密码：<span>*<span id ="teacher_set_pwd_span"></span></span></label>
                          <input name='teacher_register_pwd' type="password" class="form-control"  placeholder="（必填）密码长度控制在3~15个数内" onkeyup ="this.value=this.value.replace(/\s+/g,'')" onchange="teacherSetRegisterPwd(this.value, '#teacher_set_pwd_span')">
                      </div>

                       <div class="col-md-6 column">
                         <label for="message-text" class="control-label">密码确认：<span>*<span id="teacher_comfirm_pwd_span"></span></span></label>
                          <input name='comfirm_pwd' type="password" class="form-control"     onkeyup ="this.value=this.value.replace(/\s+/g,'')" placeholder="（必填）确认注册密码"
                          onchange="teacherComfirmPwd('teacher_register_pwd', this.value,'#teacher_comfirm_pwd_span')">
                      </div>

                      <div class="col-md-6 column">
                          <label for="message-text" class="control-label">职位：<span>*</span></label>
                            <div>
                              <select id="job-select" name="select_job">
                                      <option value="教师" selected="selected">教师</option>
                                      <option value="教学秘书">教学秘书</option>
                              </select>
                            </div>
                      </div>

                      <div class="col-md-6 column">
                        <label for="message-text" class="control-label">性别：<span>*</span></label>
                          <div>
                               <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-info active" id="sex_radio">
                                  <input type="radio" name="sex" autocomplete="off" checked  value="男"> 男
                                </label>

                                <label class="btn btn-info " id="sex_radio">
                                  <input type="radio" name="sex"  autocomplete="off"  value="女"> 女
                                </label>
                              </div>
                            </div>
                      </div>

                  </div>
 
                </div>
              </form>
              <div id="kartik-file-errors"></div>
            </div>

            <div class="modal-footer">
               <span id="teacher_register_span"></span>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
              <button type="button" class="btn btn-primary" title="上传相册" id="teacher_register_button" onclick="teacher_register()">注册</button>
            </div>
          </div>
        </div>
      </div>

     </div>        
  </div>


  <div class="row">
    <div class="col-md-12">
      <!--忘记密码 Modal -->
      <div class="modal fade" id="forget_password_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel">
                  <span style="color: blue; font-size: 25px;">找回密码</span>
              </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
              <form id="forget_form">
                <div class="form-group">

                  <div class="row clearfix">
                      <div class="col-md-6 column">
                        <label for="message-text" class="control-label">注册邮箱：<span id="forget_email_span">*</span></label>
                        <input name='registered_email' type="text" class="form-control"  placeholder="注册过的邮箱" onkeyup ="this.value=this.value.replace(/\s+/g,'')" onchange="forgetPwd_emailChange(this.value)">
                      </div>

                      <div class="col-md-6 column">
                      
                         <label for="message-text" class="control-label">真实姓名：<span>*</span></label>
                          <input name='registered_realName' type="text" class="form-control"  placeholder="（必填）不超过6字" maxlength="6"  onkeyup ="this.value=this.value.replace(/\s+/g,'')">
                      </div>

                      <div class="col-md-6 column">
                         <button type="button" class="btn btn-info" disabled="disabled" title="发送" id="send_fogetPwd_email_button" onclick="sendForgetPwdCode()">发送验证码到邮箱</button><span id="send_forgetPwd_email_span"></span>
                      </div>

                      <div class="col-md-6 column">
                         <label for="message-text" class="control-label">邮箱收到的验证码：<span>*</span></label>
                          <input name='forget_verificationCode' type="text" class="form-control"  placeholder="" maxlength="6" onkeyup ="this.value=this.value.replace(/\s+/g,'')">
                      </div>

                      <div class="col-md-6 column">
                         <label for="message-text" class="control-label">重置密码：<span>*<span id="reset_pwd_span"></span></span></label>
                          <input name='reset_pwd' type="password" class="form-control"  placeholder="（必填）密码长度控制在3~15个数内" onkeyup ="this.value=this.value.replace(/\s+/g,'')" onchange="resetPwd(this.value, '#reset_pwd_span')">
                      </div>

                       <div class="col-md-6 column">
                         <label for="message-text" class="control-label">重置密码确认：<span>*<span id="comfirm_reset_pwd_span"></span></span></label>
                          <input name='comfirm_reset_pwd' type="password" class="form-control"    onkeyup ="this.value=this.value.replace(/\s+/g,'')" onchange="comfirmResetPwd('reset_pwd', this.value,'#comfirm_reset_pwd_span')" placeholder="（必填）确认重置密码">
                      </div>



                      <div class="col-md-6 column">
                         <label for="message-text" class="control-label" style="color:#FF0000;">啥？居然连邮箱都忘记了！！！</label>
                          <div><a href="">莫慌，点击这里：送你回首页，反馈信息给管理员吧</a></div>
                      </div>

                  </div>
           
                </div>
              </form>
              <div id="kartik-file-errors"></div>
            </div>

            <div class="modal-footer">
              <span id="forget_span"></span>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
              <button type="button" class="btn btn-primary" title="确认" id= "forget_button" onclick="forgetPwd()">确认</button>
            </div>
          </div>
        </div>
      </div>

     </div>        
  </div>
 </div>



    <section class="material-half-bg">
      <div class="cover"></div>
    </section>

    <section class="login-content">
      <div class="logo" style = "text-align: center;">
         <h3>东莞理工学院机器人学院后台管理系统</h3>
      </div>

      <div class="login-box">
      
      <!-- onsubmit防止form跳转 -->
        <!-- <form id="login-form" onsubmit="return false;" >  -->
        <form id="login-form" method="post" action="validate">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>

          <div class="form-group">
            <label class="control-label">邮箱：</label><span id="login_email_span"></span>
            <input name="login_email" class="form-control" type="text" placeholder="Email" autofocus  onkeyup ="this.value=this.value.replace(/\s+/g,'')" onchange="validateLoginEmail(this.value)"> 
          </div>

          <div class="form-group">
            <label class="control-label">密码：</label><span id="login_pwd_span"></span>
            <input name="login_pwd" class="form-control" type="password" placeholder="Password"  onkeyup ="this.value=this.value.replace(/\s+/g,'')" onchange="validateLoginPwd()">
          </div>

          <div class="form-group">
            <div class="utility">
              <p class="semibold-text mb-2"><a id="stduent_register" data-toggle="modal" data-target="#student_register_Model" href="">学生注册</a></p>

              <p class="semibold-text mb-2"><a id="teacher_register" data-toggle="modal" data-target="#teacher_register_Model" href="">教师注册</a></p>

              <p class="semibold-text mb-2"><a id="forget_password" data-toggle="modal" data-target="#forget_password_Modal" href="">忘记密码？</a></p>
            </div>
          </div>

          <div class="form-group">
            <button class="btn btn-primary btn-block" id="loginIn_button"><i class="fa fa-sign-in fa-lg fa-fw"></i>登录</button>
            <span id="login_button_span"></span>

            <div style="margin-top: 15px; text-align: center; font-size: 15px;" >
              <a href="index" style = 'text-decoration:underline;''>无账号登录试试看</a>
            </div>
           
          </div>
        </form>

      </div>

    </section>


  </body>

    <!-- 添加jq.js，注意，所有的js必须在jquery.js的后面，因为所有的js都是基于jq -->
    <script src="/RobotInstitute/Public/js/Admin/jquery.min.js"></script> 
    <!-- 添加bootstrap框架的js -->
    <script src="/RobotInstitute/Public/js/Admin/bootstrap.min.js"></script>

    <script src="/RobotInstitute/Public/js/Admin/fileinput.min.js"></script>

    <script src="/RobotInstitute/Public/js/Admin/popper.min.js"></script>

    <script src="https://cdn.bootcss.com/bootstrap-fileinput/4.3.1/js/fileinput_locale_zh.js"></script>

    <script src="/RobotInstitute/Public/js/Admin/bootstrap-multiselect.js"></script>

    <script src="/RobotInstitute/Public/js/Admin/login.js"></script>
    
</html>