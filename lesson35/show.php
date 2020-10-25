<?php

if(isset($_GET['a'])){
    include $_GET['a'] . ".php";
}else{
    include "default.php";
}