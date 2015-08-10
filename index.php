<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="icon" href="/wp-content/uploads/2015/03/657068.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/wp-content/uploads/2015/03/657068.ico" type="image/x-icon" />
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaOWKyamSxMTXclSDFmJ2N4Am20PCTD6I&sensor=FALSE">
    </script>
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <div class="wrapper">
		<div class="content">
			<div class="contain">
				<header class="HomeHeader">
					<div class="HomeHeader__logo">
						<a href="<?php echo get_home_url();?>">
							<img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="placeholder+image">
						</a>
					</div>
					<div class="HomeHeader__nav">
						<ul>
							<li><a href="#nowhere">Главная</a></li>
							<li><a href="#nowhere">Об агенстве</a></li>
							<li><a href="#nowhere">Услуги</a></li>
							<li><a href="#nowhere">Контакты</a></li>
						</ul>
					</div>
				</header>
				<section class="banner">
					<div class="banner__content">
						<h2>УВЕРЕННАЯ ИГРА <br>
НА ПРАВОВОМ 				ПОЛЕ С “НАЗВАНИЕ АГЕНСТВА”!</h2>
						<p>В современном мире роль права в каждом аспекте жизни еще более значима. Правовое подтверждение и закрепление обязательно в динамике текущих дней</p>
					</div>
					<nav class="banner__nav">
						<ul>
							<li><a href="#nowhere">ПРОДАЖА ГОТОВЫХ КОМПАНИЙ </a></li>
							<li><a href="#nowhere">РЕГИСТРАЦИЯ БИЗНЕСА</a></li>
							<li><a href="#nowhere">ПРЕДСТАВИТЕЛЬСТВО ИНТЕРЕСОВ</a></li>
							<li><a href="#nowhere">ЭКСПРЕСС-ЛИКВИДАЦИЯ ПРЕДПРИЯТИЯ </a></li>
							<li><a href="#nowhere">СОПРОВОЖДЕНИЕ</a></li>
						</ul>
					</nav>
				</section>
			</div>

		</div>
    </div>
<?php wp_footer(); ?>
</body>
</html>