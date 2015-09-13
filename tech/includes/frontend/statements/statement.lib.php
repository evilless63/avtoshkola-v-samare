<?php
//подключаем файл работы с БД
require $_SERVER['DOCUMENT_ROOT'].'/tech/includes/db.inc.php';
require $_SERVER['DOCUMENT_ROOT'].'/tech/includes/functions.php';

$statement_name = htmlspecialchars($_POST['name_statement'], ENT_QUOTES);
$statement_phone = htmlspecialchars($_POST['phone_statement'], ENT_QUOTES);
$statement_text = htmlspecialchars($_POST['text_statement'], ENT_QUOTES);
$statement_date = date("Y-m-d");

 $msg_box = ""; // в этой переменной будем хранить сообщения формы
    $errors = array(); // контейнер для ошибок
    // проверяем корректность полей
    if($statement_name == "")    $errors[] = "Поле 'Ваше имя' не заполнено!";
    if($statement_phone == "")   $errors[] = "Поле 'Ваш телефон' не заполнено!";
    if($statement_text == "")   $errors[] = "Поле 'Заголовок письма' не заполнено!";
    
   
    // если форма без ошибок
    if(empty($errors)){ 
        $message  = "Имя пользователя: " . $statement_name . "<br/>";
        $message .= "Телефон пользователя: " . $statement_phone . "<br/>";
        $message .= "Текст письма: " . $statement_text;
        send_mail($message); // отправим письмо
        
        $answer = add_statement_frontend($pdo, $statement_name, $statement_phone, $statement_text, $statement_date);
        $msg_box = "<span style='color: #fff;'>Письмо успешно отправлено</span>";
        }
    else{
        // если были ошибки, то выводим их
        $msg_box = "";
        foreach($errors as $one_error){
            $msg_box .= "<span style='color: #fff;'>$one_error</span><br/>";
        }
    }
    
    echo json_encode(array(
        'result' => $msg_box
    ));    
