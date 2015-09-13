<meta charset="utf-8">
<title>Админпанель сайта</title>
<link href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/css/simplegallery.demo2.css" rel="stylesheet">

<script src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/js/jquery-1.11.3.min.js"></script>
<script src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/fancybox/jquery.fancybox.pack.js"></script>
<script src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/slick/slick.js"></script>
<script src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/ckeditor/ckeditor.js"></script>
<script src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/js/script_admin.js"></script>
<style>
    p { color:  navy; }
</style>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <form action="" method="POST">
            <div class="form-group">
                <label class="control-label">Логин:</label>
                <input type="text" name="auth_name" size="30" id="auth_name" class="form-control">
            </div>
            <div class="form-group">
                <label class="control-label">Пароль:</label>
                <input type="text" name="auth_pass" size="30" id="auth_pass" class="form-control">
            </div>
            <button type="submit" id="auth" class="btn btn-default">Войти в админку</button>
        </form>
    </div>
</div>
