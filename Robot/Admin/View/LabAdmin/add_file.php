<?php 
  	use Think\Model;
     date_default_timezone_set('PRC');  //获取中国时区，'PRC':中华人民共和国
    $file_path = 'Public/files/'.date("Ymd",time()).'/';//文件路径
    $filePath = '__PUBLIC__/files/'.date("Ymd",time()).'/';

    if(!file_exists($file_path)) //如果文件文件夹不存在，则创建一个
        mkdir($file_path);  

    $filesType = substr($_FILES['file_file']['name'], strripos($_FILES['file_file']['name'],".")); //找出文件格式

    $filesName = md5(time()).$filesType;  //文件名数组
    $filesTmpName = $_FILES['file_file']['tmp_name'];  //临时文件名数组

    if(!file_exists($file_path.$filesName)){
        move_uploaded_file($filesTmpName, $file_path.$filesName);
    }

    $data['file_path'] = $filePath.$filesName;
    $data['file_name'] = $filesName; //文件路径
    $data['file_title'] = $_POST['file_title']; //传入数据库
    $data['file_description']= $_POST['file_description'];
    $data['file_type'] = $filesType;
    $data['date'] = time(); //时间戳
    $data['user_type'] = session('user_type');
    $data['user_name'] = session('user_name');

    $download_table = M(session('catalog_table'));
    if($download_table->data($data)->add())
        echo "上传成功！";
    else
        echo "上传失败，请重新上传";
?>