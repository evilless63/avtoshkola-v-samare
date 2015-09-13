<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
			<title>О школе - Персонал - Автомобилист63</title>
			<!-- HEADER, MENU, BANNER -->	
			<?php 

				include $_SERVER['DOCUMENT_ROOT']."/tech/includes/header.php";
				include $_SERVER['DOCUMENT_ROOT']."/tech/includes/navigation.php";
			?>	
			<main class="container-fluid">
				<section>
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ol class="breadcrumb">
								  <li><a href="/">Главная</a></li>
								  <li><a href="/o-shkole/">О школе</a></li>
								  <li><a href="/o-shkole/index.php?id=personal/">Персонал</a></li>
								</ol>
							</div>
							<div class="col-md-12">
								<h1>Персонал</h1>
							</div>
							<div class="col-md-12">
								<h2>Педагогические работники&nbsp;НОУ «Автомобилист 63»</h2>
							</div>
							<div class="col-md-12" style="margin-bottom:20px;">
								<h3>Инструктора</h3></h3>
							</div>
							<div class="row">
							<div class="col-md-2">
							    <img class="img-responsive" src="<?php $_SERVER['DOCUMENT_ROOT'];?>/images/avtopark/instructory/instructor-1.jpg" alt="Инструктор Андрей" />
							    <span style="text-decoration: underline;">Уйбо Андрей Кузьмич</span>
							</div>
							<div class="col-md-7">
							    <h4 style="margin-top: 0px;"><span style="text-decoration: underline;">Уйбо Андрей Кузьмич</span></h4>
								<p>Преподаватель по предмету: Мастер производственного обучения</p>
<p>Образование: Куйбышевский авиационный институт им. Акад. С.П. Королева - инженер</p>
<p>Дополнительное образование: удостоверение о краткосрочном&nbsp; повышении квалификации №0190/10&nbsp; от 09.03.2010г., №187/12&nbsp; от 18.09.2012г.</p>
							</div>
							<div class="col-md-3">
							    <h4><strong>Записаться на занятия</strong></h4>
							    <div class="messages_zapis"></div>
							        <div class="form-group-zayavka">
                                        <label for="yourname">Ваше имя:</label>
                                        <input type="text" class="form-control-zayavka" style="color:black;" id="yourname1">
                                    </div>
                                    <div class="form-group-zayavka">
                                        <label for="yourmail">Ваш email:</label>
                                        <input type="text" class="form-control-zayavka" style="color:black;" id="yourmail1">
                                    </div>
                                    <div class="form-group-zayavka">
                                        <label for="yourphone">Ваш телефон:</label>
                                        <input type="text" class="form-control-zayavka" style="color:black;" id="yourphone1">
                                    </div>
                                    <button type="button" id="add_zapis1" class="btn btn-statement-input btn-primary-zayavka">Заказать</button>
                                  <script>
                                    $(document).ready(function(){
                                          $('#add_zapis1').click(function(){
                                            // собираем данные с формы
                                            var yourname    = $('#yourname1').val();
                                            var yourmail    = $('#yourmail1').val();
                                            var yourphone    = $('#yourphone1').val();
                                            // отправляем данные
                                            $.ajax({
                                              url: "http://avtoshkola-v-samare.ru/tech/includes/frontend/zayavka/zayavka.lib.php", // куда отправляем
                                              type: "post", // метод передачи
                                              dataType: "json", // тип передачи данных
                                              data: { // что отправляем
                                                "yourname":  yourname,
                                                "yourmail":  yourmail,
                                                "yourphone":  yourphone
                                              },
                                              // после получения ответа сервера
                                              success: function(data){
                                                $('.messages_zapis').html(data.result); // выводим ответ сервера
                                              }
                                            });
                                                    $("#yourname1").val("");
                                                    $("#yourmail1").val("");
                                                    $("#yourphone1").val("");
                                          });
                                        });   
                                    </script>
                                  
							</div>
							</div>  
							<div class="row">
							<div class="col-md-2">
							    <img class="img-responsive" src="<?php $_SERVER['DOCUMENT_ROOT'];?>/images/avtopark/instructory/instructor-1.jpg" alt="Инструктор Татьяна" />
							    <span style="text-decoration: underline;">Бадаева Татьяна Юрьевна</span>
							</div>
							<div class="col-md-7">
							    <h4 style="margin-top: 0px;"><span style="text-decoration: underline;">Бадаева Татьяна Юрьевна</span></h4>
								<p>Преподаватель по предмету: Мастер производственного обучения</p>
