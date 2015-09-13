<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
			<title>Документы - Основные сведения - Автомобилист63</title>
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
								  <li><a href="/documenty/">Документы</a></li>
								  <li><a href="/documenty/osnovnye-svedenija/">Основные сведения</a></li>
								</ol>
							</div>
							<div class="col-md-12">
								<h1>Основные сведения</h1>
							</div>
							<div class="col-md-12 embed">
							    <iframe src="osnovnye-svedenija.pdf" type="pdf" width="90%" height="1000"></iframe>
								<!--<embed src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/documenty/osnovnye-svedenija/osnovnye-svedenija.pdf" type="pdf" width="90%" height="800"></embed>-->
							</div>
						</div>
					</div>
				</section>
			</main>
			<footer>
				<div class="container-fluid" id="footer">
					<div class="container">
						<?php include $_SERVER['DOCUMENT_ROOT']."/tech/includes/footer.php"; ?>