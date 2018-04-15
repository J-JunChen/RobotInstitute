<?php
    date_default_timezone_set('PRC');  //获取中国时区，'PRC':中华人民共和国


    $picture_path ='Public/images/Editable/'.date("Ymd",time()).'/';
    $picturePath = '__PUBLIC__/images/Editable/'.date("Ymd",time()).'/';

    if(!file_exists($picture_path)) //如果文件夹不存在，则创建一个
        mkdir($picture_path);  

    $filesType = substr($_FILES['file']['name'], strripos($_FILES['file']['name'],"."));
    $filesName = md5(time()).$filesType;  //文件名数组
    $filesTmpName = $_FILES['file']['tmp_name'];  //临时文件名数组


    if(!file_exists($picture_path.$filesName)){
        move_uploaded_file($filesTmpName, $picture_path.$filesName);
    }
    
    
    $filePath = $picturePath.$filesName; //文件路径

    echo $filePath;
?>
