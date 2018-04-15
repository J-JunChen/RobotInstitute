
// <!-- 用户注册js -->

$('#class-select').multiselect();  //获取班级
$('#major-select').multiselect();  //获取专业
$('#job-select').multiselect();  //获取职能


//  <!-- 学生注册js -->
// 邮箱正则验证
function validateRegisterEmail(val) {

  $("#email_span").empty();

    $.ajax({
        type:"POST",
        data: {email:val},
        url: 'validate_register_email',
        success:function (data) {
           $("#email_span").append("*"+data+"");

           if(data == "<span style = 'color:blue; font-size:15px;'>（该邮箱还没被使用，可注册）</span>")
              $('#send_email_button').removeAttr('disabled');
          else
            $('#send_email_button').attr('disabled','disabled');

        },
        error:function () {
           $("#email_span").append("（抱歉！发生未知错误，请刷新页面。）");
        }

    });
}

//点击发送邮箱验证码
function sendVerficationCode() {

  $('#send_email_span').empty();

  if($("input[name='register_realName']").val() == '')
    $('#send_email_span').append("（请填写真实姓名)");

  else{
     var email = $("input[name='register_email']").val();
     var name =$("input[name='register_realName']").val();

      $.ajax({
          url:'send_verficationCode_email',
          type:"POST",
          data:{email:email, name:name},

          success:function(data) {
              $('#send_email_span').append(data);
          },

          error:function () {
              $('#send_email_span').append("（抱歉！发生未知错误，请刷新页面。）");
          }
      });
  }
}

// 密码长度的验证
function setRegisterPwd(val,id) {
   $(id).empty();
   if (val.length >15 || val.length <3) {
        $(id).append("<span style = 'font-size:15px;'>（密码长度控制在3~15个数）</span>");
        $('#register_button').attr('disabled','disabled');
   }
}

//确认密码
function comfirmPwd(pwd_name,comfirm_val, span_id) {

  $(span_id).empty();
  if(comfirm_val != $("input[name='"+pwd_name+"']").val()){
     $(span_id).append("<span style = 'font-size:15px;'>（两次密码不一致！）</span>");
    $('#register_button').attr('disabled','disabled');
  }

  else if (comfirm_val.length >15 || comfirm_val.length <3) {
      $(span_id).append("<span style = 'font-size:15px;'>（密码长度控制在3~15个数）</span>");
      $('#register_button').attr('disabled','disabled');
  }
  
  else{
     $('#register_button').removeAttr('disabled');
  }
}

 // 注册事件
function register() {

    var flag = true;

    $('#register_span').empty();  //先清空

    $("#register_form :text").each(function () { //判断个人信息是否完整
        if($(this).val() == ''){
          $('#register_span').append("（请完善个人信息）");
          return flag = false;
        }
    });

    $("#register_form :password").each(function () { //判断有没有设置密码
        if($(this).val() == ''){
          $('#register_span').append("（请设置密码）");
          return flag = false;
      }
    });

    if(flag) //信息完整
    {
       $.ajax({

          type:"POST",
          data:$('#register_form').serialize(),
          url:"register",
          success:function (data) {
            alert(data);
            if(data =='恭喜您！注册成功，需要审核通过才能登录。'){
              window.location.reload();
            }
          },
          error:function () {
            $('#register_span').append("（抱歉！发生未知错误，请刷新页面。）");
          }
       });
    }
}



//  <!-- 教师注册js -->
// 邮箱正则验证
function teacherValidateRegisterEmail(val) {

  $("#teacher_email_span").empty();

    $.ajax({
        type:"POST",
        data: {email:val},
        url: 'validate_register_email',
        success:function (data) {
           $("#teacher_email_span").append("*"+data+"");

           if(data == "<span style = 'color:blue; font-size:15px;'>（该邮箱还没被使用，可注册）</span>")
              $('#teacher_send_email_button').removeAttr('disabled');
          else
            $('#teacher_send_email_button').attr('disabled','disabled');

        },
        error:function () {
           $("#teacher_email_span").append("（抱歉！发生未知错误，请刷新页面。）");
        }

    });
}

