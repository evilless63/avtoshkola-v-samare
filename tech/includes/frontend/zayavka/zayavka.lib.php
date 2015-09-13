<?php
//подключаем файл работы с БД
require $_SERVER['DOCUMENT_ROOT'].'/tech/includes/db.inc.php';
require $_SERVER['DOCUMENT_ROOT'].'/tech/includes/functions.php';

$zayavka_name = htmlspecialchars($_POST['yourname'], ENT_QUOTES);
$zayavka_mail = htmlspecialchars($_POST['yourmail'], ENT_QUOTES);
$zayavka_phone = htmlspecialchars($_POST['yourphone'], ENT_QUOTES);

 $msg_box = ""; // в этой переменной будем хранить сообщения формы
    $errors = array(); // контейнер для ошибок
    // проверяем корректность полей
    if($zayavka_name == "")    $errors[] = "Поле 'Ваше имя' не заполнено!";
    if($zayavka_mail == "")   $errors[] = "Поле 'Ваша почта' не заполнено!";
    if($zayavka_phone == "")   $errors[] = "Поле 'Ваш телефон' не заполнено!";
    
   
    // если форма без ошибок
    if(empty($errors)){ 
        $message  = "Имя пользователя: " . $zayavka_name . "<br/>";
        $message .= "Телефон пользователя: " . $zayavka_phone . "<br/>";
        $message .= "Почта пользователя: " . $zayavka_mail;
        send_mail($message); // отправим письмо
        
        $msg_box = "<span style='color: red;'>Письмо успешно отправлено</span>";
        }
    else{
        // если были ошибки, то выводим их
        $msg_box = "";
        foreach($errors as $one_error){
            $msg_box .= "<span style='color: red;'>$one_error</span><br/>";
        }
    }
    
    echo json_encode(array(
        'result' => $msg_box
    ));    
