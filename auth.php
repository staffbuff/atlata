	<section class="login">
		<div class="container">
			<div class="login-wrapper">
				<div class="title_center">
					<h1 class="title">Войти</h1>
				</div>
				<?php
				    if (!empty($_SESSION['message'])) {
				    echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
				    }
				    unset($_SESSION['message']);
				?>
				<form id="user" method="POST">
					<label for="user" class="overlabel">
					Email:
					</label> </br>
					<input id="user" type="email" name="Client_email" required value="" tabindex="2" />
					<br>
					<label for="user" class="overlabel">
					Пароль:
					</label> </br>
					<input id="user" type="text" name="Client_password" required value="" tabindex="2" />
					<button class="button">Войти</button>
				</form>
				<a href="registration.php" class="login-wrapper__link">Зарегистрироваться</a>
			</div>
		</div>
	</section>