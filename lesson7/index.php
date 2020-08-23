<?php

class Car
{
    /**
     * 属性
     *
     * @var string
     */
    public $tyre = "";
    public $door = "";

    public function drive()
    {
        echo "汽车上路了";
    }

    public function show()
    {
        echo "我有哪些物件:";
        echo $this->tyre . ",";
        echo $this->door;
    }
}

class Bus extends Car
{
    public $motor = "";

    public function showMotor()
    {
        echo $this->motor;
    }

    public function drive()
    {
        $args = func_get_args();
        if (count($args) == 0) {
            echo "没有参数的方法";
        } elseif (count($args) == 1) {
            echo "传的参数是" . $args[0];
        } elseif (count($args) == 2) {
            echo "传的参数是" . $args[0] . $args[1];
        } else {
            echo "参数非法";
        }
        print_r($args);
        echo "公交汽车上路了";
    }
}

$bus = new Bus();
$bus->door = "2个车门";
$bus->tyre = "4个轮胎";
$bus->motor = "1个机箱";
// $bus->show();

$bus->drive("bbb", "sdss", "sss");
//$bus->showMotor();

// $car = new Car();

// $car->tyre = "4个轮子";
// $car->door = "4个车门";
// $car->show();
// $car->drive();
