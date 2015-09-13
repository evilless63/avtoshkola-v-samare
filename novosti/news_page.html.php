<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
			<title>Новости - <?php echo $news_title;?> - Автомобилист63</title>
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
								  <li><a href="/novosti/">Новости</a></li>
								  <li><a href="#"><?php echo $news_title;?></a></li>
								</ol>
							</div>
							<div class="col-md-12">
								<h1>Новости</h1>
							</div>
							<div class="col-md-12">
								<?php include $_SERVER['DOCUMENT_ROOT']."/tech/includes/frontend/news/news_user_page.inc.php"; ?>
							</div>
							<div class="col-md-12">
								<?php include $_SERVER['DOCUMENT_ROOT']."/tech/includes/frontend/reviews/add_ticket111.inc.php"; ?>
							</div>
						</div>
					</div>
				</section>
			</main>
			<footer>
				<div class="container-fluid" id="footer">
					<div class="container">
						<?php include $_SERVER['DOCUMENT_ROOT']."/tech/includes/footer.php"; ?>