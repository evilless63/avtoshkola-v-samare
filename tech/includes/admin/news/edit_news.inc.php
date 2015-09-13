<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
//подключаем файл работы с БД
require $_SERVER['DOCUMENT_ROOT'].'/tech/includes/db.inc.php';
require $_SERVER['DOCUMENT_ROOT'].'/tech/includes/functions.php';

$news_id = $_GET['id'];

$edit_news = get_news_one_admin($pdo, $news_id);
if($edit_news != "Новость не найдена") {
    foreach ($edit_news as $row) { ?>
        <form class="edit_form" action="<?php $_SERVER['DOCUMENT_ROOT']?>/tech/includes/admin/news/update_news.lib.php" method='post' enctype='multipart/form-data'>
            <h3>Редактирование новости</h3>
            <div class="form-group">
                <label class="control-label">Заголовок новости:</label>
                <?php echo "<input type=\"hidden\" name=\"news_id\" id=\"news_id\" value=".$news_id.">";?>
                <?php echo "<input type=\"text\" name=\"news_title_ed\" size=\"30\" id=\"news_title\" value=".$row['title']." class=\"form-control\">";?>
            </div>
            <div class="form-group">
                <label class="control-label">Описание новости:</label>
                <?php echo "<textarea id=\"news_text_ed\" name=\"news_text_ed\" class=\"form-control\" rows=\"5\"><".$row['text']."</textarea>";?>
            </div>
            <div class="form-group">
                <label class="control-label">Прикрепите фотографию новости:</label>
                <input name='file[]' type='file' multiple='true' />
            </div>
            <button type="submit" id="editnews" class="btn btn-default">Обновить новость</button>
            <a href="<?php $_SERVER['DOCUMENT_ROOT']?>/admin/">Отменить редактирование и вернуться в админпанель</a>
        </form>
        <hr>
        <?php
        $reviews = get_discussion_admin ($pdo);
                foreach ($reviews as $review) {
                    echo "<h3>Обсуждение новости</h3>";
                    echo "<p>".$review['username']."</p>";
                    echo "<p>".$review['text']."</p>";
                    echo "<p>".$review['date']."</p>";
                    echo "<p><a href=".$server_name."/tech/includes/admin/delete_review.lib.php?id=".$review['reviews_id'].">Удалить тикет обсуждения</a></p>" ;
                }
    }
}

else{ 
    echo "<p>Новостей нет</p>";
}


// очищаем переменные

?>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'news_text_ed' );
            </script>

</body>
</html>