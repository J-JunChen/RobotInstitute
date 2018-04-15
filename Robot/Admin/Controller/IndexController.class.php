<?php

namespace Admin\Controller;
use Think\Controller;
use Think\Model;


use Vendor\phpmailer\PHPMailer; //将phpmailer放在Vendor（第三方类库里面），然后通过命名空间加载
use Vendor\phpmailer\SMTP;


class IndexController extends Controller {

    // 登陆界面
     public function login()
    {
         session('[start]'); // 启动session
         $this->display();
    }

    
    // 退出账户
    public function login_out()
    {
        session(null);
        session('[destroy]'); // 销毁session
        $this->redirect('Index/login','页面跳转中');
    }


  	public function index()
  	{	

      $editable_table = D('Editable');  //数据库的可编辑表
      $editable = $editable_table->relation(true)->select();
      $json_string = json_encode($editable); //将可编辑目录转化为json数据类型，再通过session传给summernote
      session('editable_session',$json_string);

      $learning_resources_table = M('LearningResources');  //数据库的学习资源表
      $learning_resources = $learning_resources_table->select();
      $json_learning_resources = json_encode($learning_resources);
      session('learning_resources_session',$json_learning_resources);

      $institute_album_table = M('InstituteAlbum');  //数据库的相册表
      $institute_album = $institute_album_table->select();
      $json_institute_album = json_encode($institute_album);
      session('institute_album_session',$json_institute_album);  
      
  		$this->display();
  	}


  // 主页数据分析
    public function analyze()
    {
        $table = D('Login');

        // 把查询条件传入查询方法
        $data =  $table->field('major,sex,type_id')->select();

        $array['software'] = 0;  //软件工程人数
        $array['automation'] = 0;  //自动化人数
        $array['mechanical'] = 0;  //机械工程人数
        $array['electron'] = 0;  //电子工程人数

        $array['male'] = 0; //男生人数
        $array['female'] = 0; //女生人数

        $array['student'] = 0; //学生人数
        $array['teacher'] = 0; //教师人数


        foreach ($data as $key => $value) {

          if($value['major'] == '软件工程')
             $array['software'] += 1;
          elseif($value['major'] == '自动化')
            $array['automation'] += 1;
          elseif($value['major'] == '机械工程')
            $array['mechanical'] += 1;
          else
            $array['electron'] += 1;


          if($value['sex'] == '男')
            $array['male'] += 1;
          else
            $array['female'] +=1;


          if($value['type_id'] == 2 || $value['type_id'] == 5)
            $array['teacher'] += 1;
          else
            $array['student'] += 1;
        }

        $json = json_encode($array);

       echo $json;
    }


	    //验证注册邮箱
    public function validate_register_email()
    {
        $map['email'] = $_POST['email'];

        if (!filter_var($map['email'], FILTER_VALIDATE_EMAIL)) {
            $emailMsg = "<span style = 'color:red; font-size:15px;'>（请输入正确的邮箱格式）</span>";
        } else {
             $login_table = M('Login'); //查询数据库里的邮箱
            if ($login_table->where($map)->select() == null)
            {
                $emailMsg = "<span style = 'color:blue; font-size:15px;'>（该邮箱还没被使用，可注册）</span>";
            }
            else
                $emailMsg = "<span style = 'color:red; font-size:15px;'>（该邮箱已经被注册）</span>";
        }
        echo $emailMsg;
    }

