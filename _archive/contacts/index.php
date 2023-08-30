<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_start.php'; ?>
<meta name="robots" content="noindex,nofollow" />
<title>Контакты</title>
<meta name="description" content="" />
<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_header.php'; ?>
<h1 class="">Контакты</h1>
<article class="my-contacts">
	
	<div class="my-contacts-block">
		<div class="my-contacts-item img-logo-phone">
			<div class="my-contacts-title">Телефон</div>
			<div class="my-contacts-data">+375 (25) 929-82-33</div>
			<div class="my-contacts-img"><img src="/img/logo/phone.svg" alt="Телефон" title="Телефон"/></div>
			<a href="tel:+375259298233" rel="nofollow"></a>
		</div>
		<div class="my-contacts-item">
			<div class="my-contacts-title">Viber</div>
			<div class="my-contacts-data">+375 (25) 929-82-33</div>
			<div class="my-contacts-img"><img src="/img/logo/viber.svg" alt="Viber" title="Viber"/></div>
			<a href="viber://chat?number=%2B375259298233" rel="nofollow"></a>
		</div>
		<div class="my-contacts-item">
			<div class="my-contacts-title">WhatsApp</div>
			<div class="my-contacts-data">+375 (25) 929-82-33</div>
			<div class="my-contacts-img"><img src="/img/logo/whatsapp.svg" alt="WhatsApp" title="WhatsApp"/></div>
			<a href="https://wa.me/375259298233" rel="nofollow"></a>
		</div>
		<div class="my-contacts-item">
			<div class="my-contacts-title">Telegram</div>
			<div class="my-contacts-data">+375 (25) 929-82-33</div>
			<div class="my-contacts-img"><img src="/img/logo/telegram.svg" alt="Telegram" title="Telegram"/></div>
			<a href="tg://resolve?domain=Mironov_Vitaliy" rel="nofollow"></a>
		</div>
		<div class="my-contacts-item">
			<div class="my-contacts-title">Электронная почта</div>
			<div class="my-contacts-data">mail@zakazmebeli.online</div>
			<div class="my-contacts-img"><img src="/img/logo/mail.svg" alt="Email" title="Email"/></div>
			<a href="mailto:mail@zakazmebeli.online" rel="nofollow"></a>
		</div>
	</div>
	
	<div class="case print-no">
	<div class="anchor"><a name="form"></a></div>
		<h2 class="">Форма обратной связи</h2>
		<form class="my-contacts-form">
			<div class="form-field bigform">
				<label for="cnt-email">Ваш E-mail:</label>
				<input type="email" placeholder="<?php echo $_SESSION['USER_MAIL']; ?>" onkeydown="if(event.keyCode==13){return false;}" name="cnt_mail" id="cnt-email" <?php if (empty($_SESSION['USER_MAIL'])) {echo 'required';} ?> />
			</div>
			<div class="form-field bigform">
				<label for="cnt-text">Сообщение:</label>
				<textarea onkeydown="if(event.keyCode==13){return false;}" name="cnt_text" id="cnt-text" maxlength="1000" required></textarea>
			</div>
			<input type="submit" formaction="contacts.php" formmethod="post" value="Отправить" class="form-button enter" />
		</form>
		<?php
			echo $_SESSION["cnt_answer"];
			unset($_SESSION["cnt_answer"]);
		?>
	</div>
	
</article>
<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_footer.php'; ?>