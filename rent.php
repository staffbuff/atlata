<?php
    session_start(); //запуск сессии
    if(isset($_POST["user_FullName"]) && isset($_POST["user_Email"]) && isset($_POST["rent_text"])){

        require "database.php"; //подключение базы данных с описанными классами
        $db = new Database(); //присваивание базы данных переменной
        
        $sql = "INSERT INTO Atlata.rentrequest (user_FullName, user_Email, rent_text) VALUES (:user_FullName, :user_Email, :rent_text)"; //команда добавления данных клиента в таблицу о клиентах

        $parm = array( //параметры добавления данных
            "user_FullName" => $_POST["user_FullName"],
            "user_Email" => $_POST["user_Email"],
            "rent_text" => $_POST["rent_text"]);

        $db->add($sql, $parm); //выполнение запроса
        header('Location: index.php'); //переадресация
}
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
					<a href="shop.php" class="header__link">МАГАЗИНЫ</a> <a href="parking.php" class="header__link">ПАРКОВКА</a> <a href="news.php" class="header__link">АКЦИИ И НОВОСТИ</a>
					<a href="rent.php" class="header__link">АРЕНДАТОРАМ</a>
				</div>
			</nav>
			<div class="header__icons">
				<a href="" class="header__icon"><img src="icons/search.svg" alt="" /> </a><a href="" class="header__icon"><img src="icons/bag.svg" alt="" /> </a>
				<a href="account.php" class="header__icon"><img src="icons/account.svg" alt="" /></a>
			</div>
		</header>
	</div>
	<section class="login">
		<div class="container">
			<div class="login-wrapper">
				<div class="title_center">
					<h1 class="title">ЗАЯВКА НА АРЕНДУ</h1>
				</div>
				<form id="user" method="POST">
					<label for="user" class="overlabel">
					Имя:
					</label> </br>
					<input id="user" type="text" name="user_FullName" required value="" tabindex="2" />
					<br>
					<label for="user" class="overlabel">
					Email:
					</label> </br>
					<input id="user" type="email" name="user_Email" required value="" tabindex="2" />
					<label for="user" class="overlabel">
					Описание:
					</label> </br>
					<input id="user" type="text" name="rent_text" required value="" tabindex="2" />
					<button class="button button__send">Отправить</button>
				</form>
			</div>
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
</body>