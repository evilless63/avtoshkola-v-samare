<?php
$reviews_modded = getreviews_modded_user($pdo);
if($reviews_modded != "Отзывов  нет") {
    $counter=1;

    foreach ($reviews_modded as $row) {
        if($counter == 1) $html .= "<div class=\"action-content-block\" style=\"text-align:left;\">";
        $html .= "<div class=\"container_admin\">"
            ."<h4>".$row['fio']."</h4>"
            ."<p>Текст отзыва: ".$row['text']."</p>"
            ."<p>Оценка: ".$row['mark']."</p>"
            ."<p>Дата размещения: ".$row['date']."</p><hr></div>";

        //итераци¤ счетчика
        $counter ++;
        //если счетчик равен 6, то блок контента завершаетс¤? а счетчик сбрасываетс¤ до единицы
        if($counter == 6){
            $html .= "</div>";
            $counter = 1;
        }
    }
    // если мы не сбросили счетчик - закроем последний див
    if($counter != 1) $html .= "</div>";
}
else{
    $html = "Отзывов  нет";
}

echo $html;
// очищаем переменные
$html = "";
?>
<div id="action-page-selection"></div>