<?php
$server_name = "http://avtoshkola-v-samare.ru/";

/*
*Функции админа==========================================================================================================
*/
/*
*Работа с акциями======================================================================================================
*/

//Акции

function add_action_admin($pdo, $action_title, $action_text, $uploadfile, $action_date){
	    $answer = "";
    $query = "INSERT INTO actions (title,text,image, date) VALUES
        ('$action_title','$action_text','$uploadfile', '$action_date')";


try{
    $pdo->query($query);
    $answer = "Новая акция добавлена";
}
catch (PDOException $e) {
    $answer = "Не удалось выполнить запись акции";
}

finally {
    return $answer;
}

}

function get_all_actions_admin($pdo){
    $answer="";
    $query = "SELECT * FROM actions ORDER BY action_id DESC";
    try{
        $dataSet = $pdo->query($query);
        foreach($dataSet as $row){
            $answer[] = array('action_id' => $row['action_id'], 'title' => $row['title'], 'text' => $row['text'], 'image' => $row['image'],
                'date' => $row['date']);
        }
        //если мы не считали никаких данных из БД
        if(!$answer) $answer = "Акций нет";
    }
    catch (PDOException $e) {
        $answer = "Не удалось получить акции";
    }

    finally{
        return $answer;
    }
}

function get_action_one_admin($pdo, $action_id){
	    $answer="";
    $query = "SELECT * FROM actions WHERE action_id='$action_id'";
    try{
        $dataSet = $pdo->query($query);
        foreach($dataSet as $row){
            $answer[] = array('action_id' => $row['id'], 'title' => $row['title'], 'text' => $row['text'], 'image' => $row['image'],
                'date' => $row['date']);
        }
        //если мы не считали никаких данных из БД
        if(!$answer) $answer = "Акция не найдена";
    }
    catch (PDOException $e) {
        $answer = "Не удалось получить акцию";
    }

    finally{
        return $answer;
    }
}

function delete_action_admin($pdo, $action_id){
    $answer = "";
    $query = "DELETE FROM actions WHERE action_id='$action_id'";


    try{
        $pdo->query($query);
        $answer = "Акция успешно удалена";
    }
    catch (PDOException $e) {
        $answer = "Не удалось выполнить удаление акции";
    }

    finally {
        return $answer;
    }
}

function update_action_admin($pdo, $action_title_edit, $action_text_edit, $uploadfile, $action_date_edit, $action_id_edit){
    $answer = "";
    $query = "UPDATE news SET title='$action_title_edit', text='$action_text_edit', image='$uploadfile', date='$action_date_edit'
                    WHERE news_id='$action_id_edit'";
    try{
        $pdo->query($query);
        $answer = "Акция успешно отредактированна";
    }
    catch (PDOException $e) {
        $answer = "Не удалось отредактировать акцию";
    }

    finally {
        return $answer;
    }
}

/*
*Работа с новостями======================================================================================================
*/

//Новости

function add_news_admin($pdo, $news_title, $news_text, $uploadfile, $news_date){
	    $answer = "";
    $query = "INSERT INTO news (title,text,image, date) VALUES
        ('$news_title','$news_text','$uploadfile', '$news_date')";


try{
    $pdo->query($query);
    $answer = "Новая новость добавлена";
}
catch (PDOException $e) {
    $answer = "Не удалось выполнить запись новости";
}

finally {
    return $answer;
}

}

function get_all_news_admin($pdo){
    $answer="";
    $query = "SELECT * FROM news ORDER BY news_id DESC";
    try{
        $dataSet = $pdo->query($query);
        foreach($dataSet as $row){
            $answer[] = array('news_id' => $row['news_id'], 'title' => $row['title'], 'text' => $row['text'], 'image' => $row['image'],
                'date' => $row['date']);
        }
        //если мы не считали никаких данных из БД
        if(!$answer) $answer = "Новостей нет";
    }
    catch (PDOException $e) {
        $answer = "Не удалось получить новости";
    }

    finally{
        return $answer;
    }
}

