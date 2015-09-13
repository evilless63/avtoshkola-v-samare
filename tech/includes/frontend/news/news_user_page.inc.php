<?php


if($edit_news != "Новость не найдена") {
    foreach ($edit_news as $row) { ?>
       <div class="row">
           <div class="col-md-12">
                <h4 class="news-page-date"><?php echo $row['date']; ?></h4>
           </div>
           <div class="col-md-12">
                <h2 class="news-page-title"><?php echo $row['title']; ?></h2>
           </div>
           <div class="col-md-12">
                <p><?php echo $row['text']; ?></p>
           </div>
           <div class="col-md-12" style="text-align:center;">
                <a class="news-back" href="<?php $_SERVER['DOCUMENT_ROOT'];?>/novosti/" >Назад</a>
           </div>
           <input type="hidden" id="news_id" value="<?php echo $row['news_id']; ?>" />
       </div>

        <?php
        $reviews = get_discussion_admin ($pdo);
                foreach ($reviews as $row) {
                    echo "<h3>Обсуждение новости</h3>";
                    echo "<p>".$row['username']."</p>";
                    echo "<p>".$row['text']."</p>";
                    echo "<p>".$row['date']."</p>";
                }
    }
}

else{ 
    echo "<p>Новостей нет</p>";
}
?>
<hr>