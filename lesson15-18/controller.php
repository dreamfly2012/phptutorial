<?php

$method = $_REQUEST['method'] ?? 'index';


if ($method == 'index') {
    echo $twig->render('index.html');
} elseif ($method == 'houtai') {
    $articles = $database->select('article', '*');


    echo $twig->render('houtai.html', ['articles' => $articles]);
} elseif ($method == 'login') {
    $name = $_POST['name'] ?? '';
    $password = $_POST['password'] ?? '';

    $result = $database->get('admin', ['password'], ['name' => $name]);

    if ($result['password'] == md5($password)) {
        $arr = ['code' => 0, 'msg' => '成功', 'data' => ''];
    } else {
        $arr = ['code' => -1, 'msg' => '用户名密码错误', 'data' => ''];
    }



    echo json_encode($arr);
} elseif ($method == 'add') {
    echo $twig->render('add.html');
} elseif ($method == 'doadd') {

    $title = $_REQUEST['title'];
    $content = $_REQUEST['content'];

    $database->insert('article', ['title' => $title, 'content' => $content]);

    echo "<script>window.location.href='index.php?method=houtai';</script>";
} elseif ($method == 'edit') {
    $id = $_REQUEST['id'] ?? 0;
    $article = $database->get('article', '*', ['id' => $id]);

    echo $twig->render('edit.html', ['article' => $article]);
} elseif ($method == 'doedit') {

    $title = $_REQUEST['title'];
    $content = $_REQUEST['content'];
    $id = $_REQUEST['id'];

    $database->update('article', ['title' => $title, 'content' => $content], ['id' => $id]);

    echo "<script>window.location.href='index.php?method=houtai';</script>";
} elseif ($method == 'delete') {

    $id = $_REQUEST['id'];

    $result = $database->delete('article', ['id' => $id]);

    if ($result) {
        $arr = ['code' => 0, 'msg' => '成功', 'data' => ''];
    } else {
        $arr = ['code' => -1, 'msg' => '删除失败', 'data' => ''];
    }



    echo json_encode($arr);
}
