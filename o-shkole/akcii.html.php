<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
			<title>О школе - Акции - Автомобилист63</title>
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
								  <li><a href="/o-shkole/index.php?id=akcii/">Акции</a></li>
								</ol>
							</div>
							<div class="col-md-12">
								<h1>Акции</h1>
							</div>
							<div class="col-md-12">
								<?php include $_SERVER['DOCUMENT_ROOT']."/tech/includes/frontend/actions/actions_user.inc.php"; ?>
							</div>
						</div>
					</div>
				</section>
			</main>
			<footer>
				<div class="container-fluid" id="footer">
					<div class="container">
						<?php include $_SERVER['DOCUMENT_ROOT']."/tech/includes/footer.php"; ?>