    //发送注册验证码到email
    public function send_verficationCode_email()
    {
          $verificationCode = null; //验证码
          for($i = 0; $i< 6;$i++){
            $verificationCode.=mt_rand(0,9);
          }

          // session(array('verificationCode'=>$verificationCode,'expire'=>60));

          session('verificationCode',$verificationCode);

          // echo session('verificationCode');
          // 
          // echo gettype($_POST['email']);

          //引入PHPMailer的核心文件 使用require_once包含避免出现PHPMailer类重复定义的警告

          //示例化PHPMailer核心类
          $mail = new PHPMailer();
           
          //是否启用smtp的debug进行调试 开发环境建议开启 生产环境注释掉即可 默认关闭debug调试模式
          // $mail->SMTPDebug = 1;
           
          //使用smtp鉴权方式发送邮件，当然你可以选择pop方式 sendmail方式等 本文不做详解
          //可以参考http://phpmailer.github.io/PHPMailer/当中的详细介绍
          $mail->isSMTP();
          //smtp需要鉴权 这个必须是true
          $mail->SMTPAuth=true;
          
          //链接163域名邮箱的服务器地址
          $mail->Host = C('MAIL_Host');
          //设置使用ssl加密方式登录鉴权
          $mail->SMTPSecure = C('MAIL_SMTPSecure');
          //设置ssl连接smtp服务器的远程服务器端口号 可选465或587
          $mail->Port = C('MAIL_Port');

          //设置发送的邮件的编码 可选GB2312 我喜欢utf-8 据说utf8在某些客户端收信下会乱码
          $mail->CharSet = C('MAIL_CharSet');

          //设置发件人姓名（昵称） 任意内容，显示在收件人邮件的发件人邮箱地址前的发件人姓名
          // $mail->FromName = 'C-Jun';
          $mail->FromName = "机器人学院网站管理员：JunStitch";

          //smtp登录的账号 这里填入字符串格式的163号即可
          $mail->Username =C('MAIL_Username');

          //smtp登录的密码 这里填入“独立密码” 若为设置“独立密码”则填入登录qq的密码 建议设置“独立密码”
          //$mail->Password = '您163的第三方授权密码';
          $mail->Password = C('MAIL_Password');

          //设置发件人邮箱地址 这里填入上述提到的“发件人邮箱”
          $mail->From = C('MAIL_From');

          //邮件正文是否为html编码 注意此处是一个方法 不再是属性 true或false
          $mail->isHTML(true); 

          //设置收件人邮箱地址 该方法有两个参数 第一个参数为收件人邮箱地址 第二参数为给该地址设置的昵称 不同的邮箱系统会自动进行处理变动 这里第二个参数的意义不大
          
          $mail->addAddress($_POST['email']);

          $mail->Subject = '机器人学院注册账号';
          //添加邮件正文 上方将isHTML设置成了true，则可以是完整的html字符串 如：使用file_get_contents函数读取本地的html文件
          $mail->Body = "<h2>".$_POST['name'] ."，您好！欢迎注册机器人学院网站系统。</h2>

          <h1 id ='client_email'>您收到的验证码：<a href = '#' style = 'color:red;'>".$verificationCode."</a></h1>";
      
           
          //发送命令 返回布尔值 
          //PS：经过测试，要是收件人不存在，若不出现错误依然返回true 也就是说在发送之前 自己需要些方法实现检测该邮箱是否真实有效
          $status = $mail->send();
           
          //简单的判断与提示信息
          if($status) {
             echo '<span style = "color:blue">（验证码发送成功，注意查收）</span>';
          }else{
             echo '（验证码发送失败，请重新发送或者换一个邮箱试试？）';
          }
    }

    //学生注册
    public function register()
    {
        if(session('verificationCode') != $_POST['register_verificationCode']) {//邮箱验证码
            $Msg = '验证码不正确！';
        }
        else{
           $table = M('Temporary');

           $data['email'] = $_POST['register_email'];  //注册邮箱
           $data['name'] = $_POST['register_realName'];   //真实姓名

           $data['pwd'] = md5($_POST['register_pwd']); //注册密码

           $data['class'] = $_POST['select_class'];  //班级
           $data['major'] = $_POST['select_major'];  //专业
           $data['student_no'] = $_POST['register_studentNo']; //学号

           $data['sex'] = $_POST['sex'];  //性别
          
          $table->data($data)->add();

           $Msg = '恭喜您！注册成功，需要审核通过才能登录。';
        }
        echo  $Msg;
    }

    //教师注册
    public function teacher_register()
    {
        if(session('verificationCode') != $_POST['teacher_register_verificationCode']) {//邮箱验证码
            $Msg = '验证码不正确！';
        }
        else{
           $table = M('Temporary');

           $data['email'] = $_POST['teacher_register_email'];  //注册邮箱
           $data['name'] = $_POST['teacher_register_realName'];   //真实姓名

           $data['pwd'] = md5($_POST['teacher_register_pwd']); //注册密码

           $data['major'] = $_POST['select_job'];  //职能

           $data['sex'] = $_POST['sex'];  //性别
          
          $table->data($data)->add();

           $Msg = '恭喜您！注册成功，需要审核通过才能登录。';
        }
        echo  $Msg;
    }

