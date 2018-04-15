
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

                 <tr>
                  <td>201501</td>
                   <td>C-Jun</td>
                   <td>junstitch.com@gmail.com</td>
                  <td>15机器人4班</td>
                  <td>软件工程</td>
                   <td>男</td>
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
                  <td><span id='add_temperory'><a href = 'javascript:void(0)' data ='0'>添加 </a></span> / <span id='delete_temperory'><a href = 'javascript:void(0)' style='color:red;' data ='0'>删除</a></span></td>
                </tr>

                <tr>
                  <td>201501</td>
                   <td>C-Jun</td>
                   <td>junstitch.com@gmail.com</td>
                  <td>15机器人4班</td>
                  <td>软件工程</td>
                   <td>男</td>
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
                  <td><span id='add_temperory'><a href = 'javascript:void(0)' data ='0'>添加 </a></span> / <span id='delete_temperory'><a href = 'javascript:void(0)' style='color:red;' data ='0'>删除</a></span></td>
                </tr>
               
                 </tbody>
              </table>
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

    <!-- The javascript plugin to display page loading on top-->
    <script src="__PUBLIC__/js/Admin/pace.min.js"></script>


    <!-- Data table plugin-->
    <script type="text/javascript" src="__PUBLIC__/js/Admin/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/Admin/dataTables.bootstrap.min.js"></script>
    <script src="__PUBLIC__/js/Admin/bootstrap-multiselect.js"></script>


    <script type="text/javascript">
      $('#add_userTable').DataTable();
      $('.user_type-select').multiselect();  //获取专业

    </script>

  </body>
</html>
