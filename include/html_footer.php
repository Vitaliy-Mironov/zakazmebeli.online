</div>
</main>

<footer class="">

<div class="container">

<div class="footer-content">
	<div class="footer-about">
		<p class="">
			Индивидуальный предприниматель<br />
			Миронов Виталий Александрович<br />
			УНП 692134049<br />
			Свидетельство № 692134049 от 11.09.2019 г.<br />
			Регистрация в Реестре бытовых услуг<br />
			№ 82746 от 31.10.2019 г.
		</p>
		<p class="print-no">
			<span class="icon-doc"><a href="/privacy-policy/" class="a-copyright">Политика конфиденциальности</a></span><br />
			<span class="icon-doc"><a href="/public-offer/" class="a-copyright">Публичный договор</a></span><br />
			<span class="icon-doc"><a href="/price/" class="a-copyright">Прайс на услуги</a></span>
		</p>
	</div>
	<div class="footer-links">
		<p class="">
			<span class="icon-circle"><a href="/inexpensively/" class="a-copyright">Цена вопроса</a></span><br />
			<span class="icon-circle"><a href="/manual/" class="a-copyright">Руководство</a></span><br />
			<span class="icon-circle-empty"><a href="/manual/project/" class="a-copyright">Создание проекта</a></span><br />
			<span class="icon-circle-empty"><a href="/manual/settings/" class="a-copyright">Свои настройки</a></span><br />
			<span class="icon-circle-empty"><a href="/manual/detailing/" class="a-copyright">Деталировка</a></span><br />
			<span class="icon-circle-empty"><a href="/manual/payment/" class="a-copyright">Оплата</a></span>
		</p>
	</div>
	<div class="footer-links">
		<p class="">
			<span class="icon-circle"><a href="/blog/" class="a-copyright">Блог в помощь</a></span><br />
			<span class="icon-circle-empty"><a href="/articles/" class="a-copyright">Статьи</a></span><br />
			<span class="icon-circle-empty"><a href="/lifehacks/" class="a-copyright">Лайфхаки</a></span><br />
			<span class="icon-circle-empty"><a href="/video/" class="a-copyright">Видео</a></span><br />
			<span class="icon-circle"><a href="/questions/" class="a-copyright">Частые вопросы</a></span>
		</p>
	</div>
	<div class="footer-button">
		<div class="button gray small"><a href="/contacts/" class="icon-paper-plane-empty">Контакты</a></div>
	</div>
</div>

<div class="copyright">
	<p class="icon-copyright">ИП Миронов В.А., <?php echo date("Y"); ?><br />
	detailing.<a href="/versions/" class="a-copyright">beta</a></p>
</div>

</div>
</footer>

<script>
	window.onload = function () {
		document.body.classList.add('loaded_hiding');
		window.setTimeout(function () {
			document.body.classList.add('loaded');
			document.body.classList.remove('loaded_hiding');
		}, 500);
	}
</script>

<?php require $_SERVER['DOCUMENT_ROOT'].'/include/log.php'; ?>
</body>
</html>