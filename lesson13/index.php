<?php


function myhandler($a1,$a2,$a3,$a4){
    var_dump($a1);
    var_dump($a2);
    var_dump($a3);
    var_dump($a4);
}

set_error_handler('myhandler');

#set_exception_handler('myexceptionhandler');

class Math
{
    private $s1;
    private $s2;
    public function __construct($a, $b)
    {
        $this->s1 = $a;
        $this->s2 = $b;
    }

    public function divde()
    {
        $result = "";
        if($this->b==0){
            trigger_error("除数不能为0", E_USER_NOTICE);
        }
        return $result;
    }
}



trigger_error("发生错误了");

$math = new Math(9,0);

$result = $math->divde();

print_r($result);


