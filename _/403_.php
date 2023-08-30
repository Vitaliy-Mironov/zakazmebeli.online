<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_start.php'; ?>
<meta name="robots" content="noindex,nofollow" />
<title>Ошибка 403</title>
<meta name="description" content="" />
<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_header.php'; ?>
<h1 class="">Вход не выполнен</h1>
<div class="icon-illustration icon-lock"></div>
<article>
	<div class="paragraph-container">
		<div class="img-illustration">
			<img src="/img/blank_350x220.png" class="" alt="Sample image" title="Sample image"/>
		</div>
		<div class="text-unit">
			<h2 class="">Доступ только для авторизованных пользователей.</h2>
			<p class="p1 icon-transparent icon-dot">Пожалуйста, войдите, используя Ваши реквизиты (e-mail и пароль) для доступа.</p>
			<div class="button"><a href="#nogo" id="login-script-button">Войти</a></div>
			<script>
				document.getElementById('login-script-button').onclick = function() {
					document.getElementById('login-checkbox-input').checked = "true";
				}
			</script>
		</div>
	</div>
	<div class="paragraph-container reverse">
		<div class="img-illustration">
			<img src="/img/blank_350x220.png" class="" alt="Sample image" title="Sample image"/>
		</div>
		<div class="text-unit">
			<h2 class="">Нет пароля?</h2>
			<p class="p1 icon-transparent icon-dot">Не проблема! Пройдите простую <a href="/registration/" class="a1">регистрацию</a> и пользуйтесь всеми ресурсами этого сайта в Вашем мебельном творчестве!</p>
			<div class="button light"><a href="/registration/" class="">Зарегистрироваться</a></div>
		</div>
	</div>
</article>
<?php include $_SERVER['DOCUMENT_ROOT'].'/include/html_footer.php'; ?>