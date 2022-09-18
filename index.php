<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<title>Atlata</title>
	<!-- facicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="icons/favicon/apple-touch-icon.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="icons/favicon/favicon-32x32.png" />	
	<link rel="icon" type="image/png" sizes="16x16" href="icons/favicon/favicon-16x16.png" />
	<link rel="manifest" href="icons/favicon/site.webmanifest" />
	<link rel="mask-icon" href="icons/favicon/safari-pinned-tab.svg" color="#5bbad5" />
	<meta name="msapplication-TileColor" content="#da532c" />
	<meta name="theme-color" content="#ffffff" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
	<link rel="stylesheet" href="css/style.min.css" />
</head>
<body>
	<section class="promo">
		<div class="container">
			<header class="header">
				<a href="index.php"><img src="icons/logo_s.svg" alt="" class="header__logo" /></a>
				<nav class="nav">
					<div class="header__links">
						<a href="shop.php" class="header__link">МАГАЗИНЫ</a> <a href="parking.php" class="header__link">ПАРКОВКА</a> <a href="news.php" class="header__link">АКЦИИ И НОВОСТИ</a>
						<a href="rent.php" class="header__link">АРЕНДАТОРАМ</a>
					</div>
				</nav>
				<div class="header__icons">
					<a href="" class="header__icon">
						<img src="icons/search.svg" alt="" /> 
					</a>
					<a href="" class="header__icon">
						<img src="icons/bag.svg" alt="" /> 
					</a>
					<a href="login.php" class="header__icon">
						<img src="icons/account.svg" alt="" />
					</a>
				</div>
			</header>
		</div>
		<div class="promo__bg">
			<video preload="auto" loop muted autoplay class="promo__video">
				<source src="img/White-Triangles-_-Live-WallPaper.webm" type="video/webm" />
				<source src="img/White Triangles _ Live WallPaper.mp4" type="video/mp4" />
			</video>
		</div>
		<img src="icons/logo.svg" alt="" class="promo__title" />
		<div class="promo__descr">
			инновационный торговый центр<br />
			для культурного общества
		</div>
	</section>
	<section class="about">
		<div class="container">
				<div class="about__block">
					<div class="title">О нас</div>
					<p class="about__descr">
						ATLATA – это новый центр притяжения для современных городских жителей, расположенный прямо у метро Таганская. Футуристичный дизайн торгово-развлекательного центра превращает шопинг в настоящее приключение, а богатый
						выбор развлечений, среди которых современный кинотеатр и рестораны на любой вкус, позволит отлично провести время всей семьей
					</p>
				</div>
		</div>
	</section>
	<section class="contacts">
		<div class="container">
				<div class="title_center"><div class="title">Контакты</div></div>
				<div class="contacts-block">
					<div class="contacts_cart">
						<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A17f2188e944d0fcb4f4ce63c5731934ff413c0fa7ce7fe8e1181a7f077fdcf8a&amp;source=constructor" width="594" height="251" frameborder="0"></iframe>
						<div class="contacts__text">
								Номер телефона: <a href="tel:+79906516624">+7 990 651 66 24</a><br />
								email: atlata_m@gmail.com<br />
								Таганская улица, 54
						</div>
					</div>
					<img src="img/contacts.png" alt="" class="contacts__img" />
				</div>
		</div>
	</section>
	<section class="swiper">
		<div class="container">
			<div class="title_center">
				<h1 class="title">Фотогалерея</h1>
			</div>
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<img src="img/image 2.png" alt="" class="swiper-slide">
					</div>
					<div class="swiper-slide">
						<img src="img/image 4.png" alt="" class="swiper-slide">
					</div>
					<div class="swiper-slide">
						<img src="img/image 3.png" alt="" class="swiper-slide">
					</div>
					<div class="swiper-slide">
						<img src="img/image 13.png" alt="" class="swiper-slide">
					</div>
					<div class="swiper-slide">
						<img src="img/image 11.png" alt="" class="swiper-slide">
					</div>
					<div class="swiper-slide">
						<img src="img/image 12.png" alt="" class="swiper-slide">
					</div>
				</div>
				<div class="swiper-scrollbar"></div>
			</div>
			<button class="swiper-button-prev"></button>
			<button class="swiper-button-next"></button>
		</div>
	</section>
	<footer class="footer">
		<div class="container">
			<div class="footer-wrapper">
				<a href="index.php"><img src="icons/logo.svg" alt="" class="footer__logo"></a>
				<div class="footer__links">
					<a href="shop.php" class="header__link">МАГАЗИНЫ</a>
					<a href="parking.php" class="header__link">ПАРКОВКА</a>
					<a href="news.php" class="header__link">АКЦИИ И НОВОСТИ</a>
					<a href="index.php" class="header__link">АРЕНДАТОРАМ</a>
				</div>
			</div>
			<div class="footer__divider"></div>
			<div class="footer__requisites">
				ОГРН 1147746888410, ИНН 7721841549
			</div>
		</div>
	</footer>
	<script src="js/swiper.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>