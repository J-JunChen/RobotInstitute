
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
     <link href="__PUBLIC__/css/Admin/bootstrap-multiselect.css" rel="stylesheet">

 
    </head>
    <body class="app sidebar-mini">

   <!-- 引入目录文件 -->

    <include file="index_menu" />;

    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-user-plus"></i> 群发邮件</h1>
          <h5>温馨提示：对所有用户进行群发邮件，慎重！</h5>
        </div>
      </div>

      <div class="col-md-8" style = "margin-left: 0px;">
          <div class="tab-content">
            <div class="tab-pane active" id="user-settings">
              <div class="tile user-settings">
                <h3 class="line-head" style="color: red;font-size: 20px;">群发邮件</h3>

                <form id="reset_pwd-form">
                   <div class="row mb-4">
                      <div class="col-md-12">
                        <label>标题：</label>
                        <input class="form-control" type="text" id="email_title" onkeyup ="this.value=this.value.replace(/\s+/g,'')">
                      </div>
                    </div>

                     <div class="row mb-4">
                        <div class="col-md-12">
                          <label >内容：</label>
                          <textarea id='email_content' class="form-control" ></textarea> 
                        </div>
                    </div>
                   
                  <div class="row mb-10">
                    <div class="col-md-12">
                      <button class="btn btn-primary" type="button" id='send_all-button' onclick='sendAllFunction()'><i class="fa fa-fw fa-lg fa-check-square-o"></i> 确认发送</button>
                    </div>
                  </div>
                </form>

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
    <!-- <script src="https://cdn.bootcss.com/popper.js/1.13.0/popper.min.js"></script> -->


    <script src="__PUBLIC__/js/Admin/main.js"></script>

  <script type="text/javascript">

    function sendAllFunction(){

      var email_title = $('#email_title').val();
      var email_content = $('#email_content').val().replace(/^\s+|\s+$/g,"");

      if(email_title == '')
        alert("请输入标题！");
      else if(email_content == '')
        alert("请输入内容！");
      else
        alert('发送成功！');
    }


    </script>

  </body>
</html>
