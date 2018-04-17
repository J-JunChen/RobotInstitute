<?php

namespace Admin\Controller;
use Think\Controller;
use Think\Model;

use Vendor\phpmailer\PHPMailer; //将phpmailer放在Vendor（第三方类库里面），然后通过命名空间加载
use Vendor\phpmailer\SMTP;


class AdminController extends Controller {

    public function __construct() //构造函数，判断是否已经登录
    {
        parent::__construct();  //继承父类构造函数
        if(session('TOKEN') == null || session('type_id') != 6)
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
        $editable_table = D('Editable');  //数据库的可编辑表
        $editable = $editable_table->relation(true)->select();
        $json_string = json_encode($editable); //将可编辑目录转化为json数据类型，再通过session传给summernote
        session('editable_session',$json_string);

        $institute_overview_table = M('InstituteOverview');  //数据库的学院介绍表
        $institute_overview = $institute_overview_table->select();
        $json_institute_overview = json_encode($institute_overview);
        session('institute_overview_session',$json_institute_overview);

        $learning_resources_table = M('LearningResources');  //数据库的学习资源表
        $learning_resources = $learning_resources_table->select();
        $json_learning_resources = json_encode($learning_resources);
        session('learning_resources_session',$json_learning_resources);

        $institute_album_table = M('InstituteAlbum');  //数据库的相册表
        $institute_album = $institute_album_table->select();
        $json_institute_album = json_encode($institute_album);
        session('institute_album_session',$json_institute_album);

       // $this->assign('editable', $editable);
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



    public function add_content()
    {

       $editable_table = D('Editable');
       $editable=$editable_table->relation(true)->select();
       $json_string = json_encode($editable); //将可编辑目录转化为json数据类型，再通过session传给summernote

        session('editable_session',$json_string);

        $this->display();
    }

    public function submit()
    {
        date_default_timezone_set('PRC');  //获取中国时区，'PRC':中华人民共和国

        $editable_title =$_POST['editable_title']; //栏目
        $editable_catalog = $_POST['editable_catalog']; //子栏目

        $data['title'] = $_POST['title']; //标题
        $data['content'] = $_POST['content']; //文章内容
        $data['date'] = time(); //时间戳

        $data['user_type'] = session('user_type');
        $data['user_name'] = session('user_name');


        $editable_catalog_table = new Model($editable_catalog);
        $editable_catalog_table->data($data)->add();

        echo "提交成功！";

    }

    public function delete_picture()
    {
        $imgSrc =$_POST['imgSrc'];
        echo $imgSrc;

        if(unlink($imgSrc))
            echo "图片删除成功！";  //php删除文件函数unlink();
        else
            echo "删除不成功！";
    }


    public function editable() //在summernote通过ajax传$editable_title回来
    {
        $catalog = null; //用来存子栏目的option

       $editable_title = $_POST['editable_title'];

        $json_string = session('editable_session');

        $editable_json = json_decode($json_string,TRUE);

         foreach ($editable_json as $key =>$value) {
        
          if($value['editable_title'] == $editable_title) //两字符串比较
          {
            foreach ($value as $key =>$value) {

                if(is_array($value)){
                    
                    foreach ($value as $key => $value) {

                        $catalog= $catalog.'<option value="'.$value['catalog_table'].'">'.$value['catalog'].'</option>';
                    }

                }
            
            }  
          }
        }

        echo $catalog; 
    }


    public function editable_content()
    {
        session('catalog', $_GET['title']);
        session('catalog_table',$_GET['content']);
        $this->display();
    }

    public function review_content() //查看内容
    {
        $catalog_table = new Model(session('catalog_table'));
        $catalog_table_whole = $catalog_table->where('id='.$_GET[id].'')->select();
        
        $this->assign('catalog_table_whole', $catalog_table_whole);
        $this->display();

    }

    public function delete_content()//删除内容
    {
        $catalog_table = new Model(session('catalog_table'));
        $catalog_table_whole = $catalog_table->where('id='.$_POST[id].'')->delete();
        echo '删除成功！';
    }

    public function modify_content() //modify_content.php
    {
        $catalog_table = new Model(session('catalog_table'));
        $catalog_table_whole = $catalog_table->where('id='.$_GET[id].'')->select();
        
        $json_string = json_encode($catalog_table_whole);

        session('json_string',$json_string);
        $this->display();
    }

    public function modify() //点击修改按钮
    {
       
        date_default_timezone_set('PRC');  //获取中国时区，'PRC':中华人民共和国

        $id = $_POST['id']; //主键
        $data['title'] = $_POST['title']; //标题
        $data['content'] = $_POST['content']; //文章内容
        $data['date'] = time(); //时间戳
        $data['user_type'] = session('user_type');
        $data['user_name'] = session('user_name');

        $catalog_table = new Model(session('catalog_table'));
        $catalog_table->where('id='.$id)->save($data);

        $msg['msg'] = '修改成功';
        $msg['catalog'] = session('catalog');
        $msg['catalog_table'] = session('catalog_table');

        $json_array = array('msg'=>$msg['msg'], 'catalog'=>$msg['catalog'], 'catalog_table'=>$msg['catalog_table']);
        $json = json_encode($json_array);

        echo $json;
    }


    public function delete_slides()  //删除幻灯片
    {
      $data = json_decode(stripslashes($_POST['data']));

      $index_table = M('Index');

      foreach($data as $d){
 
        $slides_path = $index_table->where('id='.$d)->field('slides_file')->select();
        $slides_src = $slides_path[0]['slides_file'];
        $slides_src = substr($slides_src,(strpos($slides_src,'/')+1));  //需留意，线上测试，需要两句中注释其中一句
        $slides_src = substr($slides_src,(strpos($slides_src,'/')+1));
          

        if($index_table->where('id='.$d)->delete()==1)
        {
            if(!unlink($slides_src))
                die("删除失败！"); 
        }
        else 
            die("删除失败！");
           
      }
        echo '删除成功！';
    }
    public function institute_overview() //学院概况
    {
        session('catalog', $_GET['title']);
        session('catalog_table',$_GET['content']);
        $this->display();
    }

    public function learning_resources() //学习资源
    {
        session('catalog', $_GET['title']);
        session('catalog_table',$_GET['content']);
        $this->display();
    }


     public function delete_file()  //删除文件
    {
        $id = $_POST['id'];

        $download_table = M(session('catalog_table'));

        $file_path = $download_table->where('id='.$id)->field('file_path')->select();

        $file_src = $file_path[0]['file_path'];
        $file_src = substr($file_src,(strpos($file_src,'/')+1)); //需留意，线上测试，需要两句中注释其中一句
        $file_src = substr($file_src,(strpos($file_src,'/')+1));
          

        if($download_table->where('id='.$id)->delete()==1)
        {
            if(!unlink($file_src))
                die("删除失败！"); 
        }
        else 
            die("删除失败！");
      
        echo '删除成功！';
    }

    public function get_file()//获取需要修改文件信息
    {
                
          $id = $_POST['id'];
          //use Think\Model;

          $table = new Model(session('catalog_table'));

          $data = $table->select($id);

          //var_dump($data[0]);
          echo json_encode($data[0]);
    }

    public function modify_file()  //修改文件
    {
       date_default_timezone_set('PRC');  //获取中国时区，'PRC':中华人民共和国
      
        $id = $_POST['id'];
        $data['file_title'] = $_POST['file_title']; //传入数据库
        $data['file_description']= $_POST['file_description'];
        $data['date'] = time(); //时间戳
        $data['user_type'] = session('user_type');
        $data['user_name'] = session('user_name');


        $download_table = M(session('catalog_table'));
          //$catalog_table->where('id='.$id)->save($data);
        if($download_table->where('id='.$id)->save($data))
            echo "修改成功！";
        else
            echo "修改失败！";
    }

    public function read_file()  //浏览文件
    {
      
        $id = $_POST['id'];

          $table = new Model(session('catalog_table'));

          $data = $table->select($id);

          //var_dump($data[0]);
          echo json_encode($data[0]);
    }

    public function download_file()  //下载文件
    {
      $id = $_POST['id'];

      $table = new Model(session('catalog_table'));

      $data = $table->field('file_path')->select($id);

      //file_put_contents("Tmpfile.zip", file_get_contents("http://localhost/thinkphp/Public/files/clearmin-master.zip"));

      //var_dump($data[0]);
      echo json_encode($data[0]);
    }


    // 学院相册
    public function institute_album()
    {


        session('catalog', $_GET['title']);
        session('catalog_table',$_GET['content']);
        $this->display();
    }


    public function delete_album()  //删除幻灯片
    {
      $data = json_decode(stripslashes($_POST['data']));

      $album_table = M(session('catalog_table'));

      foreach($data as $d){
 
        $album_path = $album_table->where('id='.$d)->field('album_file')->select();
        $album_src = $album_path[0]['album_file'];
        $album_src = substr($album_src,(strpos($album_src,'/')+1)); //需留意，线上测试，需要两句中注释其中一句
        $album_src = substr($album_src,(strpos($album_src,'/')+1));
          

        if($album_table->where('id='.$d)->delete()==1)
        {
            if(!unlink($album_src))
                die("删除失败！"); 
        }
        else 
            die("删除失败！");
           
      }
        echo '删除成功！';
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

//群发邮件
    public function send_all_email()
   {
                  
        $mail = new PHPMailer();

        // $mail->SMTPDebug = 1;
        // 
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

        $mail->Subject = '机器人学院群发邮件';

        $table =M('Login');
        $data = $table->field('email')->select();

            foreach ($data as $key => $value) {

             $mail->addAddress($value['email']);
        } 

          $mail->Body = "<h2>您好！当前邮件为东莞理工学院机器人学院群发邮件</h2>

            <h1><span style='color:blue;'>邮件标题：</span>".$_POST['email_title']."</h1>

            <div><span style='color:blue;'>邮件内容：</span>".$_POST['email_content']."</div>

            ";
        
          $status = $mail->send();

          //简单的判断与提示信息
          if($status) {
             echo '群发邮件成功 :)';
          }else{
             echo '群发邮件失败 :(';
          }
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