<?php
$news = getreviews_modded_user($pdo);
if($news != "Новостей нет") {
    $counter=1;
    foreach ($news as $row) {
        if($counter == 1) $html .= "<div class=\"multiple-news\">";
        $html .= "<div class=\"news-module-main col-md-4\"><h4>".$row['date']."</h4><div class=\"news_wrapper\">"
            
            ."<h4><a class=\"news-title\" href=".$server_name."otzyvy/".">".$row['fio']."</a></h4>"
            ."<p>".$row['text']."..."."</p>"
            ."<a class=\"news-more\" href=".$server_name."otzyvy/".">Читать подробнее</a></div></div>";

        //итераци¤ счетчика
        $counter ++;
        //если счетчик равен 6, то блок контента завершаетс¤? а счетчик сбрасываетс¤ до единицы
        if($counter == 4){
            $html .= "</div>";
            $counter = 1;
        }
    }
    // если мы не сбросили счетчик - закроем последний див
    if($counter != 1) $html .= "</div>";
}
else{
    $html = "Отзывов нет";
}

echo $html;
// очищаем переменные
$html = "";
?>

<div style="    text-align: center;" id="news_main-page-selection"></div>

<script>
   
</script>