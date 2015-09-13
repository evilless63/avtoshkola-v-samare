<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Админпанель сайта</title>
    <link href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/arcticmodal/jquery.arcticmodal.css" rel="stylesheet">
    <link href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/arcticmodal/themes/simple.css" rel="stylesheet">
    <link href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/css/style.css" rel="stylesheet">

    <script src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/js/jquery-1.11.3.min.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/arcticmodal/jquery.arcticmodal.js"></script>
    
    <script src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/js/script_admin.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/ckeditor/ckeditor.js"></script>
    <style>
        p { color:  navy; }
    </style>
</head>
<body>
<div class="container">
    <p>Панель администратора сайта</p>
    <a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/admin/index.php?logout=true">Выйти</a>


        <!-- Nav tabs -->
        <div class="col-md-3">
    <ul class="nav nav-pills nav-stacked" role="tablist">
        <li role="presentation"><a href="#news_a" aria-controls="news" role="tab" data-toggle="tab">Новости</a></li>
        <li role="presentation"><a href="#actions_a" aria-controls="news" role="tab" data-toggle="tab">Акции</a></li>
        <li role="presentation"><a href="#statements_a" aria-controls="news" role="tab" data-toggle="tab">Сообщения с сайта</a></li>
        <li role="presentation"><a href="#reviews_a" aria-controls="news" role="tab" data-toggle="tab">Отзывы</a></li>
    </ul>
</div>
<div class="col-md-9">
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="news_a">
            <div class="row">
                <div class="col-md-12">
                    <h2>Новости</h2>
                </div>
                <div class="col-md-12">
                    <div class="col-md-6">
                        <?php include $_SERVER['DOCUMENT_ROOT']."/tech/includes/admin/news/add_news.inc.php" ?>
                    </div>
                    <div class="col-md-6">
                        <?php include $_SERVER['DOCUMENT_ROOT']."/tech/includes/admin/news/get_news.inc.php" ?>
                    </div>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane active" id="actions_a">
            <div class="row">
                <div class="col-md-12">
                    <h2>Акции</h2>
                </div>
                <div class="col-md-12">
                    <div class="col-md-6">
                        <?php include $_SERVER['DOCUMENT_ROOT']."/tech/includes/admin/actions/add_action.inc.php" ?>
                    </div>
                    <div class="col-md-6">
                        <?php include $_SERVER['DOCUMENT_ROOT']."/tech/includes/admin/actions/get_actions.inc.php" ?>
                    </div>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="photo_a">
            <div class="row">
                <div class="col-md-12">
                    <h2>Фотогалерея</h2>
                </div>
                <div class="col-md-12">
                    <div class="col-md-6">
                        <?php include $_SERVER['DOCUMENT_ROOT']."/tech/includes/admin/photogallery/add_photogallery.inc.php" ?>
                    </div>
                    <div class="col-md-6">
                        <?php include $_SERVER['DOCUMENT_ROOT']."/tech/includes/admin/photogallery/get_photogallery.inc.php" ?>
                    </div>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="statements_a">
            <div class="row">
                <div class="col-md-12">
                    <h2>Сообщения с сайта</h2>
                </div>
                <div class="col-md-12">
                    <div class="col-md-6">
                        <?php include $_SERVER['DOCUMENT_ROOT']."/tech/includes/admin/statement/get_statements.inc.php" ?>
                    </div>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="reviews_a">
            <div class="row">
                <div class="col-md-12">
                    <h2>Отзывы</h2>
                </div>
                <div class="col-md-12">
                    <div class="col-md-6">
                        <?php include $_SERVER['DOCUMENT_ROOT']."/tech/includes/admin/reviews/getreviews.php" ?>
                    </div>
                    <div class="col-md-6">
                        <?php include $_SERVER['DOCUMENT_ROOT']."/tech/includes/admin/reviews/getreviews_modded.php" ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>