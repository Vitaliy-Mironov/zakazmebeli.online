<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_start.php'; ?>
<meta name="robots" content="noindex,nofollow" />
<title>Руководство пользователя</title>
<meta name="description" content="" />
<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_header.php'; ?>
<h1 class="">Руководство пользователя</h1>
<article>
	<div class="icon-illustration icon-docs"></div>
	
<?php include $_SERVER['DOCUMENT_ROOT'].'/include/rev.php'; ?>

	<div class="paragraph-container <?php rev($rev); ?>">
		<div class="img-illustration">
			<img src="/img/manu-project.webp" class="" alt="Создание проекта" title="Создание проекта"/>
		</div>
		<div class="text-unit">
			<h2 class="">Создание проекта</h2>
			<p class="p1 icon-transparent icon-dot">Иллюстрированная пошаговая инструкция, как легко спроектировать Вашу мебель, используя ресурсы сайта <?php echo $_SERVER['HTTP_HOST']; ?>.</p>
			<div class="button"><a href="/manual/project/" class="icon-right">Подробнее...</a></div>
		</div>
	</div>
	
	<div class="paragraph-container <?php rev($rev); ?>">
		<div class="img-illustration">
			<img src="/img/manu-settings.webp" class="" alt="Свои настройки" title="Свои настройки"/>
		</div>
		<div class="text-unit">
			<h2 class="">Свои настройки</h2>
			<p class="p1 icon-transparent icon-dot">Как, при необходимости, редактировать базовые настройки и сохранять их. Только для опытных мебельщиков!</p>
			<p class="p1 icon-transparent icon-dot">Как создавать, заполнять и редактировать прайс на материалы и услуги, для автоматического расчёта стоимости мебели.</p>
			<div class="button"><a href="/manual/settings/" class="icon-right">Подробнее...</a></div>
		</div>
	</div>
	
	<div class="paragraph-container <?php rev($rev); ?>">
		<div class="img-illustration">
			<img src="/img/manu-detailing.webp" class="" alt="Деталировка" title="Деталировка"/>
		</div>
		<div class="text-unit">
			<h2 class="">Деталировка</h2>
			<p class="p1 icon-transparent icon-dot">Использование алгоритма расчёта деталей Вашей мебели. Как получить точные размеры, количество и всю необходимую информацию для распила, присадки и сборки Вашей мебели.</p>
			<div class="button"><a href="/manual/detailing/" class="icon-right">Подробнее...</a></div>
		</div>
	</div>
	
	<div class="paragraph-container <?php rev($rev); ?>">
		<div class="img-illustration">
			<img src="/img/manu-payment.webp" class="" alt="Оплата" title="Оплата"/>
		</div>
		<div class="text-unit">
			<h2 class="">Оплата</h2>
			<p class="p1 icon-transparent icon-dot">Подробное описание способа online оплаты услуг сайта <?php echo $_SERVER['HTTP_HOST']; ?>.</p>
			<p class="p1 icon-transparent icon-dot">Так же, рекомендуем ознакомиться с текстом <a href="/public-offer/" class="a1">публичного договора (оферты)</a>. Неинтересная, но необходимая информация...</p>
			<div class="button"><a href="/manual/payment/" class="icon-right">Как платить</a></div>
			<div class="button light"><a href="/public-offer/" class="icon-doc">Договор</a></div>
		</div>
	</div>
	
</article>
<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_footer.php'; ?>