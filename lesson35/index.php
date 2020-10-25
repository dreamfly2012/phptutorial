<?php

if(isset($_FILES['file'])){
   
  
    //$fileinfo = pathinfo($_FILES['file']['tmp_name']);

    //var_dump($fileinfo);
    //date('Y-m-d-h-i-s').uniqid() . '.' . $extension;
    // explode('.', $_FILES['file']['name'])
    $target_file = $_FILES['file']['name'];

    var_dump($target_file);
   
    move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
}