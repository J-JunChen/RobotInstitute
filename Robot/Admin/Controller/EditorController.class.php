<?php

namespace Admin\Controller;
use Think\Controller;
use Think\Model;


class EditorController extends Controller {

    public function __construct() //构造函数，判断是否已经登录
    {
        parent::__construct();  //继承父类构造函数
        if(session('TOKEN') == null || session('type_id') != 3)
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
       $editable_table = D('Editable');  //数据库的可编辑表
       $editable = $editable_table->relation(true)->select();
       $json_string = json_encode($editable); //将可编辑目录转化为json数据类型，再通过session传给summernote

        session('editable_session',$json_string);

        $this->display();
        // var_dump($editable);
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

        echo"提交成功！";

    }

    public function delete_picture()
    {
        $imgSrc =$_POST['imgSrc'];
        //echo $imgSrc;

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




}