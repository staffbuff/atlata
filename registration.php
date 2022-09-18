<?php
    session_start(); //запуск сессии
    if(isset($_POST["Client_email"]) && isset($_POST["Client_password"])){

        require "database.php"; //подключение базы данных с описанными классами
        $db = new Database(); //присваивание базы данных переменной
        
        $sql = "INSERT INTO atlata.clients (Client_email, Client_password, Client_surname, Client_name) VALUES (:Client_email, :Client_password, :Client_surname, :Client_name)"; //команда добавления данных клиента в таблицу о клиентах

        $parm = array( //параметры добавления данных
            "Client_email" => $_POST["Client_email"],
            "Client_surname" => $_POST["Client_surname"],
            "Client_name" => $_POST["Client_name"],
            "Client_password" => md5($_POST["Client_password"])); //функция для шифрования пароля

        $db->add($sql, $parm); //выполнение запроса
        header('Location: login.php'); //переадресация

    if ($_SESSION['user']) {
        header('Location: account.php');
    }
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
				<a href="" class="header__icon"><img src="icons/search.svg" alt="" /> </a>
				<a href="" class="header__icon"><img src="icons/bag.svg" alt="" /> </a>
				<a href="account.php" class="header__icon"><img src="icons/account.svg" alt="" /></a>
			</div>
		</header>
	</div>
	<section class="login">
		<div class="container">
			<div class="login-wrapper">
				<div class="title_center">
					<h1 class="title">РЕГИСТРАЦИЯ</h1>
				</div>
				<form id="user" method="POST">
					<label for="user" class="overlabel">
					Фамилия:
					</label> </br>
					<input id="user" type="text" name="Client_surname" required value="" tabindex="2" />
					<br>
					<label for="user" class="overlabel">
					Имя:
					</label> </br>
					<input id="user" type="text" name="Client_name" required value="" tabindex="2" />
					<label for="user" class="overlabel">
					Email:
					</label> </br>
					<input id="user" type="email" name="Client_email" required value="" tabindex="2" />
					<br>
					<label for="user" class="overlabel">
					Пароль:
					</label> </br>
					<input id="user" type="password" name="Client_password" required value="" tabindex="2" />
					<button class="button button__send">Отправить</button>
				</form>
				<a href="login.php" class="login-wrapper__link">Уже есть аккаунт?</a>
			</div>
		</div>
	</section>
</body>