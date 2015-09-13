<?php
$gallery = get_all_photos_frontend($pdo);
if($gallery != "фотографий нет") {
    $counter=1;
    foreach ($gallery as $row) {
        if($counter == 1) $html .= "<div class=\"gallery-content-block\">";
        $html .= "<div class=\"col-md-6\">"
            ."<p><img class=\"img-responsive fancybox\" title=".$row['description']." alt=".$row['description']." rel=\"gallery\" style=\"width: 100%;\" src=".$row['image']." ></p>"
        //итераци¤ счетчика
        $counter ++;
        //если счетчик равен 6, то блок контента завершаетс¤? а счетчик сбрасываетс¤ до единицы
        if($counter == 7){
            $html .= "</div>";
            $counter = 1;
        }
    }
    // если мы не сбросили счетчик - закроем последний див
    if($counter != 1) $html .= "</div>";
}
else{
    $html = "фотографий нет";
}

echo $html;
// очищаем переменные
$html = "";
?>
<div id="gallery-page-selection"></div>

<script>
    
        
        
//блоки с контентом данных
        var galleryblocks = $(".gallery-content-block"),

        // сначала открыта первая страница
        HideBlocks(0, galleryblocks);

        // init reviews-block
        $('#gallery-page-selection').bootpag({
            total: galleryblocks.length,
            page: 1,
            maxVisible: 5
        }).on("page", function(event, num){
            // при клике на номер страницы прячем все блоки, не находящиеся на этой странице
            HideBlocks(num-1, galleryblocks);
            // возвращаемся к началу страницу (чтобы стало понятно, что контент обновился)
            $('body')[0].scrollIntoView();
        });
});    
</script>