//点击发送邮箱验证码
function teacherSendVerficationCode() {

  $('#teacher_send_email_span').empty();

  if($("input[name='teacher_register_realName']").val() == '')
    $('#teacher_send_email_span').append("（请填写真实姓名)");

  else{
     var email = $("input[name='teacher_register_email']").val();
     var name =$("input[name='teacher_register_realName']").val();

      $.ajax({
          url:'send_verficationCode_email',
          type:"POST",
          data:{email:email, name:name},

          success:function(data) {
              $('#teacher_send_email_span').append(data);
          },

          error:function () {
              $('#teacher_send_email_span').append("（抱歉！发生未知错误，请刷新页面。）");
          }
      });
  }
}

// 密码长度的验证
function teacherSetRegisterPwd(val,id) {
   $(id).empty();
   if (val.length >15 || val.length <3) {
        $(id).append("<span style = 'font-size:15px;'>（密码长度控制在3~15个数）</span>");
        $('#teacher_register_button').attr('disabled','disabled');
   }
}

//确认密码
function teacherComfirmPwd(pwd_name,comfirm_val, span_id) {

  $(span_id).empty();
  if(comfirm_val != $("input[name='"+pwd_name+"']").val()){
     $(span_id).append("<span style = 'font-size:15px;'>（两次密码不一致！）</span>");
    $('#teacher_register_button').attr('disabled','disabled');
  }

  else if (comfirm_val.length >15 || comfirm_val.length <3) {
        $(span_id).append("<span style = 'font-size:15px;'>（密码长度控制在3~15个数）</span>");
        $('#teacher_register_button').attr('disabled','disabled');
  }

  else{
     $('#teacher_register_button').removeAttr('disabled');
  }
}

 // 注册事件
function teacher_register() {

    var flag = true;

    $('#teacher_register_span').empty();  //先清空

    $("#teacher_register_form :text").each(function () { //判断个人信息是否完整
        if($(this).val() == ''){
          $('#teacher_register_span').append("（请完善个人信息）");
          return flag = false;
        }
    });

    $("#teacher_register_form :password").each(function () { //判断有没有设置密码
        if($(this).val() == ''){
          $('#teacher_register_span').append("（请设置密码）");
          return flag = false;
      }
    });

    if(flag) //信息完整
    {
       $.ajax({

          type:"POST",
          data:$('#teacher_register_form').serialize(),
          url:"teacher_register",
          success:function (data) {
            alert(data);
            if(data =='恭喜您！注册成功，需要审核通过才能登录。'){
              window.location.reload();
            }
          },
          error:function () {
            $('#teacher_register_span').append("（抱歉！发生未知错误，请刷新页面。）");
          }
       });
    }
}  





// <!-- 找回密码js -->

//注册邮箱验证
function forgetPwd_emailChange(val) {
   $("#forget_email_span").empty();

    $.ajax({
        type:"POST",
        data: {email:val},
        url: 'validate_forgetPwd_email',
        success:function (data) {
           $("#forget_email_span").append("*"+data+"");

           if(data == "<span style = 'color:blue; font-size:15px;'>（该邮箱可找回密码）</span>")
              $('#send_fogetPwd_email_button').removeAttr('disabled');
          else
            $('#send_fogetPwd_email_button').attr('disabled','disabled');

        },
        error:function () {
           $("#forget_email_span").append("（抱歉！发生未知错误，请刷新页面。）");
        }

    });
}


//点击发送找回密码验证码
function sendForgetPwdCode() {
  $('#send_forgetPwd_email_span').empty();

  if($("input[name='registered_realName']").val() == '')
    $('#send_forgetPwd_email_span').append("（请填写真实姓名)");

  else{
     var email = $("input[name='registered_email']").val();
     var name =$("input[name='registered_realName']").val();

      $.ajax({
          url:'send_forgetPwd_email',
          type:"POST",
          data:{email:email, name:name},

          success:function(data) {
              $('#send_forgetPwd_email_span').append(data);
          },

          error:function () {
              $('#send_forgetPwd_email_span').append("（抱歉！发生未知错误，请刷新页面。）");
          }
      });
  }
}


// 重置密码长度的验证
function resetPwd(val,id) {
   $(id).empty();
   if (val.length >15 || val.length <3) {
        $(id).append("<span style = 'font-size:15px;'>（密码长度控制在3~15个数）</span>");
         $('#forget_button').attr('disabled','disabled');
   }
}


