<?php


$uf = $_FILES['Filedata'];
if(!$uf){
//    echo "no fileToUpload index";
    exit();
}


$upload_file_temp = $uf['tmp_name'];
$upload_file_name = $uf['name'];

if(!$upload_file_temp){
//    echo "上传失败";
    exit();
}
//$file_size_max = 1024*1024 * 500;// 1M限制文件上传最大容量(bytes)
//// 检查文件大小
//if ($upload_file_size > $file_size_max) {
//    exit();
//}
$store_dir = "./upload/";// 上传文件的储存位置
$accept_overwrite = 0;//是否允许覆盖相同文件
$file_path = $store_dir.$upload_file_name;
// 检查读写文件
if (file_exists($file_path) && !$accept_overwrite) {
    exit();
}

//复制文件到指定目录
if (!move_uploaded_file($upload_file_temp,$file_path)) {

    exit;
}

?>