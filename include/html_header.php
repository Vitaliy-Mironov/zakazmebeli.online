<?php include $_SERVER['DOCUMENT_ROOT'].'/include/favicons.php'; ?>
<link href="/css/zamon.css" rel="stylesheet">
<link href="/css/styles.css" rel="stylesheet">
</head>

<body class="">

<div class="preloader">
  <div class="preloader_row">
    <div class="preloader_item"></div>
    <div class="preloader_item"></div>
  </div>
</div>

<header class="">
<div class="container">

<div class="logo">
	<a href="/" class="logo-link"><img src="/img/logo.svg" alt="logo" title="На главную" /></a>
</div>

<nav class="menu-top">

<input onkeydown="if(event.keyCode==13){return false;}" type="checkbox" class="menu-checkbox" />
<ul class="ul1">
	<li class="li1">
		<div class="lvl1"><a href="/inexpensively/" class="menu-top-link icon-coffee">Цена вопроса</a></div>
	</li>
	<li class="li1">
		<input onkeydown="if(event.keyCode==13){return false;}" type="checkbox" class="menu-checkbox-2" />
		<div class="lvl1"><span class="menu-top-menu icon-docs">Руководство</span></div>
		<ul class="ul2">
			<li class="li2">
				<div class="lvl2">
					<div class="icon-illustration icon-magic icon-illustration-mobile"></div>
					<h2 class="">Создание проекта</h2>
					<div class="lvl2-block"><p class="lvl2-text">Иллюстрированная пошаговая инструкция, как легко спроектировать Вашу мебель, используя ресурсы сайта <?php echo $_SERVER['HTTP_HOST']; ?>.</p></div>
					<div class=""><a href="/manual/project/" class="green"></a></div>
				</div>
			</li>
			<li class="li2">
				<div class="lvl2">
					<div class="icon-illustration icon-sliders icon-illustration-mobile"></div>
					<h2 class="">Свои настройки</h2>
					<div class="lvl2-block"><p class="lvl2-text">Как, при необходимости, редактировать базовые настройки и сохранять их.</p></div>
					<div class=""><a href="/manual/settings/" class="green"></a></div>
				</div>
			</li>
			<li class="li2">
				<div class="lvl2">
					<div class="icon-illustration icon-microchip icon-illustration-mobile"></div>
					<h2 class="">Деталировка</h2>
					<div class="lvl2-block"><p class="lvl2-text">Использование алгоритма расчёта деталей Вашей мебели. Точные размеры, количество и т.д.</p></div>
					<div class=""><a href="/manual/detailing/" class="green"></a></div>
				</div>
			</li>
			<li class="li2">
				<div class="lvl2">
					<div class="icon-illustration icon-credit-card icon-illustration-mobile"></div>
					<h2 class="">Оплата</h2>
					<div class="lvl2-block"><p class="lvl2-text">Подробное описание способа online оплаты услуг сайта <?php echo $_SERVER['HTTP_HOST']; ?>.</p></div>
					<div class=""><a href="/manual/payment/" class="green"></a></div>
				</div>
			</li>
		</ul>
	</li>
	<li class="li1">
		<input onkeydown="if(event.keyCode==13){return false;}" type="checkbox" class="menu-checkbox-2" />
		<div class="lvl1"><span class="menu-top-menu icon-youtube">Блог в помощь</span></div>
		<ul class="ul2">
			<li class="li2">
				<div class="lvl2">
					<div class="icon-illustration icon-thumbs-up icon-illustration-mobile"></div>
					<h2 class="">Статьи</h2>
					<div class="lvl2-block"><p class="lvl2-text">Подробный разбор важных вопросов, по мебельной тематике. Повысь свой IQ!</p></div>
					<div class=""><a href="/articles/" class="green"></a></div>
				</div>
			</li>
			<li class="li2">
				<div class="lvl2">
					<div class="icon-illustration icon-lightbulb icon-illustration-mobile"></div>
					<h2 class="">Лайфхаки</h2>
					<div class="lvl2-block"><p class="lvl2-text">Полезные советы, которые помогают облегчить различные этапы изготовления мебели.</p></div>
					<div class=""><a href="/lifehacks/" class="green"></a></div>
				</div>
			</li>
			<li class="li2">
				<div class="lvl2">
					<div class="icon-illustration icon-youtube-1 icon-illustration-mobile"></div>
					<h2 class="">Видео</h2>
					<div class="lvl2-block"><p class="lvl2-text">Подборка видеоблогов с качественным контентом в помощь мебельщику.</p></div>
					<div class=""><a href="/video/" class="green"></a></div>
				</div>
			</li>
		</ul>
	</li>
	<li class="li1">
		<div class="lvl1"><a href="/questions/" class="menu-top-link icon-chat">ЧаВо</a></div>
	</li>
</ul>

<div class="menu-top-button">
	<input onkeydown="if(event.keyCode==13){return false;}" type="checkbox" id="login-checkbox-input" class="login-checkbox" />
	<label for="login-checkbox-input"></label>
	<div class="button light small"><span class="icon-user"><?php echo $user_name; ?></span></div>
<?php if ($user_name === "Вход") { require $_SERVER['DOCUMENT_ROOT'].'/include/window_login.php'; } else { require $_SERVER['DOCUMENT_ROOT'].'/include/window_registered_user.php'; } ?>
</div>

</nav>

<div class="print-only header-adress">ZakazMebeli.online</div>

</div>
</header>

<main class="">
<div class="container">