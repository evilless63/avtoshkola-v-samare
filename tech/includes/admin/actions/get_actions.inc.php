<?php
$actions = get_all_actions_admin($pdo);
if($actions != "Акций нет") {
    $counter=1;
    $rand4 = rand(1501,2000);
    foreach ($actions as $row) {
        if($counter == 1) $html .= "<div class=\"actions-content-block\">";
        $html .= "<div class=\"container_admin\">"
            ."<h4>".$row['title']."</h4>"
            ."<p><img class=\"img-responsive\" title=".$row['title']." alt=".$row['title']." style=\"width: 100%;\" src=".$row['image']." ></p>"
            ."<p>".$row['text']."</p>"
            ."<p>".$row['date']."</p>"
            ."<p><span class=\"m-dotted\" id=".$row['action_id'].$row['action_id'].$rand4." >Редактировать акцию</span></p>"
            ."<p><a href=".$server_name."/tech/includes/admin/actions/delete_action.lib.php?id=".$row['action_id'].">Удалить акцию</a></p></div>"
            ."<script>"
            ."$('#".$row['action_id'].$row['action_id'].$rand4."').click(function() {"
							."$.arcticmodal({"
								."type: 'ajax',"
								."url: '".$server_name."/tech/includes/admin/actions/edit_action.inc.php?id=". $row['action_id']."'"
							."});"
						."});"
            ."</script>";

        //итераци¤ счетчика
        $counter ++;
        //если счетчик равен 6, то блок контента завершаетс¤? а счетчик сбрасываетс¤ до единицы
        if($counter == 2){
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
<div id="actions-page-selection"></div>

<script>
        function HideBlocks(index, blocks){
            for(var i = 0; i< blocks.length; i++){
                if(i != index) $(blocks[i]).css('display','none');
                else $(blocks[i]).css('display','block');
            }
        }
        
//блоки с контентом данных
        var newsblocks = $(".actions-content-block"),

        // сначала открыта первая страница
        HideBlocks(0, newsblocks);

        // init reviews-block
        $('#actions-page-selection').bootpag({
            total: newsblocks.length,
            page: 1,
            maxVisible: 5
        }).on("page", function(event, num){
            // при клике на номер страницы прячем все блоки, не находящиеся на этой странице
            HideBlocks(num-1, newsblocks);
            // возвращаемся к началу страницу (чтобы стало понятно, что контент обновился)
            $('body')[0].scrollIntoView();
        });
});    
</script>