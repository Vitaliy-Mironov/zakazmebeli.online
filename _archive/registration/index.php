<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_start.php'; ?>
<meta name="robots" content="noindex,nofollow" />
<title>Регистрация</title>
<meta name="description" content="" />
<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_header.php'; ?>
<h1 class="">Регистрация на сайте <?php echo $_SERVER['HTTP_HOST']; ?></h1>
<article>
	<div class="icon-illustration icon-pencil-alt"></div>
	<p class="p1 icon-transparent icon-dot">Зарегистрированные пользователи имеют возможность сохранять свои проекты и настройки.</p>
	<p class="p1 icon-transparent icon-dot">Данная регистрация означает Ваше согласие с обработкой Ваших данных в соответствии с <a href="/privacy-policy/" class="a1">политикой конфи&shy;денци&shy;аль&shy;ности</a> сайта <?php echo $_SERVER['HTTP_HOST']; ?>.</p>
	<p class="p1 icon-transparent icon-dot">Укажите, пожалуйста, Ваше имя и адрес электронной почты. На этот e-mail Вам будет выслан пароль.</p>
	<form class="">
		<div class="form-field">
			<label for="name-input">Имя</label>
			<input type="text" onkeydown="if(event.keyCode==13){return false;}" name="user_name" id="name-input" pattern="[A-Za-zА-Яа-яЁё]{1,20}" maxlength="128" title="Только буквы." required />
		</div>
		<div class="form-field">
			<label for="email">E-mail</label>
			<input type="email" onkeydown="if(event.keyCode==13){return false;}" name="user_mail" id="email" maxlength="128" required />
		</div>
		<input type="submit" formaction="registration.php" formmethod="post" value="Зарегистрироваться" class="form-button enter" />
	</form>
</article>
<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_footer.php'; ?>