function get_news_one_admin($pdo, $news_id){
	    $answer="";
    $query = "SELECT * FROM news WHERE news_id='$news_id'";
    try{
        $dataSet = $pdo->query($query);
        foreach($dataSet as $row){
            $answer[] = array('news_id' => $row['id'], 'title' => $row['title'], 'text' => $row['text'], 'image' => $row['image'],
                'date' => $row['date']);
        }
        //если мы не считали никаких данных из БД
        if(!$answer) $answer = "Новость не найдена";
    }
    catch (PDOException $e) {
        $answer = "Не удалось получить новость";
    }

    finally{
        return $answer;
    }
}

function delete_news_admin($pdo, $news_id){
    $answer = "";
    $query = "DELETE FROM news WHERE news_id='$news_id'";


    try{
        $pdo->query($query);
        $answer = "Новость успешно удалена";
    }
    catch (PDOException $e) {
        $answer = "Не удалось выполнить удаление новости";
    }

    finally {
        return $answer;
    }
}

function update_news_admin($pdo, $news_title_edit, $news_text_edit, $uploadfile, $news_date_edit, $news_id_edit){
    $answer = "";
    $query = "UPDATE news SET title='$news_title_edit', text='$news_text_edit', image='$uploadfile', date='$news_date_edit'
                    WHERE news_id='$news_id_edit'";
    try{
        $pdo->query($query);
        $answer = "Новость успешно отредактированна";
    }
    catch (PDOException $e) {
        $answer = "Не удалось отредактировать новость";
    }

    finally {
        return $answer;
    }
}

//Обсуждение

function get_discussion_admin ($pdo) {
		    $answer="";
    $query = "SELECT * FROM news INNER JOIN reviews ON news.news_id=reviews.news_id_reviews  WHERE news.news_id='$news_id'";
    try{
        $dataSet = $pdo->query($query);
        foreach($dataSet as $row){
            $answer[] = array('news_id_reviews' => $row['reviews_id'], 'username' => $row['username'], 'text' => $row['text'],
                'date' => $row['date'],);
        }
        //если мы не считали никаких данных из БД
        if(!$answer) $answer = "Нет обсуждений";
    }
    catch (PDOException $e) {
        $answer = "Не удалось получить обсуждения";
    }

    finally{
        return $answer;
    }
}

function delete_discussion_ticket_admin ($pdo, $ticket_number){
	$answer = "";
    $query = "DELETE FROM reviews WHERE news_id_reviews='$ticket_number'";


    try{
        $pdo->query($query);
        $answer = "Тикет успешно удален";
    }
    catch (PDOException $e) {
        $answer = "Не удалось выполнить удаление тикета";
    }

    finally {
        return $answer;
    }
}



/*
* Работа с фотогаллереей=================================================================================================
*/

function add_photos_admin($pdo, $uploadfile, $photo_description){
	$answer = "";
    $query = "INSERT INTO photogallery (image,title) VALUES
        ('$uploadfile','$photo_description')";


try{
    $pdo->query($query);
    $answer = "Фотография(и) добавлены";
}
catch (PDOException $e) {
    $answer = "Не удалось выполнить запись фотографии(й)";
}

finally {
    return $answer;
}
}

function get_all_photos_admin($pdo){
    $answer="";
    $query = "SELECT * FROM photogallery ORDER BY image_id DESC";
    try{
        $dataSet = $pdo->query($query);
        foreach($dataSet as $row){
            $answer[] = array('image_id' => $row['image_id'], 'image' => $row['image'], 'title' => $row['description']);
        }
        //если мы не считали никаких данных из БД
        if(!$answer) $answer = "фотографий нет";
    }
    catch (PDOException $e) {
        $answer = "Не удалось получить фотографии";
    }

    finally{
        return $answer;
    }
}

