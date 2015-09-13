<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
			<title>Главная - Автомобилист63</title>
			<!-- HEADER, MENU, BANNER -->	
			<?php 

				include $_SERVER['DOCUMENT_ROOT']."/tech/includes/header.php";
				include $_SERVER['DOCUMENT_ROOT']."/tech/includes/navigation.php";
				include $_SERVER['DOCUMENT_ROOT']."/tech/includes/slider.php";
			?>	
			<!-- MAIN_CONTENT -->	
			<main id="main-page" class="container-fluid" style="padding:0px">
				<section>
					<div class="container">
						<div class="row" id="section-1">
							<div class="col-md-12">
								<h1>Подготовка на категории</h1>
							</div>
							<div class="row" style="padding:0px;">
    							<div class="col-md-2">
    								<div class="category-first">
    									<img class="image-first-section" src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/images/category-a.png" alt="Категория А" title="Категория А" />
    									<p>Категория А</p>
    								</div>
    							</div>
    							<div class="col-md-6 col-md-offset-1">
    								<div class="category-description">
    									<p>Водительское удостоверение Категории А позволяет управлять мотоциклом</p>
    								</div>
    							</div>
    							<div class="col-md-3">
    								<div class="category-cost">
    									<p>3 мес.</p>
    									<p><span>15 500р</span></p>
    								</div>
    							</div>
							</div>
							<div class="row" style="padding:0px ;   margin-top: 60px; margin-bottom:20px">
    							<div class="col-md-2">
    								<div class="category-first">
    									<img class="image-first-section" src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/images/category-b.png" alt="Категория B" title="Категория B" />
    									<p>Категория B</p>
    								</div>
    							</div>
    							<div class="col-md-6 col-md-offset-1">
    								<div class="category-description">
    									<p>Водительское удостоверение Категории B позволяет управлять легковым автомобилем</p>
    								</div>
    							</div>
    							<div class="col-md-3">
    								<div class="category-cost">
    									<p>3 мес.</p>
    									<p><span>22 500р</span></p>
    								</div>
    							</div>
							</div>
						</div>
					</div>
				</section>
				<section>
					<div class="container">
						<div class="row" id="section-2">
							<div class="col-md-12">
								<h1>Наши преимущества</h1>
							</div>
							<div class="row" style="padding:0px ;   margin-top: 60px;">
								<div class="col-md-4 col-sm-12 col-sx-12" >
										<img class="advantages" src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/images/advantage.png" alt="Преимущество" title="Преимущество" />
										<p>Современное оборудование</p>
								</div>
								<div class="col-md-4 col-sm-12 col-sx-12" >
										<img class="advantages" src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/images/advantage.png" alt="Преимущество" title="Преимущество" />
										<p>Практичесвие занятия на автодроме</p>
								</div>
								<div class="col-md-4 col-sm-12 col-sx-12" >
										<img class="advantages" src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/images/advantage.png" alt="Преимущество" title="Преимущество" />
										<p>Индивидуальный график занятий</p>
								</div>
							</div>	
							<div class="row" style="padding:0px ;   margin-top: 60px;">	
								<div class="col-md-4 col-sm-12 col-sx-12" >
										<img class="advantages" src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/images/advantage.png" alt="Преимущество" title="Преимущество" />
										<p>Опытные инструктора по обучению вождению</p>
								</div>
								<div class="col-md-4 col-sm-12 col-sx-12" >
										<img class="advantages" src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/images/advantage.png" alt="Преимущество" title="Преимущество" />
										<p>Сопровождение на экзамене в ГИБДД</p>
								</div>
								<div class="col-md-4 col-sm-12 col-sx-12" >
										<img class="advantages" src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/images/advantage.png" alt="Преимущество" title="Преимущество" />
										<p>Не нужно ждать набора в группу - начало занятий сразу после записи</p>
								</div>
							</div>	
							<div class="row" style="padding:0px ;   margin-top: 60px;    margin-bottom: 130px;">	
								<div class="col-md-4 col-sm-12 col-sx-12" >
										<img class="advantages" src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/images/advantage.png" alt="Преимущество" title="Преимущество" />
										<p>Рассрочка без % на 2 месяца</p>
								</div>
								<div class="col-md-4 col-sm-12 col-sx-12" >
										<img class="advantages" src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/images/advantage.png" alt="Преимущество" title="Преимущество" />
										<p>Бензин входит в стоимость обучения</p>
								</div>
								<div class="col-md-4 col-sm-12 col-sx-12" >
										<img class="advantages" src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/images/advantage.png" alt="Преимущество" title="Преимущество" />
										<p>Подарки всем учащимся школы</p>
								</div>
							</div>	
						</div>
					</div>
				</section>
			</main>
			<aside>
				<div class="container-fluid" id="news">
					<div class="container">
					    <div class="col-md-12">
								<h1>Отзывы</h1>
						</div>
						<?php include $_SERVER['DOCUMENT_ROOT']."/tech/includes/frontend/news/news_main.inc.php"; ?>
					</div>
				</div>
			</aside>
			<footer>
				<div class="container-fluid" id="footer">
					<div class="container">
						<?php include $_SERVER['DOCUMENT_ROOT']."/tech/includes/footer.php"; ?>
				