<div class="messages"></div>
<!--<form action="/functions/includes/addvote.php" method="POST">-->
<div class="row" style="margin-bottom: 40px;">
    <div class="col-md-12">
        <div class="col-md-12">
        <div class="form-group">
            <label class="control-label">ФИО:</label>
            <input type="text" name="vote_fio" size="30" id="vote_fio" class="form-control">
        </div>
        <div class="form-group">
            <label class="control-label">Ваша почта:</label>
            <input type="text" name="vote_mail" size="30" id="vote_mail" class="form-control">
        </div>
        <div class="form-group">
            <label class="control-label">Ваш отзыв:</label>
            <textarea name="vote_vote" size="30" id="vote_vote" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label class="control-label">Ваша оценка:</label>
            <select name="vote_mark" id="vote_mark" class="form-control">
                <option value="5">Отлично</option>
                <option value="4">Хорошо</option>
                <option value="3">Пойдет</option>
                <option value="2">Не понравилось</option>
            </select>
        </div>
    
        <button id="addvote" class="button-stmnt btn btn-primary btn-lg">отправить</button>
    </div>
    </div>
</div>    
<!--</form>-->
<script>
    //ОТЗЫВЫ------------------------------------------------------------------------------------
$(document).ready(function(){
			$('#addvote').click(function(){
				// собираем данные с формы
				var vote_fio 	 = $('#vote_fio').val();
                var vote_mail 	 = $('#vote_mail').val();
				var vote_vote 	 = $('#vote_vote').val();
				var vote_mark    = $('#vote_mark').val();
				// отправляем данные
				$.ajax({
					url: "http://avtoshkola-v-samare.ru/tech/includes/frontend/reviews/addreview.php", // куда отправляем
					type: "post", // метод передачи
					dataType: "json", // тип передачи данных
					data: { // что отправляем
						"vote_fio": 	vote_fio,
						"vote_mail": 	vote_mail,
                        "vote_vote": 	vote_vote,
						"vote_mark":    vote_mark
					},
					// после получения ответа сервера
					success: function(data){
						$('.messages').html(data.result); // выводим ответ сервера
					}
				});
				$("#vote_fio").val("");
                $("#vote_mail").val("");
                $("#vote_vote").val("");
                $("#vote_mark").val("");
			});
		});
		
</script>
    