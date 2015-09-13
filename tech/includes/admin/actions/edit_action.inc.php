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

$action_id = $_GET['id'];

$edit_action = get_action_one_admin($pdo, $action_id);
if($edit_action != "Акция не найдена") {
    foreach ($edit_news as $row) { ?>
        <form class="edit_form" action="<?php $_SERVER['DOCUMENT_ROOT']?>/tech/includes/admin/actions/update_actions.lib.php" method='post' enctype='multipart/form-data'>
            <h3>Редактирование новости</h3>
            <div class="form-group">
                <label class="control-label">Заголовок новости:</label>
                <?php echo "<input type=\"hidden\" name=\"action_id\" id=\"action_id\" value=".$action_id.">";?>
                <?php echo "<input type=\"text\" name=\"action_title_ed\" size=\"30\" id=\"action_title\" value=".$row['title']." class=\"form-control\">";?>
            </div>
            <div class="form-group">
                <label class="control-label">Описание новости:</label>
                <?php echo "<textarea id=\"action_text_ed\" name=\"action_text_ed\" class=\"form-control\" rows=\"5\"><".$row['text']."</textarea>";?>
            </div>
            <div class="form-group">
                <label class="control-label">Прикрепите фотографию новости:</label>
                <input name='file[]' type='file' multiple='true' />
            </div>
            <button type="submit" id="editaction" class="btn btn-default">Обновить новость</button>
            <a href="<?php $_SERVER['DOCUMENT_ROOT']?>/admin/">Отменить редактирование и вернуться в админпанель</a>
        </form>
        <hr>
        <?php
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
                CKEDITOR.replace( 'action_text_ed' );
            </script>

</body>
</html>