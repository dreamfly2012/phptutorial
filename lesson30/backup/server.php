<?php


include "Math.class.php";
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

        var_dump($errno);

        var_dump($errstr);


        if ($socket) {
            while ($conn = stream_socket_accept($socket, -1)) {
                //fwrite($conn, 'The local time is ' . date('n/j/Y g:i a') . "\n");
                //这里为了简单，我们一次性读取
                $buf = fread($conn, 2048);
                //解析客户端发送过来的协议
                $info = json_decode($buf, true);
                $class = $info['class'];
                $method = $info['method'];
                $params = $info['params'];

                if ($class && $method) {
                    echo $params[0];
                    echo $params[1];
                    $obj = new $class();
                    $data = $obj->$method((int)$params[0], (int)$params[1]);
                    fwrite($conn, $data);
                } else {
                    fwrite($conn, "方法不存在");
                }
                //实例化类，并调用客户端指定的方法
            }
            fclose($socket);
        } else {
            throw new Exception('创建socket失败');
        }
    }
}


$server = new RPCServer("127.0.0.1", 80);

$server->serve();
