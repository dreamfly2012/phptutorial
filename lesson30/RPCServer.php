<?php

class RPCServer
{
    private $ip;
    private $port;

    public function __construct($ip, $port)
    {
        $this->ip = $ip;
        $this->port = $port;
    }

    public function serve()
    {
        $socket = stream_socket_server("tcp://{$this->ip}:{$this->port}", $errno, $errstr);

        if ($socket) {
            echo "socket 创建成功";
            while ($conn = stream_socket_accept($socket, -1)) {

                $message = fread($conn, 2048);

                $message = json_decode($message, true);

                $class = $message['class'];
                $method = $message['method'];
                $params = $message['params'];

                include_once "$class.class.php";

                $class = new $class();
                $data  = $class->$method($params[0], $params[1]);

                unset($class);

                #json {"class":"Math","method":"add","params":[2,3]}

                var_dump($message);


                fwrite($conn, $data);
            }
        } else {
            throw new Exception("socket 创建失败,错误号:" . $errno . ",错误信息:" . $errstr);
        }
    }
}


$server = new RPCServer('127.0.0.1', 8889);

$server->serve();
