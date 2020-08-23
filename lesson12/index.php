<?php



function exception_error_handler($error,$errstr,$errfile,$errline)
{
    var_dump($errstr);
    //throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
}
set_error_handler("exception_error_handler");

//路由
try {
    eval("echo 'toto' echo 'tata'");
} catch (\Throwable $th) {
    //var_dump($th->getMessage());
    trigger_error($th->getMessage(), E_WARNING);
}

$a = isset($_REQUEST['a']) ? $_REQUEST['a'] : '';
trigger_error("Could not find file {$filename}", E_USER_ERROR);
if (empty($a)) {
    echo "index page";
} else {
    try {
        include $a . ".php";
    } catch (Exception $e) {
        var_dump($e);
        die;
    }

}
