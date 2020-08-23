<?php




$name = $_POST['name'] ?? '';
$password = $_POST['password'] ?? '';

if($name=='admin'&&$password=='123'){
    $arr = ['code'=>0,'msg'=>'成功','data'=>''];
}else{
    $arr = ['code'=>-1,'msg'=>'用户名密码错误','data'=>''];
}



echo json_encode($arr);