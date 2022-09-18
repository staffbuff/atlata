<?php
    session_start();
    require "db.php";
    if (!empty($_SESSION['user'])) {  
    header('Location: account.php');
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
    <?php
        //Проверка на существование переменных логина и пароля в POST-запросе
        if(isset($_POST["Client_email"]) && isset($_POST["Client_password"])) { /*если поля логин и пароль заполнены, то... */
            $sql = "SELECT * FROM Atlata.clients WHERE Client_email = :Client_email AND BINARY Client_password = :Client_password"; /*создаем запрос sql для получения записи пользователя из бд с таким же и логином и паролем */
            $query = $pdo->prepare($sql);
            // $parm = array(
            $query->execute(array(
                "Client_email" => $_POST["Client_email"],
                "Client_password" => md5($_POST["Client_password"])));
            if($query->rowCount() == 1) {
                $user = $query->fetch(PDO::FETCH_ASSOC);
                    $_SESSION['user'] = [ 
                        "ID_Clients" => $user['ID_Clients'],
                        "Client_email" => $user['Client_email'],
                        "Client_password" => $user['Client_password'],
                        "Client_surname" => $user['Client_surname'],
                        "Client_name" => $user['Client_name']
                    ];
                $_SESSION['message'] = 'Вы вышли из аккаунта';
                header("Location: account.php");
            }
            else { 
                $_SESSION['message'] = 'Неверный логин или пароль';
                include("auth.php");   
            }
        }
        else {
            //Если форма авторизации не заполнена, то повторно подключается форма авторизации.
            include("auth.php");
        }
    ?>   
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