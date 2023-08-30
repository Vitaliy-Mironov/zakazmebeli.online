<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_start.php'; ?>
<meta name="robots" content="noindex,nofollow" />
<title>Восстановление пароля</title>
<meta name="description" content="" />
<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_header.php'; ?>
<h1 class="">Восстановление пароля</h1>
<article>
	<div class="icon-illustration icon-terminal"></div>
	<p class="p1 icon-transparent icon-dot">Укажите, пожалуйста, Ваш адрес электронной почты, использованный для регистрации. На этот e-mail Вам будет выслан пароль.</p>
	<form class="">
		<div class="form-field">
			<label for="email">E-mail</label>
			<input type="email" onkeydown="if(event.keyCode==13){return false;}" name="user_mail" id="email" required />
		</div>
		<input type="submit" formaction="forgot-password.php" formmethod="post" value="Напомнить пароль" class="form-button enter" />
	</form>
</article>
<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_footer.php'; ?>