    //验证找回密码邮箱
    public function validate_forgetPwd_email()
    {
        $map['email'] = $_POST['email'];

        if (!filter_var($map['email'], FILTER_VALIDATE_EMAIL)) {
            $emailMsg = "<span style = 'color:red; font-size:15px;'>（请输入正确的邮箱格式）</span>";
        } else {
             $login_table = M('Login'); //查询数据库里的邮箱
            if ($login_table->where($map)->select() != null)
            {
                $emailMsg = "<span style = 'color:blue; font-size:15px;'>（该邮箱可找回密码）</span>";
            }
            else
                $emailMsg = "<span style = 'color:red; font-size:15px;'>（该邮箱还没被注册）</span>";
        }
        echo $emailMsg;
    }


    //发送忘记密码验证码到email
    public function send_forgetPwd_email()
    {

      // 验证邮箱和真实姓名是否相对应
       $login_table = M('Login');
       $map['email'] = $_POST['email'];
       $map['name'] = $_POST['name'];

        if ($login_table->where($map)->select() == null){
           echo "（抱歉！注册邮箱和对应的真实姓名不符。）";
        }
        else{

          $verificationCode = null; //验证码
          for($i = 0; $i< 6;$i++){
            $verificationCode.=mt_rand(0,9);
          }

          // session(array('verificationCode'=>$verificationCode,'expire'=>60));

          session('forget_verificationCode',$verificationCode);

          // echo session('forget_verificationCode');
          // echo gettype($_POST['email']);

          //引入PHPMailer的核心文件 使用require_once包含避免出现PHPMailer类重复定义的警告

          //示例化PHPMailer核心类
          $mail = new PHPMailer();
           
          //是否启用smtp的debug进行调试 开发环境建议开启 生产环境注释掉即可 默认关闭debug调试模式
          // $mail->SMTPDebug = 1;
           
          //使用smtp鉴权方式发送邮件，当然你可以选择pop方式 sendmail方式等 本文不做详解
          //可以参考http://phpmailer.github.io/PHPMailer/当中的详细介绍
          $mail->isSMTP();
          //smtp需要鉴权 这个必须是true
          $mail->SMTPAuth=true;
          
          //链接163域名邮箱的服务器地址
          $mail->Host = C('MAIL_Host');
          //设置使用ssl加密方式登录鉴权
          $mail->SMTPSecure = C('MAIL_SMTPSecure');
          //设置ssl连接smtp服务器的远程服务器端口号 可选465或587
          $mail->Port = C('MAIL_Port');

          //设置发送的邮件的编码 可选GB2312 我喜欢utf-8 据说utf8在某些客户端收信下会乱码
          $mail->CharSet = C('MAIL_CharSet');

          //设置发件人姓名（昵称） 任意内容，显示在收件人邮件的发件人邮箱地址前的发件人姓名
          $mail->FromName = "机器人学院网站管理员：JunStitch";

          //smtp登录的账号 这里填入字符串格式的163号即可
          $mail->Username =C('MAIL_Username');

          //smtp登录的密码 这里填入“独立密码” 若为设置“独立密码”则填入登录qq的密码 建议设置“独立密码”
          //$mail->Password = '您163的第三方授权密码';
          $mail->Password = C('MAIL_Password');

          //设置发件人邮箱地址 这里填入上述提到的“发件人邮箱”
          $mail->From = C('MAIL_From');

          //邮件正文是否为html编码 注意此处是一个方法 不再是属性 true或false
          $mail->isHTML(true); 

          //设置收件人邮箱地址 该方法有两个参数 第一个参数为收件人邮箱地址 第二参数为给该地址设置的昵称 不同的邮箱系统会自动进行处理变动 这里第二个参数的意义不大
          
          $mail->addAddress($_POST['email']);

          $mail->Subject = '机器人学院找回密码';
          //添加邮件正文 上方将isHTML设置成了true，则可以是完整的html字符串 如：使用file_get_contents函数读取本地的html文件
          $mail->Body = "<h2>".$_POST['name'] ."，您好！当前验证码为机器人学院系统的<span style = 'color:red;'>找回密码</span>验证码。请注意是否为本人操作?</h2>

          <h1 id ='client_email'>您收到的验证码：<a href = '#' style = 'color:red;'>".$verificationCode."</a></h1>";
      
           
          //发送命令 返回布尔值 
          //PS：经过测试，要是收件人不存在，若不出现错误依然返回true 也就是说在发送之前 自己需要些方法实现检测该邮箱是否真实有效
          $status = $mail->send();
           
          //简单的判断与提示信息
          if($status) {
             echo '<span style = "color:blue">（验证码发送成功，注意查收）</span>';
          }else{
             echo '（验证码发送失败，请重新发送或者换一个邮箱试试？）';
          }
        }
    }
    
