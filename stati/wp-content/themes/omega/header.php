<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title( ' |', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/bootstrap/css/bootstrap-theme.css" rel="stylesheet">
<link href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/css/bootstrap-new.css" rel="stylesheet">
<link href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/css/fonts.css" rel="stylesheet">

<link href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/css/style.css" rel="stylesheet">


<script src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/js/jquery-1.11.3.min.js"></script>
<script src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/bootstrap/js/bootstrap.js"></script>
<script src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/fancybox/jquery.fancybox.js"></script>

<script src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/simplegallery/simplegallery.js"></script>
<script src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/megamenu/js/jquery.dcverticalmegamenu.1.3.js"></script>
<script src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/megamenu/js/jquery.hoverIntent.minified.js"></script>
<script src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/ckeditor/ckeditor.js"></script>
<script src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/slick/slick.js"></script>
<script src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/js/script_user.js"></script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> <?php omega_attr( 'body' ); ?>>
<?php do_action( 'omega_before' ); ?>
<div class="<?php echo omega_apply_atomic( 'site_container_class', 'site-container' );?>">
	<header>
			<div class="container" id="header">
				<div class="row">
					<div class="col-md-4">
						<a href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/">
							<img class="img-responsive" src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/images/logo.png"  title="Автомобилист 63. Автошкола в Самаре" alt="Автомобилист 63. Автошкола в Самаре" />
						</a>
					</div>
					<div class="col-md-3">
						<img class="img-responsive img-header" src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/images/phone_icon.png" title="Автошкола Автомобилист 63 - Телефон." alt="Автошкола Автомобилист 63 - Телефон." />
						<p class="p-header">8 (847) 455-55-05</p>
					</div>
					<div class="col-md-5">
						<img class="img-responsive img-header" src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/tech/plugins/images/adress_icon.png" title="Автошкола Автомобилист 63 - Адрес." alt="Автошкола Автомобилист 63 - Адрес." />
						<p class="p-header">г. Самара, ул. Солнечная д. 28 Офис №6</p>
					</div>
				</div>
			</div>
		</header>
	<div class="site-inner">
	    	<div id="sticky" class="sticky-element">
	<div class="sticky-anchor"></div>
	<div class="container-fluid" id="navigation">	
		<nav class="navbar navbar-default" role="navigation">
		  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
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
		<?php do_action( 'omega_before_main' ); ?>