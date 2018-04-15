// 自动加载用户信息
$(function(){

  var email = $("input[name='email']").val();

  if(email != ''){
       $.ajax({
      url:'get_user_information',
      type:'POST',
      data:{email:email},
      dataType:"json",

      success:function (data) {

        for(var key in data){
          $("input[name='"+key+"']").val(data[key]);
        }

      },

      error:function(){
        alert('抱歉！服务器出现问题，请刷新一遍！')
      }

    });

  }

});


// 更新个人信息
function saveInformation() {

  $('#save_information_span').empty();
  
  $.ajax({

      url:'save_information',
      type:'POST',
      data:$('#available-form').serialize(),
      success:function (data) {
        alert(data);
        window.location.reload();
      },

      error:function () {
           $('#save_information_span').append('（抱歉！发生未知错误，更新失败。）');
      }
  
  });
}



//验证旧密码
function validateOldPwd(val) {

  $('#old_pwd_span').empty();
  var id = $("input[name = 'id']").val();

    $.ajax({
      type:'POST',
      data:{pwd:val,id:id},
      url:'validate_old_pwd',
      success:function (data) {
        if (data!='ojbk') {
            $('#old_pwd_span').append(data);
             $("input[name = 'reset_pwd']").attr('disabled','disabled');
        }
        else
           $("input[name = 'reset_pwd']").removeAttr('disabled','disabled');
      },
      error:function () {
          $('#old_pwd_span').append('（抱歉！发生未知错误，请刷新页面。）');
      }

    });

}


// 重置密码长度的验证
function resetPwd(val,id) {
   $(id).empty();
   if (val.length >15 || val.length <3) {
        $(id).append("<span style = 'font-size:15px;'>（密码长度控制在3~15个数）</span>");
         $('#reset_pwd-button').attr('disabled','disabled');
   }
}


//确认重置密码
function comfirmResetPwd(pwd_name,comfirm_val, span_id) {

    $(span_id).empty();
    if(comfirm_val != $("input[name='"+pwd_name+"']").val()){
       $(span_id).append("<span style = 'font-size:15px;'>（两次密码不一致！）</span>");
       $('#reset_pwd-button').attr('disabled','disabled');
    }
    else if (comfirm_val.length >15 || comfirm_val.length <3) {
        $(span_id).append("<span style = 'font-size:15px;'>（密码长度控制在3~15个数）</span>");
         $('#reset_pwd-button').attr('disabled','disabled');
    }
    else{
       $('#reset_pwd-button').removeAttr('disabled');
    }
}



// 更改密码时事件
function resetPwdFunction() {

    var flag = true;

    $('#reset_pwd_button_span').empty();  //先清空

    $("#reset_pwd-form :password").each(function () { //判断有没有设置密码
        if($(this).val() == ''){
          $('#reset_pwd_button_span').append("（请填完整信息）");
          return flag = false;
      }
    });

    if(flag) //信息完整
    {

      var id = $("input[name = 'id']").val();
      var new_pwd = $("input[name = 'reset_pwd']").val();

       $.ajax({

          type:"POST",
          data:{id:id,new_pwd:new_pwd},
          url:"reset_pwd",
          
          success:function (data) {
            alert(data);
            if(data =='恭喜您！重置密码成功！'){
              window.location.reload();
            }
          },
          error:function () {
            $('#reset_pwd_button_span').append("（抱歉！发生未知错误，请刷新页面。）");
          }
       });
    }
}