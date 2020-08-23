<?php

$dbs = "mysql";
$host = "127.0.0.1";
$dbname = "test";
$user = "root";
$password = "root";

$dsn = "$dbs:host=$host;dbname=$dbname";

try {
    $pdo = new PDO($dsn, $user, $password);

    /**
     * 查询
     */

    $sql = "select name,age from test";

    $stm = $pdo->query($sql);

    $data = $stm->fetchAll();

    print_r($data);

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

} catch (Exception $e) {
    print_r($e->getMessage());
}
