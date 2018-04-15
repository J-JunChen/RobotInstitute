<?php 
  	use Think\Model;

     date_default_timezone_set('PRC');  //获取中国时区，'PRC':中华人民共和国

    $slides_path = 'Public/images/IndexSlides/';//幻灯片路径
    $slidesPath = '__PUBLIC__/images/IndexSlides/';

    if(!file_exists($slides_path)) //如果幻影灯文件夹不存在，则创建一个
        mkdir($slides_path);  

    $filesType = substr($_FILES['slides_file']['name'], strripos($_FILES['slides_file']['name'],".")); //找出文件格式

    $filesName = md5(time()).$filesType;  //文件名数组
    $filesTmpName = $_FILES['slides_file']['tmp_name'];  //临时文件名数组

    if(!file_exists($slides_path.$filesName)){
        move_uploaded_file($filesTmpName, $slides_path.$filesName);
    }
    $data['slides_file'] = $slidesPath.$filesName; 
    $data['slides_title'] = $_POST['slides_title']; //传入数据库
    // $data['slides_description']= $_POST['slides_description'];
    $data['date'] = time(); //时间戳

    $index_table = M('Index');
    if($index_table->data($data)->add())
        echo "上传成功！";
    else
        echo "上传失败，请重新上传";
?>