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

$action_id=$_GET['id'];
$answer = delete_action_admin($pdo, $action_id);

echo $answer; ?>
<script language = 'javascript'>
    var delay = 1;
    setTimeout("document.location.href='http://avtoshkola-v-samare.ru/admin/'", delay);
</script>
</body>
</html>