function get_one_photo_admin($pdo, $photo_id){
	    $answer="";
    $query = "SELECT * FROM photogallery WHERE image_id='$photo_id'";
    try{
        $dataSet = $pdo->query($query);
        foreach($dataSet as $row){
            $answer[] = array('image_id' => $row['image_id'], 'image' => $row['image'], 'title' => $row['description']);
        }
        //если мы не считали никаких данных из БД
        if(!$answer) $answer = "фотография не найдена";
    }
    catch (PDOException $e) {
        $answer = "Не удалось получить фотографии";
    }

    finally{
        return $answer;
    }
}

function delete_photos_admin($pdo, $photo_id){
	$answer = "";
    $query = "DELETE FROM photogallery WHERE image_id='$photo_id'";


    try{
        $pdo->query($query);
        $answer = "Фотография успешно удалена";
    }
    catch (PDOException $e) {
        $answer = "Не удалось выполнить удаление фотографии";
    }

    finally {
        return $answer;
    }
}

function edit_photo_id_admin($pdo, $photo_id_edit) {
	$answer = "";
    $query = "UPDATE photogallery SET title='$photo_description_edit', image='$uploadfile'
                    WHERE image_id='$photo_id_edit'";
    try{
        $pdo->query($query);
        $answer = "Фотография успешно отредактированна";
    }
    catch (PDOException $e) {
        $answer = "Не удалось отредактировать фотографию";
    }

    finally {
        return $answer;
    }
}
/*
*ОТЗЫВЫ АДМИНКА _________________________________________________________________________________________________________
*/

/*ПОЛУЧЕНИЕ НЕМОДЕРИРОВАННЫХ ОТЗЫВОВ*/
function get_reviews($pdo) {
    $answer="";
    $query = "SELECT id,fio,email,text,mark,date,is_modded FROM reviews WHERE is_modded=0 ORDER BY id DESC";
    try{
        $dataSet = $pdo->query($query);
        foreach($dataSet as $row){
            $answer[] = array('id' => $row['id'], 'fio' => $row['fio'], 'email' => $row['email'], 'text' => $row['text'],
                'mark' => $row['mark'], 'date' => $row['date']);
        }
        //если мы не считали никаких данных из БД
        if(!$answer) $answer = "Отзывов  нет";
    }
    catch (PDOException $e) {
        $answer = "Не удалось получить отзывы из базы данных";
    }

    finally{
        return $answer;
    }
}

/*УДАЛЕНИЕ ОТЗЫВОВ*/
function delete_reviews($pdo, $review_id) {

    $answer = "";
    $query = sprintf("DELETE FROM reviews WHERE id='$review_id'",mysql_real_escape_string($review_id));


    try{
        $pdo->query($query);
        $answer = "Отзыв успешно удален";
    }
    catch (PDOException $e) {
        $answer = "Не удалось выполнить удаление отзыва из базы данных";
    }

    finally {
        return $answer;
    }

}

/*МОДЕРАЦИЯ ОТЗЫВА*/

function set_modded_reviews($pdo, $review_id) {

    $answer = "";
    $query = sprintf("UPDATE reviews SET is_modded='1' WHERE id='$review_id'", mysql_real_escape_string($review_id));
    try{
        $pdo->query($query);
        $answer = "Отзыв успешно принят";
    }
    catch (PDOException $e) {
        $answer = "Не удалось произвести изменение в базе данных \"Отзывы\"";
    }

    finally {
        return $answer;
    }

}


/*ПОЛУЧЕНИЕ МОДЕРИРОВАННЫХ ОТЗЫВОВ*/
function getreviews_modded($pdo) {
    $answer="";
    $query = "SELECT id,fio,email,text,mark,date,is_modded FROM reviews WHERE is_modded='1' ORDER BY id DESC";
    try{
        $dataSet = $pdo->query($query);
        foreach($dataSet as $row){
            $answer[] = array('id' => $row['id'], 'fio' => $row['fio'], 'email' => $row['email'], 'text' => $row['text'],
                'mark' => $row['mark'], 'date' => $row['date']);
        }
        //если мы не считали никаких данных из БД
        if(!$answer) $answer = "Отзывов  нет";
    }
    catch (PDOException $e) {
        $answer = "Не удалось получить отзывы из базы данных";
    }

    finally{
        return $answer;
    }
}

