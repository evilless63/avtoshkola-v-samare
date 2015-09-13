<?php
session_start($_SESSION['user_id']);

if(($_GET['logout']) == true){
    unset($_SESSION['user_id']);
    die(header('Location: '.$_SERVER['PHP_SELF']));
}
//подключаем файл работы с БД
require $_SERVER['DOCUMENT_ROOT']."/tech/includes/db.inc.php";
require $_SERVER['DOCUMENT_ROOT']."/tech/includes/functions.php";
// require $_SERVER['DOCUMENT_ROOT']."/system/includes/config.php";


//соединение с базой данных
// db(HOST,USER,PASS,DB);

if(!empty($_POST['auth_name']) || !empty($_POST['auth_pass']) ){

    $user = $_POST['auth_name'];
    $password = $_POST['auth_pass'];
    $query = "SELECT id FROM user WHERE user='$user' and password=md5('$password')";
    $data = $pdo->query($query);

    foreach($data as $row){
        $id = $row['id'];
    }

    if($id == 1){
        $_SESSION['user_id'] = 1;

    }

    else{
        $output = "Введены неверные данные";
        include $_SERVER['DOCUMENT_ROOT']."/tech/includes/error.html.php";
    }

}

elseif(!isset($_SESSION['user_id'])){
    $output = "Введите, пожалуйста, Логин И Пароль администратора";
    include $_SERVER['DOCUMENT_ROOT']."/tech/includes/error.html.php";
}

if( ($_SESSION['user_id']) == true) include $_SERVER['DOCUMENT_ROOT']."/admin/index.html.php";

else include $_SERVER['DOCUMENT_ROOT']."/admin/auth.php";