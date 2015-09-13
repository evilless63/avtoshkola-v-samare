<?php
$statements = get_all_statements_admin($pdo);
if($statements != "Заявок нет") {
    $counter=1;
    $rand4 = rand(1501,2000);
    foreach ($statements as $row) {
        if($counter == 1) $html .= "<div class=\"statement-content-block\">";
        $html .= "<div class=\"container_admin\">"
            ."<h4>".$row['name']."</h4>"
            ."<p>Телефон клиента: ".$row['phone']."</p>"
            ."<p>Комментарий клиента: ".$row['comment']."</p>"
            ."<p>Дата поступления заявки: ".$row['date']."</p></div>";

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
    $html = "Заявок нет";
}

echo $html;
// очищаем переменные
$html = "";
?>
<div id="statement-page-selection"></div>

<script>
    $(document).ready(function(){        
        function HideBlocks(index, blocks){
            for(var i = 0; i< blocks.length; i++){
                if(i != index) $(blocks[i]).css('display','none');
                else $(blocks[i]).css('display','block');
            }
        }
        
        
//блоки с контентом данных
        var statementblocks = $(".statement-content-block"),

        // сначала открыта первая страница
        HideBlocks(0, statementblocks);

        // init reviews-block
        $('#statement-page-selection').bootpag({
            total: statementblocks.length,
            page: 1,
            maxVisible: 5
        }).on("page", function(event, num){
            // при клике на номер страницы прячем все блоки, не находящиеся на этой странице
            HideBlocks(num-1, statementblocks);
            // возвращаемся к началу страницу (чтобы стало понятно, что контент обновился)
            $('body')[0].scrollIntoView();
        });
});    
</script>