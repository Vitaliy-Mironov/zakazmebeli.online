<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_start.php'; ?>
<meta name="robots" content="noindex,nofollow" />
<title>Отмена регистрации</title>
<meta name="description" content="" />
<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_header.php'; ?>
<h1 class="">Отмена регистрации</h1>
<article>
	<div class="icon-illustration icon-attention"></div>
	<p class="p1 icon-transparent icon-dot">Пользователь с таким адресом электронной почты уже зарегистрирован на сайте.</p>
	<p class="p1 icon-transparent icon-dot">Если это Вы, - войдите, используя Ваш пароль, или воспользуйтесь функцией <a href="/forgot-password/" class="a1">восстановления пароля</a>.</p>
	<p class="p1 icon-transparent icon-dot">Если это не Вы, - пожалуйста, используйте другой адрес электронной почты для <a href="/registration/" class="a1">регистрации</a>.</p>
	<div class="text-unit">
		<div class="button"><a href="/registration/" class="icon-left">Регистрация</a></div>
		<div class="button light"><a href="/forgot-password/" class="icon-lightbulb">Не помню пароль</a></div>
	</div>
</article>
<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_footer.php'; ?>