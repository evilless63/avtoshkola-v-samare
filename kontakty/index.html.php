<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
			<title>Контакты - Автомобилист63</title>
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
								  <li><a href="/kontakty/">Контакты</a></li>
								</ol>
							</div>
						</div>	
						<div class="row">
							<div class="col-md-12">
								<h1>Контакты</h1>
							</div>
							<div class="col-md-7 contacts-p">
								<p>443029, г. Самара ул. Солнечная, д.28, офис №н6</p>
								<hr>
								<p>Самарская обл., Красноярский район, с. Красный Яр, ул. Кооперативная, д.99</p>
							</div>
							<div class="col-md-5 contacts-p">
								<p>тел. 8 (927) 762-44-44</p>
							</div>
						</div>
					</div>
				</section>	
			</main>
			<aside>
					<div class="container-fluid" style="    padding: 0; margin-bottom: 10%">
								<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=RgZ5AEaB_Iglh5GCZ-DIeWHE4IY2e9Sv&width=100%&height=450"></script>
					</div>
					<div class="container-fluid" style="    padding: 0; margin-bottom: 10%">
								<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=pczCBhJz0QlgvLFOhAqrZv-QNtcfOtcA&width=100%&height=450"></script>
					</div>
				
			</aside>
			<footer>
				<div class="container-fluid" id="footer">
					<div class="container">
						<?php include $_SERVER['DOCUMENT_ROOT']."/tech/includes/footer.php"; ?>