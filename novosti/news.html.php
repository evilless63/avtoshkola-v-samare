<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
			<title>Новости - Автомобилист63</title>
			<!-- HEADER, MENU, BANNER -->	
			<?php 

				include $_SERVER['DOCUMENT_ROOT']."/tech/includes/header.php";
				include $_SERVER['DOCUMENT_ROOT']."/tech/includes/navigation.php";
			?>	
			<main class="container-fluid"  style="padding: 0px;margin-bottom:600px;">
				<section>
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ol class="breadcrumb">
								  <li><a href="/">Главная</a></li>
								  <li><a href="/novosti/">Новости</a></li>
								</ol>
							</div>
							<div class="col-md-12">
								<h1>Новости</h1>
							</div>
						</div>	
					</div>	
							
								<?php include $_SERVER['DOCUMENT_ROOT']."/tech/includes/frontend/news/news_user.inc.php"; ?>
							
						
					
				</section>
			</main>
			<footer>
				<div class="container-fluid" id="footer">
					<div class="container">
						<?php include $_SERVER['DOCUMENT_ROOT']."/tech/includes/footer.php"; ?>
				