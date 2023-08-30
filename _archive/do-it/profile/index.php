<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_start.php'; ?>
<meta name="robots" content="noindex,nofollow" />
<title>Мой профиль</title>
<meta name="description" content="" />
<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_header.php'; ?>
<h1 class="">Мой профиль</h1>
<article>
	<div class="icon-illustration icon-user"></div>
	<p class="p1 icon-transparent icon-dot">Вы можете изменить Ваши данные, или задать новый пароль для входа на сайт. Пароль должен содержать от четырёх до восьми символов. Допускаются только строчные (большие) и прописные  (маленькие) буквы английского алфавита и цифры.</p>
	<form class="">
		<div class="form-field">
			<label for="name-input">Имя</label>
			<input type="text" placeholder="<?php echo $_SESSION['USER_NAME']; ?>" onkeydown="if(event.keyCode==13){return false;}" name="user_name" id="name-input" pattern="[A-Za-zА-Яа-яЁё]{1,20}" maxlength="20" title="Только буквы. Максимум 20 символов." />
		</div>
		<div class="form-field">
			<label for="email">E-mail</label>
			<input type="email" placeholder="<?php echo $_SESSION['USER_MAIL']; ?>" onkeydown="if(event.keyCode==13){return false;}" name="user_mail" id="email" />
		</div>
		<div class="form-field">
			<label for="password-input">Пароль</label>
			<input type="password" onkeydown="if(event.keyCode==13){return false;}" name="user_password" id="password-input" pattern="[A-Za-z0-9]{4,8}" minlength="4" maxlength="8" title="Состоит из цифр и латинских букв. От 4 до 8 символов." autocomplete="new-password" />
			<span class="icon-low-vision" onclick="return show_hide_password(this);"></span>
			<script>
				function show_hide_password(target){
					var input = document.getElementById('password-input');
					if (input.getAttribute('type') == 'password') {
						input.setAttribute('type', 'text');
					} else {
						input.setAttribute('type', 'password');
					}
					return false;
				}
			</script>
		</div>
		<input type="submit" formaction="profile.php" formmethod="post" value="Изменить" class="form-button enter" />
	</form>
	<?php
		echo $_SESSION["answer"];
		unset($_SESSION["answer"]);
	?>
</article>
<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_footer.php'; ?>