<p>Образование: ФГБОУВПО «Самарский государственный университет» - по специальности «Биология»</p>
<p>Дополнительное образование: удостоверение о краткосрочном повышении квалификации №151/12&nbsp; от 18.09.2012г., №175/12&nbsp; от 18.09.2012г.</p>
							</div>
							<div class="col-md-3">
							    <h4><strong>Записаться на занятия</strong></h4>
							    <div class="messages_zapis"></div>
							        <div class="form-group-zayavka">
                                        <label for="yourname">Ваше имя:</label>
                                        <input type="text" class="form-control-zayavka" style="color:black;" id="yourname2">
                                    </div>
                                    <div class="form-group-zayavka">
                                        <label for="yourmail">Ваш email:</label>
                                        <input type="text" class="form-control-zayavka" style="color:black;" id="yourmail2">
                                    </div>
                                    <div class="form-group-zayavka">
                                        <label for="yourphone">Ваш телефон:</label>
                                        <input type="text" class="form-control-zayavka" style="color:black;" id="yourphone2">
                                    </div>
                                    <button type="button" id="add_zapis2" class="btn btn-statement-input btn-primary-zayavka">Заказать</button>
                                  <script>
                                    $(document).ready(function(){
                                          $('#add_zapis2').click(function(){
                                            // собираем данные с формы
                                            var yourname    = $('#yourname2').val();
                                            var yourmail    = $('#yourmail2').val();
                                            var yourphone    = $('#yourphone2').val();
                                            // отправляем данные
                                            $.ajax({
                                              url: "http://avtoshkola-v-samare.ru/tech/includes/frontend/zayavka/zayavka.lib.php", // куда отправляем
                                              type: "post", // метод передачи
                                              dataType: "json", // тип передачи данных
                                              data: { // что отправляем
                                                "yourname":  yourname,
                                                "yourmail":  yourmail,
                                                "yourphone":  yourphone
                                              },
                                              // после получения ответа сервера
                                              success: function(data){
                                                $('.messages_zapis').html(data.result); // выводим ответ сервера
                                              }
                                            });
                                                    $("#yourname2").val("");
                                                    $("#yourmail2").val("");
                                                    $("#yourphone2").val("");
                                          });
                                        });   
                                    </script>
                                  
							</div>
							</div>    
							<div class="row">
							<div class="col-md-2">
							    <img class="img-responsive" src="<?php $_SERVER['DOCUMENT_ROOT'];?>/images/avtopark/instructory/instructor-1.jpg" alt="Инструктор Ирина" />
							    <span style="text-decoration: underline;">Танская Ирина Сергеевна</span>
							</div>
							<div class="col-md-7">
							    <h4 style="margin-top: 0px;"><span style="text-decoration: underline;">Танская Ирина Сергеевна</span></h4>
								<p>Преподаватель по предмету: Мастер производственного обучения</p>
