<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_start.php'; ?>
<meta name="robots" content="noindex,nofollow" />
<title>Блог в помощь</title>
<meta name="description" content="" />
<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_header.php'; ?>
<h1 class="">Блог в помощь!</h1>
<article>
	<div class="icon-illustration icon-youtube"></div>
	
<?php include $_SERVER['DOCUMENT_ROOT'].'/include/rev.php'; ?>
	
	<div class="paragraph-container <?php rev($rev); ?>">
		<div class="img-illustration">
			<img src="/img/blog-articles.webp" class="" alt="Статьи" title="Статьи"/>
		</div>
		<div class="text-unit">
			<h2 class="">Статьи</h2>
			<p class="p1 icon-transparent icon-dot">Подробный разбор важных вопросов, по мебельной тематике. ГОСТы, формальдегиды и прочая дичь, корорую желательно знать, и в которой полезно разбираться. Повысь свой мебедьный IQ!</p>
			<div class="button"><a href="/articles/" class="">Читать</a></div>
		</div>
	</div>
	
	<div class="paragraph-container <?php rev($rev); ?>">
		<div class="img-illustration">
			<img src="/img/blog-lifehacks.webp" class="" alt="Лайфхаки" title="Лайфхаки"/>
		</div>
		<div class="text-unit">
			<h2 class="">Лайфхаки</h2>
			<p class="p1 icon-transparent icon-dot">Полезные советы, которые помогают облегчить различные этапы изготовления мебели. Как делать что-то проще и быстрее, как впихивать невпихуемое, как исправлять косяки и в итоге получать не гуано а конфетку...</p>
			<div class="button"><a href="/lifehacks/" class="">Читать</a></div>
		</div>
	</div>
	
	<div class="paragraph-container <?php rev($rev); ?>">
		<div class="img-illustration">
			<img src="/img/blog-video.webp" class="" alt="Видео" title="Видео"/>
		</div>
		<div class="text-unit">
			<h2 class="">Видео</h2>
			<p class="p1 icon-transparent icon-dot">Подборка видеоблогов с качественным контентом в помощь мебельщику. Как говорится, лучше один раз увидеть... как это делают другие.</p>
			<div class="button"><a href="/video/" class="">Смотреть</a></div>
		</div>
	</div>
	
</article>
<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_footer.php'; ?>