<?php
namespace Home\Controller;

use Think\Controller;

//引用ThinkPHP/Library/Model.class.php：数据库操作的基类
use Think\Model;

use Vendor\phpmailer\PHPMailer; //将phpmailer放在Vendor（第三方类库里面），然后通过命名空间加载
use Vendor\phpmailer\SMTP;

class IndexController extends Controller {


	public function index(){

		    session('[start]'); // 启动session


        $institute_overview_table = M('InstituteOverview');  //数据库的学院概况表
        $institute_overview = $institute_overview_table->select();
        $json_institute_overview = json_encode($institute_overview);
        session('institute_overview_session',$json_institute_overview);

        $teaching_work_table = M('TeachingWork');  //数据库的教学工作表
        $teaching_work = $teaching_work_table->select();
        $json_teaching_work = json_encode($teaching_work);
        session('teaching_work_session',$json_teaching_work);

        $enroll_student_table = M('EnrollStudent');  //数据库的学院招生表
        $enroll_student = $enroll_student_table->select();
        $json_enroll_student = json_encode($enroll_student);
        session('enroll_student_session',$json_enroll_student);

        $institute_show_table = M('InstituteShow');  //数据库的学院风采表
        $institute_show = $institute_show_table->select();
        $json_institute_show = json_encode($institute_show);
        session('institute_show_session',$json_institute_show);


        $learning_resources_table = M('LearningResources');  //数据库的学习资源表
        $learning_resources = $learning_resources_table->select();
        $json_learning_resources = json_encode($learning_resources);
        session('learning_resources_session',$json_learning_resources);


       self::institute_news_modules(); //学院动态模块

        $this->display();
	}

     public function institute_overview()//学院介绍
    {
        session('catalog', $_GET['title']);
        session('catalog_table',$_GET['content']);
        $this->display();
    }

   
    public function teaching_work()  //教学工作
    {
        session('catalog', $_GET['title']);
        session('catalog_table',$_GET['content']);
        $this->display();
    }


    public function enroll_student() //学院招生
    {
       session('catalog', $_GET['title']);
        session('catalog_table',$_GET['content']);
        $this->display();
    }

    public function institute_show() //学院风采
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


    public function institute_news_modules()  //学院动态模块
    {
       $editable_table = D('Editable');  //数据库的可编辑表
        $editable = $editable_table->relation(true)->select();
      
        $institute_news_list = array(); //总学院动态列表


foreach ($editable as $key => $value) {

  $institute_news_title = array();  //学院动态的各第一标题

  $institute_news_title += $institute_news_title + array('editable_title' => $value['editable_title']) + array('editable_table' => $value['editable_table']);
   // var_dump($institute_news_title);

  foreach ($value as $key => $value) {

      foreach ($value as $key => $value) {

          $institute_news_catalog = array();  //学院动态的各第二标题

          $institute_news_catalog += $institute_news_catalog + array('catalog' => $value['catalog']) + array('catalog_table' => $value['catalog_table']);


          // var_dump($institute_news_catalog);

              // var_dump($value);
              // 
          $table = M($value['catalog_table']);
          $data = $table->order('date desc')->select();

            foreach ($data as $key => $value) {

                $institute_news_content = array();  //学院动态的内容id 和 date

                $institute_news_content += $institute_news_content + array('title' => $value['title']) +array('id' => $value['id']) + array('date' => $value['date']) + array('user_type' => $value['user_type']);

                  $institute_news = array(); //各个学院动态列表
                  $institute_news += $institute_news_title + $institute_news_catalog + $institute_news_content;
                  array_push($institute_news_list, $institute_news); //添加
            }
    }
  }

}

        // 根据时间排序规则
         $sort = array(
                'direction' => 'SORT_DESC',
                'field' => 'date',
          );

         $arrSort = array();

         foreach ($institute_news_list as $uniqid => $row) {
             foreach ($row as $key => $value) {
                $arrSort[$key][$uniqid] = $value;
             }
         }

         if($sort['direction']){
            array_multisort($arrSort[$sort['field']], constant($sort['direction']), $institute_news_list);
         }

          // var_dump($institute_news_list);

        $json_institute_news_list = json_encode($institute_news_list);
        session('institute_news_list_session',$json_institute_news_list);
    }


    public function feedback()  //意见反馈
    {
                  
          $data['name'] = $_POST['feedback_name']; //姓名
          $data['email'] = $_POST['feedback_email']; //email
          $data['suggestion'] = $_POST['feedback_infor']; //意见

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
          $mail->FromName = $data['name'] ;
          // $mail->FromName = "机器人学院网站管理员：JunStitch";

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
          $mail->addAddress('junstitch.com@gmail.com');

          $mail->Subject = '机器人学院信息反馈';
          //添加邮件正文 上方将isHTML设置成了true，则可以是完整的html字符串 如：使用file_get_contents函数读取本地的html文件
          $mail->Body = "<h1>我的邮箱：".$data['email']."</h1><h2>反馈信息：".$data['suggestion']."</h2>";
      
           
          //发送命令 返回布尔值 
          //PS：经过测试，要是收件人不存在，若不出现错误依然返回true 也就是说在发送之前 自己需要些方法实现检测该邮箱是否真实有效
          $status = $mail->send();
           
          //简单的判断与提示信息
          if($status) {
             echo '反馈信息发送成功 :)';
          }else{
             echo '反馈信息发送失败 :(';
          }
    }


    public function login_admin()
    {
      $this->redirect('Admin/Index/login','页面跳转中');
    }

	


}

?>