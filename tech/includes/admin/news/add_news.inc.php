<form action="<?php $_SERVER['DOCUMENT_ROOT']?>/tech/includes/admin/news/add_news.lib.php" method='post' enctype='multipart/form-data'>
    <div class="form-group">
        <label class="control-label">Заголовок новости:</label>
        <input type="text" name="news_title" size="30" id="news_title" class="form-control">
    </div>
    <div class="form-group">
        <label class="control-label">Описание новости:</label>
        <textarea id="news_text" name="news_text" class="form-control" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label class="control-label">Прикрепите фотографию новости:</label>
        <input name='file[]' type='file' multiple='true' />
    </div>
    <button type="submit" id="addnews" class="btn btn-default">Добавить новость</button>
</form>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'news_text' );
            </script>