/*ОТЗЫВЫ ФРОНТЕНД _________________________________________________________________________________________________________
*/

/*ПОЛУЧЕНИЕ МОДЕРИРОВАННЫХ ОТЗЫВОВ*/
function getreviews_modded_user($pdo) {
    $answer="";
    $query = "SELECT id,fio,text,mark,date,is_modded FROM reviews WHERE is_modded=1 ORDER BY id DESC";
    try{
        $dataSet = $pdo->query($query);
        foreach($dataSet as $row){
            $answer[] = array('id' => $row['id'], 'fio' => $row['fio'], 'text' => $row['text'],
                'mark' => $row['mark'], 'date' => $row['date']);
        }
        //если мы не считали никаких данных из БД
        if(!$answer) $answer = "Отзывов  нет";
    }
    catch (PDOException $e) {
        $answer = "Не удалось получить отзывы из базы данных";
    }

    finally{
        return $answer;
    }
}

/*ДОБАВЛЕНИЕ НОВОГО ОТЗЫВА*/
function add_reviews_user($pdo, $review_fio, $review_email, $review_text, $review_mark, $review_date) {

    $answer = "";
    $query = sprintf("INSERT INTO reviews (fio,email,text, mark, date,is_modded) VALUES
        ('$review_fio','$review_email','$review_text', '$review_mark', '$review_date','0')",mysql_real_escape_string($review_fio),
        mysql_real_escape_string($review_email),mysql_real_escape_string($review_text),mysql_real_escape_string($review_mark)
        ,mysql_real_escape_string($review_date));
    try{
        $pdo->query($query);
        $answer = "Отзыв успешно принят и ожидает модерации";
    }
    catch (PDOException $e) {
        $answer = "Не удалось произвести изменение в базе данных \"Отзывы\"";
    }

    finally {
        return $answer;
    }

}
/*
* Работа с заявками с сайта==============================================================================================
*/

function get_all_statements_admin($pdo){
	$answer="";
    $query = "SELECT * FROM statement ORDER BY date DESC";
    try{
        $dataSet = $pdo->query($query);
        foreach($dataSet as $row){
            $answer[] = array('id' => $row['id'], 'name' => $row['name'], 'phone' => $row['phone'], 'comment' => $row['comment'], 'date' => $row['date']);
        }
        //если мы не считали никаких данных из БД
        if(!$answer) $answer = "Заявок нет";
    }
    catch (PDOException $e) {
        $answer = "Не удалось получить заявки";
    }

    finally{
        return $answer;
    }
}


/*
*Функции фронтенда==========================================================================================================
*/


/*
* Работа с акциями==========================================================================================================
*/

function get_all_actions_frontend($pdo){
    $answer="";
    $query = "SELECT * FROM actions ORDER BY action_id DESC";
    try{
        $dataSet = $pdo->query($query);
        foreach($dataSet as $row){
            $answer[] = array('action_id' => $row['action_id'], 'title' => $row['title'], 'text' => $row['text'], 'image' => $row['image'],
                'date' => $row['date']);
        }
        //если мы не считали никаких данных из БД
        if(!$answer) $answer = "Акций нет";
    }
    catch (PDOException $e) {
        $answer = "Не удалось получить акции";
    }

    finally{
        return $answer;
    }
}

/*
* Работа с новостями========================================================================================================
*/

function get_all_news_frontend($pdo){
    $answer="";
    $query = "SELECT * FROM news ORDER BY news_id DESC";
    try{
        $dataSet = $pdo->query($query);
        foreach($dataSet as $row){
            $answer[] = array('news_id' => $row['news_id'], 'title' => $row['title'], 'text' => $row['text'], 'image' => $row['image'],
                'date' => $row['date']);
        }
        //если мы не считали никаких данных из БД
        if(!$answer) $answer = "Новостей нет";
    }
    catch (PDOException $e) {
        $answer = "Не удалось получить новости";
    }

    finally{
        return $answer;
    }
}

