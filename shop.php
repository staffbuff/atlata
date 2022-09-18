<?php
    // запуск сессии (с глобальной переменной), которая будет использована позже
    session_start();
    require "database.php";
    $db = new Database();

    $sql = "SELECT * FROM Atlata.shops  ORDER BY ID_Shops ASC LIMIT 4";
    $parm = array();
    $shops1 = $db->get_all($sql, $parm);


    $sql = "SELECT * FROM Atlata.shops  ORDER BY ID_Shops ASC LIMIT 4, 4";
    $parm = array();
    $shops2 = $db->get_all($sql, $parm);

?> 
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
	<div class="container">
		<header class="header">
			<a href="index.php"><img src="icons/logo_s.svg" alt="" class="header__logo" /></a>
			<nav class="nav">
				<div class="header__links">
					<a href="shop.php" class="header__link">МАГАЗИНЫ</a>
					<a href="parking.php" class="header__link">ПАРКОВКА</a>
					<a href="news.php" class="header__link">АКЦИИ И НОВОСТИ</a>
					<a href="index.php" class="header__link">АРЕНДАТОРАМ</a>
				</div>
			</nav>
			<div class="header__icons">
				<a href="" class="header__icon"><img src="icons/search.svg" alt="" /> </a><a href="" class="header__icon"><img src="icons/bag.svg" alt="" /> </a>
				<a href="" class="header__icon"><img src="icons/account.svg" alt="" /></a>
			</div>
		</header>
	</div>
	<section class="shop">
		<div class="container">
			<h1 class="title">МАГАЗИНЫ</h1>
			<div class="shop-wrapper">
				<?php foreach($shops1 as $item): ?>
					<div class="shop-wrapper__card">
						<img src="icons/<?=$item["shop_icon"]?>" class="shop-wrapper__logo" alt="">
						<div class="shop-wrapper__blur">
							<img src="img/<?=$item["shop_img"]?>" alt="">
						</div>
						<div class="shop-wrapper__title"><?=$item["shop_title"]?></div>
						<div class="shop-wrapper__subtitle"><?=$item["shop_floor"]?></div>
					</div>
				<?php endforeach; ?> 
			</div>
			<div class="shop-wrapper">
				<?php foreach($shops2 as $item): ?>
					<div class="shop-wrapper__card">
						<img src="icons/<?=$item["shop_icon"]?>" class="shop-wrapper__logo" alt="">
						<div class="shop-wrapper__blur">
							<img src="img/<?=$item["shop_img"]?>" alt="">
						</div>
						<div class="shop-wrapper__title"><?=$item["shop_title"]?></div>
						<div class="shop-wrapper__subtitle"><?=$item["shop_floor"]?></div>
					</div>
				<?php endforeach; ?> 
			</div>

		</div>
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
	</section>
</body>