<p>Образование: Мурманское медицинское училище – медицинская сестра</p>
<p>Дополнительное образование: удостоверение о краткосрочном повышении квалификации №0189/10&nbsp; от 09.03.2010г., №0100/2014 от 08.04.2014г.</p>
							</div>
							<div class="col-md-3">
							    <h4><strong>Записаться на занятия</strong></h4>
							    <div class="messages_zapis"></div>
							        <div class="form-group-zayavka">
                                        <label for="yourname">Ваше имя:</label>
                                        <input type="text" class="form-control-zayavka" style="color:black;" id="yourname21">
                                    </div>
                                    <div class="form-group-zayavka">
                                        <label for="yourmail">Ваш email:</label>
                                        <input type="text" class="form-control-zayavka" style="color:black;" id="yourmail21">
                                    </div>
                                    <div class="form-group-zayavka">
                                        <label for="yourphone">Ваш телефон:</label>
                                        <input type="text" class="form-control-zayavka" style="color:black;" id="yourphone21">
                                    </div>
                                    <button type="button" id="add_zapis21" class="btn btn-statement-input btn-primary-zayavka">Заказать</button>
                                  <script>
                                    $(document).ready(function(){
                                          $('#add_zapis21').click(function(){
                                            // собираем данные с формы
                                            var yourname    = $('#yourname21').val();
                                            var yourmail    = $('#yourmail21').val();
                                            var yourphone    = $('#yourphone21').val();
                                            // отправляем данные
                                            $.ajax({
                                              url: "http://avtoshkola-v-samare.ru/tech/includes/frontend/zayavka/zayavka.lib.php", // куда отправляем
                                              type: "post", // метод передачи
                                              dataType: "json", // тип передачи данных
                                              data: { // что отправляем
                                                "yourname":  yourname,
                                                "yourmail":  yourmail,
                                                "yourphone":  yourphone
                                              },
                                              // после получения ответа сервера
                                              success: function(data){
                                                $('.messages_zapis').html(data.result); // выводим ответ сервера
                                              }
                                            });
                                                    $("#yourname21").val("");
                                                    $("#yourmail21").val("");
                                                    $("#yourphone21").val("");
                                          });
                                        });   
                                    </script>
                                  
							</div>
							</div>   
							 
							 <div class="row">
							<div class="col-md-2">
							    <img class="img-responsive" src="<?php $_SERVER['DOCUMENT_ROOT'];?>/images/avtopark/instructory/instructor-1.jpg" alt="Инструктор Дмитрий" />
							    <span style="text-decoration: underline;">Артемьев Дмитрий Александрович</span>
							</div>
							<div class="col-md-7">
							    <h4 style="margin-top: 0px;"><span style="text-decoration: underline;">Артемьев Дмитрий Александрович</span></h4>
								<p>Преподаватель по предмету: Мастер производственного обучения</p>
<p>Образование: ГОУВПО «Самарский государственный архитектурно-строительный университет» - инженер</p>
<p>Дополнительное образование: удостоверение о краткосрочном&nbsp; повышении квалификации №0103/2014 от 08.04.2014г., &nbsp;№0102/2014 от 08.04.2014г.</p>
							</div>
							<div class="col-md-3">
							    <h4><strong>Записаться на занятия</strong></h4>
							    <div class="messages_zapis"></div>
							        <div class="form-group-zayavka">
                                        <label for="yourname">Ваше имя:</label>
                                        <input type="text" class="form-control-zayavka" style="color:black;" id="yourname22">
                                    </div>
                                    <div class="form-group-zayavka">
                                        <label for="yourmail">Ваш email:</label>
                                        <input type="text" class="form-control-zayavka" style="color:black;" id="yourmail22">
                                    </div>
                                    <div class="form-group-zayavka">
                                        <label for="yourphone">Ваш телефон:</label>
                                        <input type="text" class="form-control-zayavka" style="color:black;" id="yourphone22">
                                    </div>
                                    <button type="button" id="add_zapis22" class="btn btn-statement-input btn-primary-zayavka">Заказать</button>
                                  <script>
                                    $(document).ready(function(){
                                          $('#add_zapis22').click(function(){
                                            // собираем данные с формы
                                            var yourname    = $('#yourname22').val();
                                            var yourmail    = $('#yourmail22').val();
                                            var yourphone    = $('#yourphone22').val();
                                            // отправляем данные
                                            $.ajax({
                                              url: "http://avtoshkola-v-samare.ru/tech/includes/frontend/zayavka/zayavka.lib.php", // куда отправляем
                                              type: "post", // метод передачи
                                              dataType: "json", // тип передачи данных
                                              data: { // что отправляем
                                                "yourname":  yourname,
                                                "yourmail":  yourmail,
                                                "yourphone":  yourphone
                                              },
                                              // после получения ответа сервера
                                              success: function(data){
                                                $('.messages_zapis').html(data.result); // выводим ответ сервера
                                              }
                                            });
                                                    $("#yourname22").val("");
                                                    $("#yourmail22").val("");
                                                    $("#yourphone22").val("");
                                          });
                                        });   
                                    </script>
                                  
							</div>
							</div>
							
							<div class="row">
							<div class="col-md-2">
							    <img class="img-responsive" src="<?php $_SERVER['DOCUMENT_ROOT'];?>/images/avtopark/instructory/instructor-1.jpg" alt="Инструктор Владимир" />
							    <span style="text-decoration: underline;">Воробьев Владимир Анатольевич</span>
							</div>
							<div class="col-md-7">
							    <h4 style="margin-top: 0px;"><span style="text-decoration: underline;">Воробьев Владимир Анатольевич</span></h4>
								<p>Преподаватель по предмету: Мастер производственного обучения</p>
