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

//ширина и высота в пикселях
$pic_weight = 3000;
$pic_height = 3000;

if (isset($_FILES))
{
    //пролистываем весь массив изображений по одному $_FILES['file']['name'] as $k=>$v
    foreach ($_FILES['file']['name'] as $k=>$v)
    {
        //директория загрузки
        $uploaddir = htmlspecialchars("../../../../images/actions/", ENT_QUOTES);
        //новое имя изображения
        $apend=htmlspecialchars(date('YmdHis').rand(100,1000).'.png', ENT_QUOTES);
        //путь к новому изображению
        $uploadfile = "$uploaddir$apend";

        //Проверка расширений загружаемых изображений
        if($_FILES['file']['type'][$k] == "image/gif" || $_FILES['file']['type'][$k] == "image/png" ||
            $_FILES['file']['type'][$k] == "image/jpg" || $_FILES['file']['type'][$k] == "image/jpeg")
        {
            //черный список типов файлов
            $blacklist = array(".php", ".phtml", ".php3", ".php4");
            foreach ($blacklist as $item)
            {
                if(preg_match("/$item\$/i", $_FILES['file']['name'][$k]))
                {
                    echo "Нельзя загружать скрипты.";
                    exit;
                }
            }

            //перемещаем файл из временного хранилища
            if (move_uploaded_file($_FILES['file']['tmp_name'][$k], $uploadfile))
            {
                //получаем размеры файла
                $size = getimagesize($uploadfile);
                //проверяем размеры файла, если они нам подходят, то оставляем файл
                if ($size[0] < $pic_weight && $size[1] < $pic_height)
                {
                    //.....код
                    //я обычно заношу пути к изображениям в бд
                    //.....код

                    echo "<center><br>Файл ($uploadfile) загружен.</center>";
                }
                //если размеры файла нам не подходят, то удаляем файл unlink($uploadfile);
                else
                {
                    echo "<center><br>Размер пикселей превышает допустимые нормы.</center>";
                    unlink($uploadfile);
                }
            }
            else
                echo "<center><br>Файл не загружен, вернитесь и попробуйте еще раз.</center>";
        }
        else
            echo "<center><br>Можно загружать только изображения в форматах jpg, jpeg, gif и png.</center>";
    }
}

$action_title = htmlspecialchars($_POST['action_title'], ENT_QUOTES);
$action_text = $_POST['action_text'];
setlocale(LC_ALL, 'ru_RU.UTF-8');
$action_date = strftime("%d %B", mktime(date(d-m-Y)));



$answer = add_action_admin($pdo, $action_title, $action_text, $uploadfile, $action_date);
?>
<script language = 'javascript'>
    var delay = 1;
    setTimeout("document.location.href='http://avtoshkola-v-samare.ru/admin/'", delay);
</script>
</body>
</html>