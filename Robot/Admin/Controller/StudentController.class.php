<?php

namespace Admin\Controller;
use Think\Controller;
use Think\Model;


class StudentController extends Controller {

    public function __construct() //构造函数，判断是否已经登录
    {
        parent::__construct();  //继承父类构造函数
        if(session('TOKEN') == null || session('type_id') != 1)
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


}