    // 忘记密码
    public function forget_pwd()
    {

       if(session('forget_verificationCode') != $_POST['forget_verificationCode']) {//邮箱验证码
            $Msg = '验证码不正确！';
        }

        else{

           $table = M('Login');

            $data['email'] = $_POST['registered_email'];  //注册邮箱
            $data['name'] = $_POST['registered_realName'];

           if($id_data = ($table->field('id')->where($data)->select())){
              $id =  $id_data[0]['id'];

             $data['pwd'] = md5($_POST['reset_pwd']); //注册密码

             $table->where('id='.$id)->field('pwd')->save($data);
               $Msg = '恭喜您！重置密码成功！';
           }
        
           else
            $Msg = 'ops！信息不匹配！';

          
        }
        echo  $Msg;
    }


    // 验证登录邮箱
    public function validate_login_email()
    {
        $map['email'] = $_POST['email'];

        if (!filter_var($map['email'], FILTER_VALIDATE_EMAIL)) {
            $emailMsg = "<span style = 'color:red; font-size:15px;'>（请输入正确的邮箱格式）</span>";
        } else {
             $login_table = M('Login'); //查询数据库里的邮箱
            if ($login_table->where($map)->select() == null)
            {
                $emailMsg = "（该邮箱还没注册）";
            }
            else
              $emailMsg = 'ojbk';
        }
        echo $emailMsg;
    }

      //验证登录邮箱和密码
    public function validate_login_pwd()
    {
       $table = M('Login');
       $map['email'] = $_POST['login_email'];
       $map['pwd']  = md5($_POST['login_pwd']);
       $value =  $table->where($map)->select();

        if($value == null)
            echo "ops！密码错误";
        else
          echo 'ojbk';
    }


    //登录成功跳转
    public function validate()
    {
      
      header('Content-type:text/html;charset=utf-8');
       $table = D('Login');

        $map['email'] = $_POST['login_email'];
        $map['pwd']  = md5($_POST['login_pwd']);

        // 把查询条件传入查询方法
        $value =  $table->where($map)->relation(true)->select();

        if($value == null)
            $this->error('ops！登录失败：可能原因：1、信息不匹配；2、服务器出错。');

        else{
    
             $token = session('TOKEN',md5(uniqid(mt_rand(),true)));

             session('user_name',$value[0]['name']);
             session('user_email',$value[0]['email']);

             session('type_id', $value[0]['type_id']);

             session('user_type',$value[0]['UserType']['type']);

             if(session('type_id') == 1)//学生界面
             {
                 $this->redirect('Student/index', '页面跳转中...');
                 // $this->success('操作完成','/thinkphp/index.php/Admin/Student/index',1);
             }
             elseif (session('type_id') == 2) { //教师
                $this->redirect('teacher/index', '页面跳转中...');
             }
             elseif (session('type_id') == 3) { //小编
                 $this->redirect('Editor/index', '页面跳转中...');
             }
             elseif (session('type_id') == 4) { //实验室管理员
                 $this->redirect('LabAdmin/index', '页面跳转中...');
             }
             elseif (session('type_id') == 5) {  //教学秘书
                 $this->redirect('Secretory/index', '页面跳转中...');
             }  
             else{ //系统管理员
                $this->redirect('Admin/index', '页面跳转中...');
             }


         }
       
    }


}