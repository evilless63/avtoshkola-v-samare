<?php
$news = get_all_news_frontend($pdo);
if($news != "Новостей нет") {
    $counter=1;
    foreach ($news as $row) {
        if($counter == 1) $html .= "<div class=\"center\">";
        $html .= "<div class=\"news-module col-md-6\">"
            ."<h4 class=\"news-user-date\" >".$row['date']."</h4>"
            ."<h4 class=\"news-user-title\" style=\"    min-height: 105px;\" ><a class=\"news-title\" href=".$server_name."novosti/index.php?id=".$row['news_id'].">".$row['title']."</a></h4>"
            ."<p>".substr($row['text'], 0, 100)."..."."</p>"
            ."<a class=\"news-user-more\" href=".$server_name."novosti/index.html.php?id=".$row['news_id'].">Читать подробнее</a></div>";

        //итераци¤ счетчика
        $counter ++;
        //если счетчик равен 6, то блок контента завершаетс¤? а счетчик сбрасываетс¤ до единицы
        if($counter == 200){
            $html .= "</div>";
            $counter = 1;
        }
    }
    // если мы не сбросили счетчик - закроем последний див
    if($counter != 1) $html .= "</div>";
}
else{
    $html = "Новостей нет";
}

echo $html;
// очищаем переменные
$html = "";
?>