function get_news_one_frontend($pdo, $news_id){
	    $answer="";
    $query = "SELECT * FROM news WHERE news_id='$news_id'";
    try{
        $dataSet = $pdo->query($query);
        foreach($dataSet as $row){
            $answer[] = array('news_id' => $row['news_id'], 'title' => $row['title'], 'text' => $row['text'], 'image' => $row['image'],
                'date' => $row['date']);
        }
        //если мы не считали никаких данных из БД
        if(!$answer) $answer = "Новость не найдена";
    }
    catch (PDOException $e) {
        $answer = "Не удалось получить новость";
    }

    finally{
        return $answer;
    }
}


//Обсуждение
function add_discussion_frontend($pdo, $news_id_reviews, $username, $text, $date){
	    $answer = "";
    $query = sprintf("INSERT INTO reviews (news_id_reviews,username,text, date) VALUES
        ('$news_id_reviews','$username','$text', '$date')",mysql_real_escape_string($statement_name),
        mysql_real_escape_string($statement_phone),mysql_real_escape_string($statement_text));


try{
    $pdo->query($query);
    $answer = "Новый тикет добавлен";
}
catch (PDOException $e) {
    $answer = "Не удалось выполнить запись тикета";
}

finally {
    return $answer;
}

}


function get_discussion_frontend ($pdo) {
		    $answer="";
    $query = "SELECT * FROM news INNER JOIN reviews ON news.news_id=reviews.news_id_reviews  WHERE news.news_id='$news_id' ";
    try{
        $dataSet = $pdo->query($query);
        foreach($dataSet as $row){
            $answer[] = array('news_id_reviews' => $row['reviews_id'], 'username' => $row['username'], 'text' => $row['text'],
                'date' => $row['date'],);
        }
        //если мы не считали никаких данных из БД
        if(!$answer) $answer = "Нет обсуждений";
    }
    catch (PDOException $e) {
        $answer = "Не удалось получить обсуждения";
    }

    finally{
        return $answer;
    }
}

/*
* Работа с фотогаллереей=================================================================================================
*/


function get_all_photos_frontend($pdo){
    $answer="";
    $query = "SELECT * FROM photogallery ORDER BY image_id DESC";
    try{
        $dataSet = $pdo->query($query);
        foreach($dataSet as $row){
            $answer[] = array('image_id' => $row['image_id'], 'image' => $row['image'], 'title' => $row['description']);
        }
        //если мы не считали никаких данных из БД
        if(!$answer) $answer = "фотографий нет";
    }
    catch (PDOException $e) {
        $answer = "Не удалось получить фотографии";
    }

    finally{
        return $answer;
    }
}


/*
* Работа с заявками с сайта==============================================================================================
*/

function add_statement_frontend($pdo, $statement_name, $statement_phone, $statement_text, $statement_date){
	    $answer = "";
    $query = sprintf("INSERT INTO statement (name,phone,comment, date) VALUES
        ('$statement_name','$statement_phone','$statement_text', '$statement_date')",mysql_real_escape_string($statement_name),
        mysql_real_escape_string($statement_phone),mysql_real_escape_string($statement_text));


try{
    $pdo->query($query);
    $answer = "Новая новость добавлена";
}
catch (PDOException $e) {
    $answer = "Не удалось выполнить запись новости";
}

finally {
    return $answer;
}

}


function send_mail($message){
    // почта, на которую придет письмо
    $mail_to = "avtomobilist-63@mail.ru";
    // тема письма
    $subject = "Сообщение с сайта";

    // заголовок письма
    $headers= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
    $headers .= "From: Сайт LEDstyLe <ledstyle@mail.ru>\r\n"; // от кого письмо

    // отправляем письмо
    mail($mail_to, $subject, $message, $headers);
}