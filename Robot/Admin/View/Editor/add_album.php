<?php 
  	use Think\Model;
     $album_table = M(session('catalog_table'));

     date_default_timezone_set('PRC');  //获取中国时区，'PRC':中华人民共和国

    $album_path = 'Public/images/'.session('catalog_table').'/';//相册路径
    $albumPath = '__PUBLIC__/images/'.session('catalog_table').'/';

    if(!file_exists($album_path)) //如果幻影灯文件夹不存在，则创建一个
        mkdir($album_path);  

    $album_length = $_POST['album_length'];

    $flag = false;

    for($i = 0; $i < $album_length; $i++){

        $filesType = substr($_FILES['album_file'.$i]['name'], strripos($_FILES['album_file'.$i]['name'],"."));

        $filesName = md5(time()+$i).$filesType;  //文件名数组，留意+$i的重要性，否则time()是同一个时间戳
        $filesTmpName = $_FILES['album_file'.$i]['tmp_name'];  //临时文件名数组

        if(!file_exists($album_path.$filesName)){
            move_uploaded_file($filesTmpName, $album_path.$filesName);
        }
        $data['album_file'] = $albumPath.$filesName; 
        $data['album_description']= $_POST['album_description'];
        $data['date'] = time(); //时间戳
        $data['user_type'] = session('user_type');
        $data['user_name'] = session('user_name');
       
        if($album_table->data($data)->add())
            $flag = true;
        else
            $flag = false;
    }

    if($flag = ture)
        echo "上传成功！";
    else
        echo "上传失败，请重新上传";
?>