//确认重置密码
function comfirmResetPwd(pwd_name,comfirm_val,span_id) {

    $(span_id).empty();
    if(comfirm_val != $("input[name='"+pwd_name+"']").val()){
       $(span_id).append("<span style = 'font-size:15px;'>（两次密码不一致！）</span>");
       $('#forget_button').attr('disabled','disabled');
    }
    else if (comfirm_val.length >15 || comfirm_val.length <3) {
          $(span_id).append("<span style = 'font-size:15px;'>（密码长度控制在3~15个数）</span>");
           $('#reset_pwd-button').attr('disabled','disabled');
      }

    else{
       $('#forget_button').removeAttr('disabled');
    }
}


// 找回密码事件
function forgetPwd() {

    var flag = true;

    $('#forget_span').empty();  //先清空

    $("#forget_form :text").each(function () { //判断个人信息是否完整
        if($(this).val() == ''){
          $('#forget_span').append("（请完善个人信息）");
          return flag = false;
        }
    });

    $("#forget_form :password").each(function () { //判断有没有设置密码
        if($(this).val() == ''){
          $('#forget_span').append("（请设置密码）");
          return flag = false;
      }
    });


    if(flag) //信息完整
    {
       $.ajax({

          type:"POST",
          data:$('#forget_form').serialize(),
          url:"forget_pwd",
          
          success:function (data) {
            alert(data);
            if(data =='恭喜您！重置密码成功！'){
              window.location.reload();
            }
          },

          error:function () {
            $('#forget_span').append("（抱歉！发生未知错误，请刷新页面。）");
          }

       });
    }
}



// <!-- 用户登录js -->

//验证登录邮箱
 function validateLoginEmail(val) {
    $("#login_email_span").empty();

        $.ajax({
            type:"POST",
            data: {email:val},
            url: 'validate_login_email',
            success:function (data) {

               if(data == "ojbk"){

                 if($("input[name=login_pwd]").val()==''){

                     $('#login_button_span').empty();
                     $('#login_button_span').append("（请输入密码）");
                 
                  }
                  else
                     $('#loginIn_button').removeAttr('disabled');
               }
              else{
                 $("#login_email_span").append(data);
                 $('#loginIn_button').attr('disabled','disabled');
               }

            },
            error:function () {
               $("#login_email_span").append("（抱歉！发生未知错误，请刷新页面。）");
            }

        });
 }

//验证登录邮箱密码
 function validateLoginPwd() {

    $('#login_pwd_span').empty();  //先清空

    if($("input[name=login_email]").val()=='')
    {
      $('#login_button_span').empty();
      $('#login_button_span').append("（请输入邮箱）");
      $('#loginIn_button').attr('disabled','disabled');
    }
    else if ($("input[name=login_pwd]").val()=='') {
      $('#login_button_span').empty();
      $('#login_button_span').append("（请输入密码）");
      $('#loginIn_button').attr('disabled','disabled');
    }
    else{  //信息填写完整

       $('#login_button_span').empty();
       $.ajax({

          type:"POST",
          data:$('#login-form').serialize(),
          url:"validate_login_pwd",
          
          success:function (data) {
             if(data != 'ojbk'){
               $('#login_pwd_span').append(data);
               $('#loginIn_button').attr('disabled','disabled');
             }
             else{
               $('#loginIn_button').removeAttr('disabled');
             }
          },

          error:function () {
            $('#login_pwd_span').append("（抱歉！发生未知错误，请刷新页面。）");
          }

       });
    }

 }


//页面刷新判断
$(function () {

  var flag = true;

  if($("input[name= login_email]").val()==''){
     $('#login_button_span').append("（请输入邮箱）");
     flag = false;
  }
  if($("input[name= login_pwd]").val()==''){
     $('#login_button_span').append("（请输入密码）");
     flag =false;
  }
  
  if(flag)
    $('#loginIn_button').removeAttr('disabled');
  else
    $('#loginIn_button').attr('disabled','disabled');
})


// 防止用户注销后，回退上一页
 $(document).ready(function(e) { 
    var counter = 0;
    if (window.history && window.history.pushState) {
           $(window).on('popstate', function () {
                          window.history.pushState('forward', null, '');
                          window.history.forward(1);
                        // alert("不可回退");
                        window.location.reload();
              });
      }

      window.history.pushState('forward', null, ''); //在IE中必须得有这两行
      window.history.forward(1);
});