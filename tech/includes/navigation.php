	<div id="sticky" class="sticky-element">
	<div class="sticky-anchor"></div>
	<div class="container-fluid" id="navigation">	
		<nav class="navbar navbar-default" role="navigation">
		  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header" style="text-align:center;">
		        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		            <p style="color: #fff; margin: 5px 20px;display:inline;">Меню сайта</p>
		          </button>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav dropdown">
		           <li class="dropdown-top">
                     <a class="dropdown-top" href="<?php $_SERBER['DOCUMENT_ROOT']?>/o-shkole/">О школе</a>
                     <ul class="dropdown-inside">
                      <li><a href="<?php $_SERBER['DOCUMENT_ROOT']?>/o-shkole/index.php?id=klassy-obuchenija">Классы обучения</a></li>
                      <li><a href="<?php $_SERBER['DOCUMENT_ROOT']?>/o-shkole/index.php?id=personal">Персонал</a></li>
                      <li><a href="<?php $_SERBER['DOCUMENT_ROOT']?>/o-shkole/index.php?id=avtodrom">Автодром</a></li>
                      <li><a href="<?php $_SERBER['DOCUMENT_ROOT']?>/o-shkole/index.php?id=avtopark">Автопарк</a></li>
                      <li><a href="<?php $_SERBER['DOCUMENT_ROOT']?>/o-shkole/index.php?id=akcii">Акции</a></li>
                     </ul>
                    </li>
		        <li><a href="<?php $_SERBER['DOCUMENT_ROOT']?>/novosti/">Новости</a></li>
		            <li class="dropdown-top">
                     <a class="dropdown-top" href="#">Обучение</a>
                     <ul class="dropdown-inside">
                      <li><a href="<?php $_SERBER['DOCUMENT_ROOT']?>/obuchenie/index.php?id=uslugi-i-ceny">Услуги и цены</a></li>
                      <li><a href="<?php $_SERBER['DOCUMENT_ROOT']?>/obuchenie/">Экзамен в ГИБДД</a></li>
                     </ul>
                    </li>
		        <li><a href="<?php $_SERBER['DOCUMENT_ROOT']?>/documenty/">Документы</a></li>
		        <li><a href="<?php $_SERBER['DOCUMENT_ROOT']?>/otzyvy/">Отзывы</a></li>
		        <li><a href="<?php $_SERBER['DOCUMENT_ROOT']?>/stati/">Статьи</a></li>
		        <li><a href="<?php $_SERBER['DOCUMENT_ROOT']?>/kontakty/">Контакты</a></li>
		      </ul>
		      <form class="navbar-form navbar-right" role="search">
		        <button type="button" class="button-stmnt btn btn-primary btn-lg" data-toggle="modal" data-target="#statement">Подать заявку</button>
				<?php include $_SERVER['DOCUMENT_ROOT']."/tech/includes/frontend/statements/statement.inc.php"; ?>	      
		      </form>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</div>	
	</div>