<p>Образование: Куйбышевский авиационный техникум – техник-технолог</p>
<p>Дополнительное образование: удостоверение о&nbsp; повышении квалификации №000054 от 09.03.2010г., №0101/2014 от 08.04.2014г.</p>
							</div>
							<div class="col-md-3">
							    <h4><strong>Записаться на занятия</strong></h4>
							    <div class="messages_zapis"></div>
							        <div class="form-group-zayavka">
                                        <label for="yourname">Ваше имя:</label>
                                        <input type="text" class="form-control-zayavka" style="color:black;" id="yourname23">
                                    </div>
                                    <div class="form-group-zayavka">
                                        <label for="yourmail">Ваш email:</label>
                                        <input type="text" class="form-control-zayavka" style="color:black;" id="yourmail23">
                                    </div>
                                    <div class="form-group-zayavka">
                                        <label for="yourphone">Ваш телефон:</label>
                                        <input type="text" class="form-control-zayavka" style="color:black;" id="yourphone23">
                                    </div>
                                    <button type="button" id="add_zapis23" class="btn btn-statement-input btn-primary-zayavka">Заказать</button>
                                  <script>
                                    $(document).ready(function(){
                                          $('#add_zapis23').click(function(){
                                            // собираем данные с формы
                                            var yourname    = $('#yourname23').val();
                                            var yourmail    = $('#yourmail23').val();
                                            var yourphone    = $('#yourphone23').val();
                                            // отправляем данные
                                            $.ajax({
                                              url: "http://avtoshkola-v-samare.ru/tech/includes/frontend/zayavka/zayavka.lib.php", // куда отправляем
                                              type: "post", // метод передачи
                                              dataType: "json", // тип передачи данных
                                              data: { // что отправляем
                                                "yourname":  yourname,
                                                "yourmail":  yourmail,
                                                "yourphone":  yourphone
                                              },
                                              // после получения ответа сервера
                                              success: function(data){
                                                $('.messages_zapis').html(data.result); // выводим ответ сервера
                                              }
                                            });
                                                    $("#yourname23").val("");
                                                    $("#yourmail23").val("");
                                                    $("#yourphone23").val("");
                                          });
                                        });   
                                    </script>
                                  
							</div>
							</div>
							
							<div class="row">
							<div class="col-md-2">
							    <img class="img-responsive" src="<?php $_SERVER['DOCUMENT_ROOT'];?>/images/avtopark/instructory/instructor-1.jpg" alt="Инструктор Виталий" />
							    <span style="text-decoration: underline;">Милютин Виталий  Юрьевич</span>
							</div>
							<div class="col-md-7">
							    <h4 style="margin-top: 0px;"><span style="text-decoration: underline;">Милютин Виталий  Юрьевич</span></h4>
							<p>Преподаватель по предмету: Мастер производственного обучения</p>
