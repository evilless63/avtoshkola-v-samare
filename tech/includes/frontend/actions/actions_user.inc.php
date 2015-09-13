<?php
$actions = get_all_actions_frontend($pdo);
if($actions != "Акций нет") {
    $counter=1;
    foreach ($actions as $row) {
        if($counter == 1) $html .= "<div class=\"action\">";
        $html .= "<div class=\"action-module col-md-6\">"
            ."<h4 class=\"action-date\">".$row['date']."</h4>"
            ."<p><img class=\"img-responsive\" title=".$row['title']." alt=".$row['title']." style=\"width: 100%;\" src=".$row['image']." ></p>"
            ."<h4><div class=\"action-title\">".$row['title']."</div></h4>"
            ."<p>".$row['text']."</p></div>";

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
    $html = "Акций нет";
}

echo $html;
// очищаем переменные
$html = "";
?>
