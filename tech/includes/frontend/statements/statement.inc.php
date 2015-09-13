<div class="modal fade" id="statement" tabindex="-1" role="dialog" aria-labelledby="statement" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content content-statement">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title title-statement" id="myModalLabel">Оставить заявку</h4>
      </div>
      <div class="messages_statement"></div>
      <div class="modal-body body-statement">
         <div class="form-group"> 
          <input type="text" id="name_statement" class="form-control statement-input" placeholder="Имя" requied />
         </div>
         <div class="form-group"> 
          <input type="text" id="phone_statement" class="form-control statement-input" placeholder="Телефон" requied/>
         </div>
         <div class="form-group"> 
          <textarea id="text_statement" class="form-control statement-input" placeholder="Комментарий"></textarea>
         </div> 
      </div>
      <div class="modal-footer footer-statement">
        <button type="button" id="add_statement" class="btn btn-statement-input btn-primary">Отправить заявку</button>
      </div>
      
    </div>
  </div>
</div>

<script>
$(document).ready(function(){
      $('#add_statement').click(function(){
        // собираем данные с формы
        var name_statement    = $('#name_statement').val();
        var phone_statement    = $('#phone_statement').val();
        var text_statement    = $('#text_statement').val();
        // отправляем данные
        $.ajax({
          url: "http://avtoshkola-v-samare.ru/tech/includes/frontend/statements/statement.lib.php", // куда отправляем
          type: "post", // метод передачи
          dataType: "json", // тип передачи данных
          data: { // что отправляем
            "name_statement":  name_statement,
            "phone_statement":  phone_statement,
            "text_statement":  text_statement
          },
          // после получения ответа сервера
          success: function(data){
            $('.messages_statement').html(data.result); // выводим ответ сервера
          }
        });
                $("#name_statement").val("");
                $("#phone_statement").val("");
                $("#text_statement").val("");
      });
    });   
</script>