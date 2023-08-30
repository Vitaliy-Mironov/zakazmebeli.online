<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_start.php'; ?>
<meta name="robots" content="noindex,nofollow" />
<title>ЧАсто задаваемые ВОпросы</title>
<meta name="description" content="" />
<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_header.php'; ?>
<h1 class="">ЧАсто задаваемые ВОпросы</h1>
<article>
	<div class="icon-illustration icon-chat"></div>
	
	<p class="p1 icon-transparent icon-dot">Здесь собраны ответы на наиболее часто задаваемые вопросы. Если Вы не найдёте ответ на Ваш вопрос, или предложенный вариат решения Вам не помогает, - отправьте Ваш вопрос через <a href="#form" class="a1">форму обратной связи</a>.</p>
	
<?php include $_SERVER['DOCUMENT_ROOT'].'/include/rev.php'; ?>
	
	<div class="paragraph-container <?php rev($rev); ?>">
		<div class="img-illustration">
			<img src="/img/cache-clearing.svg" class="" alt="Очистка кэша" title="Очистка кэша"/>
		</div>
		<div class="text-unit">
			<h2 class="">Сайт стал работать как-то не так, как раньше (что-то не загружается, что-то не отображается...). В чём причина?</h2>
			<p class="p1 icon-transparent icon-dot">В подавляющем большинстве случаев в такой ситуации помогает <a href="/questions/cache-clearing/" class="a1">очистка кэша браузера</a>. Современные сайты - вещь динамичная и периодически обновляемая. И, чтобы браузер "забыл" старую версию сайта и загрузил обновлённую, нужно <a href="/questions/cache-clearing/" class="a1">очистить кэш</a> ("память") браузера.</p>
			<div class="button light"><a href="/questions/cache-clearing/" class="">Подробнее</a></div>
		</div>
	</div>
	
	<div class="paragraph-container <?php rev($rev); ?>">
		<div class="img-illustration">
			<img src="/img/transplatform.svg" class="" alt="Работа на любых устройствах" title="Работа на любых устройствах"/>
		</div>
		<div class="text-unit">
			<h2 class="">Могу ли я, начав работать над проектом на настольном компьютере, продолжить на смартфоне или планшете?</h2>
			<p class="p1 icon-transparent icon-dot">Конечно! Вы можете создать проект на одном устройстве, затем сохранить его (при этом не важно, завершённый это проект, или он ещё в работе). После сохранения, Вы сможете открыть этот проект как на этом же устройстве, так и на любом другом.</p>
		</div>
	</div>
	
	<div class="paragraph-container <?php rev($rev); ?>">
		<div class="img-illustration">
			<img src="/img/mail-new.svg" class="" alt="Новое сообщение" title="Сообщение"/>
		</div>
		<div class="text-unit">
			<h2 class="">Я забыл пароль. Что делать?</h2>
			<p class="p1 icon-transparent icon-dot">Чтобы восстановить пароль, перейдите <a href="/forgot-password/" class="a1">по этой ссылке</a>, или жмите расположенную ниже кнопку, и укажите адрес электронной почты, который Вы использовали при регистрации. На этот e-mail Вам будет повторно отправлен Ваш пароль.</p>
			<div class="button light"><a href="/forgot-password/" class="">Напомнить пароль</a></div>
		</div>
	</div>
	
	<div class="anchor"><a name="form"></a></div>
	
	<div class="case print-no">
		<h2 class="">У Вас есть вопрос? Задавайте!</h2>
		<form class="">
			<div class="form-field bigform">
				<label for="faq-email">Ваш E-mail:</label>
				<input type="email" placeholder="<?php echo $_SESSION['USER_MAIL']; ?>" onkeydown="if(event.keyCode==13){return false;}" name="faq_mail" id="faq-email" <?php if (empty($_SESSION['USER_MAIL'])) {echo 'required';} ?> />
			</div>
			<div class="form-field bigform">
				<label for="faq-text">Ваш вопрос:</label>
				<textarea onkeydown="if(event.keyCode==13){return false;}" name="faq_text" id="faq-text" maxlength="1000" required></textarea>
			</div>
			<input type="submit" formaction="questions.php" formmethod="post" value="Отправить вопрос" class="form-button enter" />
		</form>
		<?php
			echo $_SESSION["faq_answer"];
			unset($_SESSION["faq_answer"]);
		?>
	</div>
</article>
<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_footer.php'; ?>