<p>Образование: ГБОУСПО «Самарский механико-технологический техникум» - монтаж и техническая эксплуатация промышленного оборудования</p>
<p>Дополнительное образование: удостоверение о повышении квалификации №63АА 000782&nbsp; от 26.09.2014г.</p>
<p>№63АА 000592 от 17.04.2014г.</p>
							</div>
							<div class="col-md-3">
							    <h4><strong>Записаться на занятия</strong></h4>
							    <div class="messages_zapis"></div>
							        <div class="form-group-zayavka">
                                        <label for="yourname">Ваше имя:</label>
                                        <input type="text" class="form-control-zayavka" style="color:black;" id="yourname24">
                                    </div>
                                    <div class="form-group-zayavka">
                                        <label for="yourmail">Ваш email:</label>
                                        <input type="text" class="form-control-zayavka" style="color:black;" id="yourmail24">
                                    </div>
                                    <div class="form-group-zayavka">
                                        <label for="yourphone">Ваш телефон:</label>
                                        <input type="text" class="form-control-zayavka" style="color:black;" id="yourphone24">
                                    </div>
                                    <button type="button" id="add_zapis24" class="btn btn-statement-input btn-primary-zayavka">Заказать</button>
                                  <script>
                                    $(document).ready(function(){
                                          $('#add_zapis24').click(function(){
                                            // собираем данные с формы
                                            var yourname    = $('#yourname24').val();
                                            var yourmail    = $('#yourmail24').val();
                                            var yourphone    = $('#yourphone24').val();
                                            // отправляем данные
                                            $.ajax({
                                              url: "http://avtoshkola-v-samare.ru/tech/includes/frontend/zayavka/zayavka.lib.php", // куда отправляем
                                              type: "post", // метод передачи
                                              dataType: "json", // тип передачи данных
                                              data: { // что отправляем
                                                "yourname":  yourname,
                                                "yourmail":  yourmail,
                                                "yourphone":  yourphone
                                              },
                                              // после получения ответа сервера
                                              success: function(data){
                                                $('.messages_zapis').html(data.result); // выводим ответ сервера
                                              }
                                            });
                                                    $("#yourname24").val("");
                                                    $("#yourmail24").val("");
                                                    $("#yourphone24").val("");
                                          });
                                        });   
                                    </script>
                                  
							</div>
							</div>
							 
							<div class="col-md-12" style="margin-bottom:20px;">
								<h3>Преподаватели</h3></h3>
							</div>
							<div class="col-md-12">
							    <div class="row">
    							    <div class="col-md-3">
        							    <img class="img-responsive" src="<?php $_SERVER['DOCUMENT_ROOT'];?>/images/avtopark/instructory/instructor-1.jpg" alt="Преподаватель Дмитрий" />
        							    <span style="text-decoration: underline;">Артемьев Дмитрий Александрович</span>
        							</div>
        							<div class="col-md-9">
        							    <h4 style="margin-top: 0px;"><span style="text-decoration: underline;">Артемьев Дмитрий Александрович</span></h4>
        								Преподаватель по предмету: Основы законодательства с сфере дорожного движения. Основы управления ТС. Устройство и ТО ТС кат. «А», «В» как объектов управления. Основы управления ТС кат. «А», « В». Организация и выполнение грузовых перевозок автомобильным транспортом. Организация и выполнение пассажирских перевозок автомобильным транспортом.
<p>Образование: ГОУВПО «Самарский государственный архитектурно-строительный университет» - инженер</p>
<p>Дополнительное образование: удостоверение о краткосрочном повышении квалификации №0102/2014 от 08.04.2014г.</p>
        							</div>
    							</div>
    							<div class="row">
    							    <div class="col-md-3">
        							    <img class="img-responsive" src="<?php $_SERVER['DOCUMENT_ROOT'];?>/images/avtopark/instructory/instructor-1.jpg" alt="Преподаватель Дмитрий" />
        							    <span style="text-decoration: underline;">Воробьев Дмитрий Владимирович</span>
        							</div>
        							<div class="col-md-9">
        							    <h4 style="margin-top: 0px;"><span style="text-decoration: underline;">Воробьев Дмитрий Владимирович</span></h4>
        								<p>Преподаватель по предмету: Основы законодательства с сфере дорожного движения. Основы управления ТС. Устройство и ТО ТС кат. «А», «В» как объектов управления. Основы управления ТС кат. «А», « В». Организация и выполнение грузовых перевозок автомобильным транспортом. Организация и выполнение пассажирских перевозок автомобильным транспортом.</p>
