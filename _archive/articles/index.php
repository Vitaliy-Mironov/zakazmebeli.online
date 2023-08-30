<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_start.php'; ?>
<meta name="robots" content="noindex,nofollow" />
<title>Статьи</title>
<meta name="description" content="" />
<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_header.php'; ?>
<h1 class="">Полезные статьи</h1>
<input onkeydown="if(event.keyCode==13){return false;}" type="checkbox" class="view-switch-checkbox" />
<article>
	<div class="icon-illustration icon-thumbs-up"></div>
	<p class="p1 icon-transparent icon-dot">Lorem ipsum dolor sit amet, ea minim primis commune nam, civibus quaestio mediocritatem te est. Cibo viris consequat an quo, eu augue eleifend forensibus usu. Platonem dissentias ad nec, invenire periculis id eum. Ubique diceret his te, assum impedit placerat eu pri, ei case tincidunt eos.</p>
	
	<div class="view-switch">
	
<?php include $_SERVER['DOCUMENT_ROOT'].'/include/rev.php'; ?>

		<div class="paragraph-container <?php rev($rev); ?>">
			<div class="img-illustration">
				<img src="/img/at/calculator.webp" class="" alt="Калькулятор" title="Калькулятор"/>
				<span class="resume">Мебельный online-калькулятор</span>
			</div>
			<div class="text-unit">
				<h2 class="">Мебельный online-калькулятор</h2>
				<p class="p1 icon-transparent icon-dot">Ut perpetua accusamus ullamcorper, ex pro congue dolore. Autem dolorem platonem sed ne, at his alterum legendos. Eirmod accusamus accommodare sea ut, ubique percipit sententiae ne nam. An qui delenit impedit lucilius, hinc ornatus ea nec. Ne duis dolorum his. Utinam appareat elaboraret eam eu.</p>
				<p class="p1 icon-right print-no"><a href="/articles/calculator/" target="_blank" class="a1">Читать...</a></p>
			</div>
		</div>

		<div class="paragraph-container <?php rev($rev); ?>">
			<div class="img-illustration">
				<img src="/img/at/formaldehyde.webp" class="" alt="Формальдегиды" title="Формальдегиды"/>
				<span class="resume">Формальдегиды</span>
			</div>
			<div class="text-unit">
				<h2 class="">Формальдегиды</h2>
				<p class="p1 icon-transparent icon-dot">Что нужно знать о наличии формальдегидов в мебели? Какие материалы их содержат и в каком количестве? Каковы допустимые нормы содержания в мебели формальдегидов?</p>
				<p class="p1 icon-right print-no"><a href="/articles/formaldehyde/" target="_blank" class="a1">Читать...</a></p>
			</div>
		</div>
		
		<div class="paragraph-container <?php rev($rev); ?>">
			<div class="img-illustration">
				<img src="/img/at/gost.webp" class="" alt="ГОСТ" title="ГОСТ"/>
				<span class="resume">ГОСТ 16371-2014</span>
			</div>
			<div class="text-unit">
				<h2 class="">ГОСТ 16371-2014</h2>
				<p class="p1 icon-transparent icon-dot">Главный мебельный стандарт, описывающий критерии качества изготавливаемой мебели, параметры безопасности, вопросы гарантии и т.п.</p>
				<p class="p1 icon-right print-no"><a href="/articles/gost/" target="_blank" class="a1">Читать...</a></p>
			</div>
		</div>
	
	</div>
	
	<div class="anchor"><a name="form"></a></div>
	
	<div class="case print-no">
		<h2 class="">Хотите предложить тему для рассмотрения? Пишите!</h2>
		<form class="">
			<div class="form-field bigform">
				<label for="art-email">Ваш E-mail:</label>
				<input type="email" placeholder="<?php echo $_SESSION['USER_MAIL']; ?>" onkeydown="if(event.keyCode==13){return false;}" name="art_mail" id="art-email" <?php if (empty($_SESSION['USER_MAIL'])) {echo 'required';} ?> />
			</div>
			<div class="form-field bigform">
				<label for="art-text">Ваше предложение:</label>
				<textarea onkeydown="if(event.keyCode==13){return false;}" name="art_text" id="art-text" maxlength="1000" required></textarea>
			</div>
			<input type="submit" formaction="articles.php" formmethod="post" value="Отправить" class="form-button enter" />
		</form>
		<?php
			echo $_SESSION["art_answer"];
			unset($_SESSION["art_answer"]);
		?>
	</div>
	
</article>
<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_footer.php'; ?>