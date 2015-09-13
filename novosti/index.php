<?php

require_once $_SERVER['DOCUMENT_ROOT']."/tech/includes/db.inc.php";
require_once $_SERVER['DOCUMENT_ROOT']."/tech/includes/functions.php";


if (isset($_GET['id'])) {
    $news_id = $_GET['id'];

    $edit_news = get_news_one_frontend($pdo, $news_id);
    foreach ($edit_news as $row) {
        $news_title = $row['title'];
    }
	include $_SERVER['DOCUMENT_ROOT']."/novosti/news_page.html.php";

}

else {
    include $_SERVER['DOCUMENT_ROOT']."/novosti/news.html.php";
}