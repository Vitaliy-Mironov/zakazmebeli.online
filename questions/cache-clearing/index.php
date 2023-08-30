<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_start.php'; ?>
<meta name="robots" content="noindex,nofollow" />
<title>Как очистить кэш браузера</title>
<meta name="description" content="" />
<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_header.php'; ?>
<h1 class="">Как очистить кэш браузера</h1>
<article>
	<div class="img-illustration center">
		<img src="/img/cache-clearing.svg" class="" alt="Очистка кэша" title="Очистка кэша"/>
	</div>
	
	<div class="publication-updated-date">Опубликовано 25.10.2020</div>
	
	<nav class="case print-no">
		<p class="icon-right-open-big"><a href="#item1" class="a1">В чём проблема с кэшем?</a></p>
		<p class="icon-right-open-big"><a href="#item2" class="a1">Как загрузить страницу сайта без использования кэша браузера?</a></p>
		<p class="icon-right-open-big"><a href="#item3" class="a1" id="pc_bro">Как очистить кэш браузера на компьютере?</a></p>
		<p class="icon-right-open-big tab"><a href="#pc-chrome" class="a1">Google Chrome на Windows</a></p>
		<p class="icon-right-open-big tab"><a href="#pc-yandex" class="a1">Яндекс.Браузер на Windows</a></p>
		<p class="icon-right-open-big tab"><a href="#pc-firefox" class="a1">Mozilla Firefox на Windows</a></p>
		<p class="icon-right-open-big tab"><a href="#pc-safari" class="a1">Safari на macOS</a></p>
		<p class="icon-right-open-big tab"><a href="#pc-ie" class="a1">Internet Explorer на Windows</a></p>
		<p class="icon-right-open-big tab"><a href="#pc-edge" class="a1">Microsoft Edge на Windows</a></p>
		<p class="icon-right-open-big tab"><a href="#pc-opera" class="a1">Opera на Windows</a></p>
		<p class="icon-right-open-big"><a href="#item4" class="a1" id="sm_bro">Как очистить кэш браузера на смартфоне или планшете?</a></p>
		<p class="icon-right-open-big tab"><a href="#sm-chrome" class="a1">Google Chrome на Android</a></p>
		<p class="icon-right-open-big tab"><a href="#sm-safari" class="a1">Safari на iOS</a></p>
		<p class="icon-right-open-big tab"><a href="#sm-edge" class="a1">Edge на Windows Phone</a></p>
	</nav>
	
	<div class="anchor"><a name="item1"></a></div>
	<h2 class="">В чём проблема с кэшем?</h2>
	
	<p class="p1 icon-transparent icon-dot">Браузеры хранят большой объём информации о посещённых пользователем сайтах. Изображения, стили, данные автозаполнения форм, и т.п. Такой подход применяется для ускорения загрузки сайтов и бо&#x301;льшего удобства пользователей. Так браузер при первом посещении сайта <a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>" class="a1"><?php echo $_SERVER['HTTP_HOST']; ?></a> «запоминает» его, и в дальнейшем бо&#x301;льшую часть информации подгружает из своего хранилища (кэша), чтобы не тратить лишнее время и интернет-трафик пользователя на загрузку одного и того же контента с интернет-сервера.</p>
	
	<p class="p1 icon-transparent icon-dot">Это очень полезная технология, вызывающая трудности лишь тогда, когда на сайте производились какие-либо изменения. Например, владелец сайта заменил старые изображения новыми, или изменил стили оформления сайта, или производил ещё какие-то изменения того, что браузер уже успел «запомнить». Тогда браузер будет пытаться по-прежнему показывать пользователю сайт, как он (браузер) его «помнит», и это может вызывать конфликт выполнения сценариев, - сайт, рассчитанный уже на новый код и контент, будет неверно работать со старым кодом и контентом, предоставляемым ему браузером, а не сервером.</p>
	
	<p class="p1 icon-transparent icon-dot">У браузеров есть режим работы, при котором они не используют данные из кэша (разве что для автозаполнения форм). У браузера Chrome это режим «инкогнито» (в него можно перейти, нажав одновременно комбинацию клавиш «Ctrl» «Shift (&uarr;)» «N»), у Mozilla Firefox это «приватный просмотр» («Ctrl» «Shift (&uarr;)» «P»). Однако, постоянно пользоваться браузером в таком режиме неудобно; придется всё время вручную заполнять все формы (браузер не будет их запоминать), сайты будут грузиться чуть медленнее и интернет-трафик увеличится.</p>
	
	<div class="anchor"><a name="item2"></a></div>
	<h2 class="">Как загрузить страницу сайта без использования кэша браузера?</h2>
	
	<div class="img-illustration center">
		<img src="/img/ctrl_f5.svg" class="" width="350" height="220" alt="Ctrl F5" title="Ctrl F5"/>
	</div>
	
	<p class="p1 icon-transparent icon-dot">Как правило, для решения проблемы с кэшем, бывает достаточно перезагрузить страницу сайта без использования браузером кэша. Для браузеров на Windows это комбинация клавиш «Ctrl» + «F5». Для Safari это «Cmd» + «Option» + «R», для других браузеров на MacOS это «Cmd» + «Shift» + «R».</p>
	
	<p class="p1 icon-transparent icon-dot">Нужно понимать, что эти комбинации клавиш не чистят кэш браузера, а только перезагружают страницу сайта, и при этой перезагрузке браузер не использует кэш. После такой перезагрузки он <i>может</i> записать в кэш новые данные, полученные с сервера, и этого <i>может</i> оказаться достаточно.</p>
	
	<p class="p1 icon-transparent icon-dot">Но, точно быть уверенным, что кэш полностью почищен от старых данных, можно только после ручной чистки кэша. Это не сложно, и об этом - далее.</p>
	
	<div class="anchor"><a name="item3"></a></div>
	<h2 class="">Как очистить кэш браузера на компьютере?</h2>
	
	<div class="img-illustration center">
		<img src="/img/ctrl_shift_del.svg" class="" width="350" height="220" alt="Ctrl Shift Del" title="Ctrl Shift Del"/>
	</div>
	
	<p class="p1 icon-transparent icon-dot">Примените последовательность действий для браузера, который Вы используете.</p>
	
	<div class="anchor"><a name="pc-chrome"></a></div>
	<div class="browser-logo">
		<h3 class="">Google Chrome</h3>
		<img src="/img/logo/chrome.svg" class="" alt="Chrome" title="Chrome"/>
	</div>
	<p class="p1 icon-transparent icon-right-open-mini">1. Нажмите комбинацию клавиш «Ctrl» «Shift (&uarr;)» «Delete (Del)», чтобы открыть окно очистки истории браузера.</p>
	<p class="p1 icon-transparent icon-right-open-mini">2. В верхней части открывшегося окна выберите временной диапазон. Чтобы удалить данные за всё время, выберите «Всё время».</p>
	<p class="p1 icon-transparent icon-right-open-mini">3. Отметьте «Файлы cookie и другие данные сайтов» и «Изображения и другие файлы, сохранённые в кеше».</p>
	<p class="p1 icon-transparent icon-right-open-mini">4. Нажмите кнопку «Удалить данные».</p>
	
	<hr class="mini" />
	
	<div class="anchor"><a name="pc-yandex"></a></div>
	<div class="browser-logo">
		<h3 class="">Яндекс.Браузер</h3>
		<img src="/img/logo/yandex.svg" class="" alt="Яндекс.Браузер" title="Яндекс.Браузер"/>
	</div>
	<p class="p1 icon-transparent icon-right-open-mini">1. Нажмите комбинацию клавиш «Ctrl» «Shift (&uarr;)» «Delete (Del)», чтобы открыть окно очистки истории браузера.</p>
	<p class="p1 icon-transparent icon-right-open-mini">2. В верхней части открывшегося окна выберите временной диапазон. Чтобы удалить данные за всё время, выберите «За всё время».</p>
	<p class="p1 icon-transparent icon-right-open-mini">3. Отметьте «Файлы, сохранённые в кэше» и «Файлы cookie и другие данные сайтов и модулей».</p>
	<p class="p1 icon-transparent icon-right-open-mini">4. Нажмите кнопку «Очистить».</p>
	
	<hr class="mini" />
	
	<div class="anchor"><a name="pc-firefox"></a></div>
	<div class="browser-logo">
		<h3 class="">Mozilla Firefox</h3>
		<img src="/img/logo/firefox.svg" class="" alt="Mozilla Firefox" title="Mozilla Firefox"/>
	</div>
	<p class="p1 icon-transparent icon-right-open-mini">1. Нажмите комбинацию клавиш «Ctrl» «Shift (&uarr;)» «Delete (Del)», чтобы открыть окно очистки истории браузера.</p>
	<p class="p1 icon-transparent icon-right-open-mini">2. В открывшемся окне в поле «Удалить» выберите «Всё».</p>
	<p class="p1 icon-transparent icon-right-open-mini">3. В блоке «Историю» оставьте отметки только у «Куки» и «Кэш».</p>
	<p class="p1 icon-transparent icon-right-open-mini">4. Нажмите кнопку «OK».</p>
	
	<hr class="mini" />
	
	<div class="anchor"><a name="pc-safari"></a></div>
	<div class="browser-logo">
		<h3 class="">Safari</h3>
		<img src="/img/logo/safari.svg" class="" alt="Safari" title="Safari"/>
	</div>
	<p class="p1 icon-transparent icon-dot">I. Удаление сохраненных файлов cookie и других данных:</p>
	<p class="p1 icon-transparent icon-right-open-mini">1. В приложении Safari на компьютере Mac зайдите в меню «Safari» <span class="icon-right-open-big"></span> «Настройки» <span class="icon-right-open-big"></span> «Конфиденциальность».</p>
	<p class="p1 icon-transparent icon-right-open-mini">2. Нажмите «Управлять данными веб-сайта», выберите сайт <?php echo $_SERVER['HTTP_HOST']; ?> или несколько веб-сайтов, затем нажмите «Удалить» или «Удалить все».</p>
	<p class="p1 icon-transparent icon-dot-2">II. Очистка журнала истории:</p>
	<p class="p1 icon-transparent icon-right-open-mini">1. В приложении Safari на компьютере Mac выберите пункт меню «История» <span class="icon-right-open-big"></span> «Очистить журнал», затем нажмите всплывающее меню.</p>
	<p class="p1 icon-transparent icon-right-open-mini">2. Выберите, историю за какой период времени Вы хотите очистить.</p>
	
	<hr class="mini" />
	
	<div class="anchor"><a name="pc-ie"></a></div>
	<div class="browser-logo">
		<h3 class="">Internet Explorer</h3>
		<img src="/img/logo/ie.svg" class="" alt="Internet Explorer" title="Internet Explorer"/>
	</div>
	<p class="p1 icon-transparent icon-attention">Internet Explorer - устаревший браузер, заменённый компанией Microsoft на браузер Microsoft Edge.</p>
	<p class="p1 icon-transparent icon-right-open-mini">1. Нажмите комбинацию клавиш «Ctrl» «Shift (&uarr;)» «Delete (Del)», чтобы открыть окно очистки истории браузера.</p>
	<p class="p1 icon-transparent icon-right-open-mini">2. Отметьте «Временные файлы Интернета и веб-сайтов» и «Файлы cookie и данные веб-сайтов». Если сайт <?php echo $_SERVER['HTTP_HOST']; ?> находится в «Избранном» браузера, то снимите отметку на пункте «Сохранить данные избранных веб-сайтов».</p>
	<p class="p1 icon-transparent icon-right-open-mini">3. Нажмите кнопку «Удалить».</p>
	
	<hr class="mini" />
	
	<div class="anchor"><a name="pc-edge"></a></div>
	<div class="browser-logo">
		<h3 class="">Microsoft Edge</h3>
		<img src="/img/logo/edge.svg" class="" alt="Microsoft Edge" title="Microsoft Edge"/>
	</div>
	<p class="p1 icon-transparent icon-right-open-mini">1. Нажмите комбинацию клавиш «Ctrl» «Shift (&uarr;)» «Delete (Del)», чтобы открыть окно удаления данных о просмотре веб-страниц.</p>
	<p class="p1 icon-transparent icon-right-open-mini">2. В верхней части открывшегося окна выберите временной диапазон. Чтобы удалить данные за всё время, выберите «Всё время».</p>
	<p class="p1 icon-transparent icon-right-open-mini">3. Отметьте «Файлы cookie и другие данные сайтов» и «Кэшированные изображения и файлы».</p>
	<p class="p1 icon-transparent icon-right-open-mini">4. Нажмите кнопку «Удалить сейчас».</p>
	
	<hr class="mini" />
	
	<div class="anchor"><a name="pc-opera"></a></div>
	<div class="browser-logo">
		<h3 class="">Opera</h3>
		<img src="/img/logo/opera.svg" class="" alt="Opera" title="Opera"/>
	</div>
	<p class="p1 icon-transparent icon-right-open-mini">1. Нажмите комбинацию клавиш «Ctrl» «Shift (&uarr;)» «Delete (Del)», чтобы открыть окно очистки истории посещений.</p>
	<p class="p1 icon-transparent icon-right-open-mini">2. В верхней части открывшегося окна выберите временной диапазон. Чтобы удалить данные за всё время, выберите «Всё время».</p>
	<p class="p1 icon-transparent icon-right-open-mini">3. Отметьте «Файлы cookie и прочие данные сайтов» и «Кэшированные изображения и файлы».</p>
	<p class="p1 icon-transparent icon-right-open-mini">4. Нажмите кнопку «Удалить данные».</p>
	
	<div class="anchor"><a name="item4"></a></div>
	<h2 class="">Как очистить кэш браузера на смартфоне или планшете?</h2>
	
	<p class="p1 icon-transparent icon-dot">Примените последовательность действий для браузера и устройства, которым Вы пользуетесь.</p>
	
	<div class="anchor"><a name="sm-chrome"></a></div>
	<div class="browser-logo">
		<h3 class="">Google Chrome на Android</h3>
		<img src="/img/logo/chrome.svg" class="" alt="Chrome" title="Chrome"/>
	</div>
	<p class="p1 icon-transparent icon-right-open-mini">1. Нажмите кнопку меню <span class="icon-dot-3 deg90"></span> в правом верхнем углу окна браузера.</p>
	<p class="p1 icon-transparent icon-right-open-mini">2. Нажмите «Настройки» <span class="icon-right-open-big"></span> «Конфиденциальность» <span class="icon-right-open-big"></span> «Очистить историю».</p>
	<p class="p1 icon-transparent icon-right-open-mini">3. В верхней части открывшегося окна выберите временной диапазон. Чтобы удалить данные за всё время, выберите «Всё время».</p>
	<p class="p1 icon-transparent icon-right-open-mini">4. Отметьте «Файлы cookie и данные сайтов» и «Изображения и другие файлы, сохранённые в кеше».</p>
	<p class="p1 icon-transparent icon-right-open-mini">5. Нажмите кнопку «Удалить данные».</p>
	
	<hr class="mini" />
	
	<div class="anchor"><a name="sm-safari"></a></div>
	<div class="browser-logo">
		<h3 class="">Safari на iOS</h3>
		<img src="/img/logo/safari.svg" class="" alt="Safari" title="Safari"/>
	</div>
	<p class="p1 icon-transparent icon-right-open-mini">1. Выберите приложение «Настройки» <span class="icon-right-open-big"></span> Safari <span class="icon-right-open-big"></span> «Дополнительно» <span class="icon-right-open-big"></span> «Данные сайтов».</p>
	<p class="p1 icon-transparent icon-right-open-mini">2. Нажмите «Удалить все данные».</p>
	
	<hr class="mini" />
	
	<div class="anchor"><a name="sm-edge"></a></div>
	<div class="browser-logo">
		<h3 class="">Edge на Windows Phone</h3>
		<img src="/img/logo/edge.svg" class="" alt="Edge" title="Edge"/>
	</div>
	<p class="p1 icon-transparent icon-right-open-mini">1. Нажмите кнопку <span class="icon-dot-3"></span> на панели браузера внизу экрана.</p>
	<p class="p1 icon-transparent icon-right-open-mini">2. Выберите пункт «Параметры».</p>
	<p class="p1 icon-transparent icon-right-open-mini">3. В разделе «Очистить данные браузера» нажмите «Выберите, что нужно очистить».</p>
	<p class="p1 icon-transparent icon-right-open-mini">4. Отметьте пункт «Кэшированные данные и файлы».</p>
	<p class="p1 icon-transparent icon-right-open-mini">5. Нажмите кнопку «Очистить».</p>
	
</article>
<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_footer.php'; ?>