<p>Образование: НОУ «СОВРЕМЕННАЯ ГУМАНИТАРНАЯ АКАДЕМИЯ» &nbsp;- Юриспруденция</p>
<p>Дополнительное образование: удостоверение о краткосрочном повышении квалификации №0099/2014 от 08.04.2014г.</p>
        							</div>
    							</div>
							    <div class="row">
    							    <div class="col-md-3">
        							    <img class="img-responsive" src="<?php $_SERVER['DOCUMENT_ROOT'];?>/images/avtopark/instructory/instructor-1.jpg" alt="Преподаватель Татьяна" />
        							    <span style="text-decoration: underline;">Бадаева Татьяна Юрьевна</span>
        							</div>
        							<div class="col-md-9">
        							    <h4 style="margin-top: 0px;"><span style="text-decoration: underline;">Бадаева Татьяна Юрьевна</span></h4>
        								<p>Преподаватель по предмету: Основы законодательства с сфере дорожного движения. Основы управления ТС.</p>
        								<p>Образование: ФГБОУВПО «Самарский государственный университет» - по специальности «Биология»</p>
        								<p>Дополнительное образование: удостоверение о краткосрочном повышении квалификации №175/12&nbsp; от 18.09.2012г.</p>
        								<p>&nbsp;</p>
        							</div>
    							</div>
    							<div class="row">
								<div class="col-md-3">
    							    <img class="img-responsive" src="<?php $_SERVER['DOCUMENT_ROOT'];?>/images/avtopark/instructory/instructor-1.jpg" alt="Преподаватель Александр" />
    							    <span style="text-decoration: underline;">Екатеринин Александр Васильевич</span>
    							</div>
    							<div class="col-md-9">
    							    <h4 style="margin-top: 0px;"><span style="text-decoration: underline;">Екатеринин Александр Васильевич</span></h4>
    								<p>Преподаватель по предмету: Основы законодательства с сфере дорожного движения. Основы управления ТС. Устройство и ТО ТС кат. «А», «В» как объектов управления. Основы управления ТС кат. «А», « В». Организация и выполнение грузовых перевозок автомобильным транспортом. Организация и выполнение пассажирских перевозок автомобильным транспортом.</p>
    								<p>Образование: Куйбышевский авиационный институт им. С.П. Королева – инженер-механик</p>
    								<p>Дополнительное образование: удостоверение о краткосрочном&nbsp; повышении квалификации №0191/10&nbsp; от 19.23.2010г.</p>
    								<p>&nbsp;</p>
    							</div>
    							</div>
    							<div class="row">
								<div class="col-md-3">
    							    <img class="img-responsive" src="<?php $_SERVER['DOCUMENT_ROOT'];?>/images/avtopark/instructory/instructor-1.jpg" alt="Преподаватель Сергей" />
    							    <span style="text-decoration: underline;">Фомин Сергей Александрович</span>
    							</div>
    							<div class="col-md-9">
    							    <h4 style="margin-top: 0px;"><span style="text-decoration: underline;">Фомин Сергей Александрович</span></h4>
    								<p>Преподаватель по предмету: Первая помощь при дорожно-транспортном происшествии</p>
								<p>Образование: Сызранское медицинское училище – фельдшер</p>
								<p>&nbsp;</p>
    							</div>
    							</div>
    							<div class="row">
								<div class="col-md-3">
    							    <img class="img-responsive" src="<?php $_SERVER['DOCUMENT_ROOT'];?>/images/avtopark/instructory/instructor-1.jpg" alt="Преподаватель Галина" />
    							    <span style="text-decoration: underline;">Прыткова Галина Ивановна</span>
    							</div>
    							<div class="col-md-9">
    							    <h4 style="margin-top: 0px;"><span style="text-decoration: underline;">Прыткова Галина Ивановна</span></h4>
    								<p>Преподаватель по предмету: Психофизиологические основы деятельности водителя</p>
								<p>Образование: «Восточный институт экономики, гуманитарных наук, управления и права» -</p>
								<p>психолог, преподаватель психологии</p>
								<p>&nbsp;</p>
    							</div>
    							</div>
							</div>
						</div>
					</div>
				</section>
			</main>
			<footer>
				<div class="container-fluid" id="footer">
					<div class="container">
						<?php include $_SERVER['DOCUMENT_ROOT']."/tech/includes/footer.php"; ?>