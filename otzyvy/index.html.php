<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
			<title>Отзывы - Автомобилист63</title>
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
								  <li><a href="/otzyvy/">Отзывы</a></li>
								</ol>
							</div>
						</div>	
						<div class="row">
							<div class="col-md-12">
								<h1>Отзывы</h1>
							</div>
							<div class="col-md-12">
							    <?php include $_SERVER['DOCUMENT_ROOT']."/tech/includes/frontend/reviews/getreviews_modded.php" ?>
							</div>
							<div class="col-md-12">
							    <h2>Добавить отзыв</h2>
							</div>
							<div class="col-md-12">
							    <?php include $_SERVER['DOCUMENT_ROOT']."/tech/includes/frontend/reviews/review.inc.php" ?>
							</div>
			</main>
			<footer>
				<div class="container-fluid" id="footer">
					<div class="container">
						<?php include $_SERVER['DOCUMENT_ROOT']."/tech/includes/footer.php"; ?>