# 第一讲-环境搭建

使用phpstudy集成开发环境，下载地址:https://www.xp.cn/

启动软件，在环境中选择安装php的版本

将php的执行目录添加到环境变量中，在命令行输入php检测配置是否成功。

## 基础知识：Html+css+js+mysql

## 背景：

php 是脚本语言，解释型语言。用来web开发。80%以上的网站都是php开发的。

 

Wordpress 使用最多的php框架，主要用来搭建个人博客。

 

## 开发工具：

Vscode ，phpstorm，sublime  

 

## 开发环境：

集成开发环境 = 服务器+语言解释器+数据库

Wamp ,phpstudy,xmapp,upwup

 本课程采用phpstudy8集成开发环境。





# 第二讲-基本语法

变量使用$a 来表示。

 

加减乘除 + - * /

 

取整intval()

 

打印变量var_dump()

 

Php文件中使用<?php ?> 来包裹php代码



# 第三讲 域名绑定  

host文件中添加域名和ip对应关系。

修改apache配置文件，添加对应虚拟域名目录。

```shell
server {
        listen        80;
        server_name  lesson3.com www.lesson3.com;
        root   "G:/myself/phptutorial/lesson3";
        location / {
            index index.php index.html error/index.html;
            error_page 400 /error/400.html;
            error_page 403 /error/403.html;
            error_page 404 /error/404.html;
            error_page 500 /error/500.html;
            error_page 501 /error/501.html;
            error_page 502 /error/502.html;
            error_page 503 /error/503.html;
            error_page 504 /error/504.html;
            error_page 505 /error/505.html;
            error_page 506 /error/506.html;
            error_page 507 /error/507.html;
            error_page 509 /error/509.html;
            error_page 510 /error/510.html;
            autoindex  off;
        }
        location ~ \.php(.*)$ {
            fastcgi_pass   127.0.0.1:9000;
            fastcgi_index  index.php;
            fastcgi_split_path_info  ^((?U).+\.php)(/?.+)$;
            fastcgi_param  SCRIPT_FILENAME  $document_root$fastcgi_script_name;
            fastcgi_param  PATH_INFO  $fastcgi_path_info;
            fastcgi_param  PATH_TRANSLATED  $document_root$fastcgi_path_info;
            include        fastcgi_params;
        }
}
```



# 第四讲-php条件控制和循环




##  条件控制if switch
```php
$a = 4;

$b = -2;

if ($b > $a) {
    echo "b 大于 a";
} elseif ($b > 0) {
    echo "b 小于 a 且 b 大于 0";
} else {
    echo "b 小于 a 且 b 不大于 0";
}



switch ($a) {
    case 1:
        echo '它是1';
        break;
    case 2:
        echo '它是2';
        break;
    case 3:
        echo '它是3';
        break;
    case 4:
        echo '它是4';
        break;
    default:
        echo "其它";
}

```
## 循环

```php
for ($i = 0; $i < 10; $i++) {
    echo $i;
    echo "<br>";
}

$i=0;
while($i<10){
    echo $i;
    echo "<br>";
    $i++;
}

$i = 0;
do {
    $i++;
    echo $i;
    echo "<br>";

} while ($i < 10);

```

# 第五讲-php的form表单处理

## 表单:一个html标签，可以同后台交互，上传信息使用的

```html
 <form action="handle.php" method="post">
        <label>姓名:</label>
        <input type="text" name="name" />
        <label>年龄</label>
        <input type="text" name="age" />

        <button type="submit">提交</button>
    </form>

```

## 如何接收表单数据

```php
$_POST

$_GET
```

# 第六讲-php函数

###### 函数：一个可以复用的代码块
- 自定义函数 
- 系统函数

```php
function add($a,$b){
    return $a + $b;
}

$stack = array("ceshi1", "ceshi2");
$stack2 = array("ceshi1", "ceshi2", "ceshi3");
#array_push($stack, "apple", "raspberry");
$arr = array_merge($stack, $stack2);

```


# 第七讲-php面向对象

###### 面向对象：一种编程思想，主要是把一切看成对象，目的是为了代码的封装，有利于代码的复用和重构。

- 封装 将属性和方法包装起来
- 继承 将父类的熟悉保留下来,并且可以有自己的属性和方法
- 多态 对同一个事件，不同对象进行不同的操作
---

- 重写
- 重载

###### 面向对象(class) = 属性+方法

```php
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

```
# 第八讲-php中的数据库操作（mysql）

## 三种数据库驱动

- ~~mysql~~
- mysqli
- pdo

## 增删改查

```php
/**
     * 查询
     */

    // $sql = "select name,age from test";

    // $stm = $pdo->query($sql);

    // $data = $stm->fetchAll();

    // print_r($data);

    /**
     * 插入
     */
    // $sql = "insert into test(name,age) values('张三',20)";

    // $result = $pdo->exec($sql);

    // print_R($result);

    /**
     * 修改
     */

    // $sql = "update test set age = 22 where id = 2";

    // $result = $pdo->exec($sql);

    // print_r($result);

    /**
     * 删除
     */
    // $sql = "delete from test where id = 2";

    // $result = $pdo->exec($sql);

    // print_r($result);

```



# 第九讲-composer的使用

## composer

Php的包管理工具，用来解决依赖加载问题。

## 安装方式

- 下载对应的可执行文件
- 使用php代码执行安装




