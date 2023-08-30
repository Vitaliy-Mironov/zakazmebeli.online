<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_start.php'; ?>
<meta name="robots" content="noindex,nofollow" />
<title>История изменений</title>
<meta name="description" content="" />
<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_header.php'; ?>
<h1 class="">История изменений</h1>
<article>
	<div class="icon-illustration icon-traffic-cone"></div>
	
<?php
// проверка, требуется ли пользователю чистка кэша, если версия сайта обновилась

$current_version_date = '2021-01-01'; // дата последнего обновления сайта (последней версии)

// проверяем куки даты последнего посещения пользователем сайта


// если после даты последнего визита пользователя производилось обновление сайта, - предлагаем почистить кэш
echo '
	<div class="case print-no red">
		<p class="p1">Со времени Вашего последнего визита, на сайте '.$_SERVER['HTTP_HOST'].' применялось обновление кода. В большинстве случаев, это не сказывается негативно на работе пользователей, посещавших сайт ранее. Тем не менее, если Вы заметите ошибки (что сайт работает как-то не так, как раньше), рекомендуем <a href="/questions/cache-clearing/" class="a1" target="_blank">очистить кэш Вашего браузера</a>. Это позволит браузеру "забыть" старую версию сайта и полностью загрузить с сервера новую.</p>
		<div class="button light"><a href="/questions/cache-clearing/" class="icon-lightbulb" target="_blank">Как чистить кэш</a></div>
	</div>
';
?>
	<p class="p1">v.1.00.00 /2021-01-01/</p>
	<p class="p1 icon-transparent icon-dot">Официальный запуск сайта.</p>
	
	<p class="p1">beta /2020-11-11/</p>
	<p class="p1 icon-transparent icon-dot">Тестовый запуск сайта. Отладка алгоритмов деталировки.</p>
</article>
<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_footer.php'; ?>