<?php

namespace Admin\Controller;
use Think\Controller;
use Think\Model;

use Vendor\phpmailer\PHPMailer; //将phpmailer放在Vendor（第三方类库里面），然后通过命名空间加载
use Vendor\phpmailer\SMTP;

class HelperController extends Controller {

    public function __construct() //构造函数，判断是否已经登录
    {
        parent::__construct();  //继承父类构造函数
        if(session('TOKEN') == null || session('type_id') != 7)
            $this->redirect('Index/login','Please Login in');
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


    public function user_information()
    {
        $this->display();
    }

    //获取用户的注册信息
    public function get_user_information()
    {

        $map['email'] = $_POST['email'];

        $table = M('Login');

        $infor_data = $table->where($map)->field('email,name,pwd,type_id',true)->select();
         // var_dump($infor_data);

        $json_array = $infor_data[0];

        $json = json_encode($json_array);
        echo $json;
        // var_dump($json_array);

    }

// 更新用户信息
    public function save_information()
    {
        $map['id'] = $_POST['id'];
        $data['long_no'] = $_POST['long_no'];
        $data['short_no'] = $_POST['short_no'];
        $data['wechat'] = $_POST['wechat'];
        $data['qq'] = $_POST['qq'];

        $table = M('Login');
        if($table->where($map)->save($data) != null)
            echo "更新信息成功！";
        else
            echo "抱歉！更新失败，请刷新！";

        // var_dump($data);

    }

// 验证旧密码
    public function validate_old_pwd()
    {
        $map['id']  = $_POST['id'];
        $map['pwd'] = md5($_POST['pwd']);

        $table = M('Login');

        if($table->where($map)->select() == null)
            echo "ops！密码错误";
        else
            echo 'ojbk';

    }

// 重置密码事件
    public function reset_pwd()
    {
        $table = M('Login');

        $map['id'] = $_POST['id'];  //注册邮箱
        $data['pwd'] = md5($_POST['new_pwd']);

        if($table->where($map)->field('pwd')->save($data) != null)
            echo '恭喜您！重置密码成功！';
        else
            echo "ops！重置密码失败！新密码和旧密码可能相同了。";
           
    }

     // 删除临时注册用户
    public function delete_temperory()
    {
        $map['id'] = $_POST['id'];

        $temperory_table = M('Temporary');

        $temperory_data = $temperory_table->where($map)->field('name,email')->select();

        $data = $temperory_data[0];

        if($temperory_table ->where($map)->delete() != null)
        {
            echo "删除成功！";

              $message = "<h1>".$data['name'] ."，您好！这是东莞理工学院机器人学院信息审核结果。</h1>

            <h2 style = 'color:blue;'>很遗憾！你没有通过系统管理员的信息审核流程</h2>

            <h2>抱歉，让您久等了,不妨到官网“无账号登录”试试看 <a href = 'www.robotacademy.top'>www.robotacademy.top</a></h2>
            ";

            $this->send_login_message($data['email'],$message);  //添加用户成功，将发邮件通知
        }
        else
            echo "抱歉！删除失败！";

    }

     //添加用户
    public function add_temperory()
    {
        $map['id'] = $_POST['id'];
        $type_id = $_POST['type_id'];

        $temperory_table = M('Temporary');
        $login_table = M('Login');

        $temperory_data = $temperory_table->where($map)->field('id', true)->select();

        $data = $temperory_data[0] + array('type_id'=>$type_id);

         // var_dump($data);

         if($login_table->data($data)->add() !=null)
         { 
            if($temperory_table->where($map)->delete() !=null)
               echo "添加成功！";
            else
                echo "添加成功,同时注册用户表出现问题";


         $message = "<h1>".$data['name'] ."，您好！这是东莞理工学院机器人学院信息审核结果。</h1>

            <h2>恭喜您！你已通过了系统管理员的信息审核流程，成为<span style = 'color:red'>第".$login_table->count()."个</span>正式登录用户</h2>

            <h2>抱歉，让您久等了，赶紧到官网登录试试看 <a href = 'www.robotacademy.top'>www.robotacademy.top</a></h2>
            ";


            $this->send_login_message($data['email'],$message);  //添加用户成功，将发邮件通知

         }
           
        else
            echo "抱歉，添加失败!";
    }

    //添加用户是否通过审核, 将通过邮件给用户反馈信息
    public function send_login_message($email,$message)
    {
        $mail = new PHPMailer();
         
        // $mail->SMTPDebug = 1;

        $mail->isSMTP();
        $mail->SMTPAuth=true;
        
        $mail->Host = C('MAIL_Host');
        $mail->SMTPSecure = C('MAIL_SMTPSecure');
        $mail->Port = C('MAIL_Port');
        $mail->CharSet = C('MAIL_CharSet');
        $mail->FromName = '机器人学院网站管理员：JunStitch' ;
        $mail->Username =C('MAIL_Username');
        $mail->Password = C('MAIL_Password');
        $mail->From = C('MAIL_From');
        $mail->isHTML(true);
        $mail->Subject = '机器人学院对注册用户审核邮件';

        $mail->addAddress($email);

        $mail->Body = $message;

        $status = $mail->send();

        //简单的判断与提示信息
        if($status) {
         echo '审核邮件发送成功 :)';
        }else{
         echo '审核邮件发送失败 :(';
        }
    }


}