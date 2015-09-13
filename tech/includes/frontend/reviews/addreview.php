<?php
//подключаем файл работы с БД
require $_SERVER['DOCUMENT_ROOT'].'/tech/includes/db.inc.php';
require $_SERVER['DOCUMENT_ROOT'].'/tech/includes/functions.php';



$review_fio  = htmlspecialchars($_POST['vote_fio'], ENT_QUOTES);
$review_email = htmlspecialchars($_POST['vote_mail'], ENT_QUOTES);
$review_text = htmlspecialchars($_POST['vote_vote'], ENT_QUOTES);
$review_mark = htmlspecialchars($_POST['vote_mark'], ENT_QUOTES);
setlocale(LC_ALL, 'ru_RU.UTF-8');
$review_date = strftime("%d %B", mktime(date(d-m-Y)));
    $msg_box = ""; // в этой переменной будем хранить сообщения формы
    $errors = array(); // контейнер для ошибок
    // проверяем корректность полей
    if($review_fio == "")    $errors[] = "Поле 'Ваше имя' не заполнено!";
    if($review_email == "")   $errors[] = "Поле 'Ваш e-mail' не заполнено!";
    if($review_text == "")   $errors[] = "Поле 'Ваш отзыв' не заполнено!";
    if($review_mark == "")   $errors[] = "Поле 'Ваша оценка' не заполнено!";
    
    function emailValidation($review_email){
    if($review_email) // Если переменная email не пуста
        {
            if(preg_match("/[0-9a-z_\.\-]+@[0-9a-z_\.\-]+\.[a-z]{2,4}/i", $review_email)) // если есть совпадение выводим сообщение
            {
                return true;
            }
            else // если совпадений нет, выводим сообщение об ошибке
            {
                return false;
            }
        }       
        else // Если переменная email пуста
        {
            return false;
        }
    }
    if((emailValidation($review_email))==false) $errors[] = "Введите корректный E-mail"; // Если в переменной $email действительно электронный адрес, 
   
    // если форма без ошибок
    if(empty($errors)){ 
        $answer = add_reviews_user($pdo, $review_fio, $review_email, $review_text, $review_mark, $review_date);
        $msg_box = "<span style='color: red;'>".$answer."</span>";
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
    



