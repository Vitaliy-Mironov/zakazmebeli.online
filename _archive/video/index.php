<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_start.php'; ?>
<meta name="robots" content="noindex,nofollow" />
<title>Видео</title>
<meta name="description" content="" />
<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_header.php'; ?>
<h1 class="">Видео</h1>
<input onkeydown="if(event.keyCode==13){return false;}" type="checkbox" class="view-switch-checkbox" />
<article>
	<div class="icon-illustration icon-youtube"></div>
	<p class="p1 icon-transparent icon-dot">В этом разделе представлены видеоблоги разных авторов связанные с темой изготовления мебели. Информация полезна для начинающих мебельщиков и интересна опытным мастерам.</p>
	
	<div class="view-switch">
	
<?php include $_SERVER['DOCUMENT_ROOT'].'/include/rev.php'; ?>
	
		<div class="paragraph-container <?php rev($rev); ?>">
			<div class="img-illustration">
				<img src="/img/vlog/ya_mebelshchik.webp" class="" alt="Я мебельщик. Все о мебелестроении" title="Я мебельщик. Все о мебелестроении"/>
				<span class="resume">Я мебельщик. Все о мебелестроении</span>
			</div>
			<div class="text-unit">
				<h2 class="">Я мебельщик. Все о мебелестроении</h2>
				<p class="p1 icon-transparent icon-dot">Много полезной информации для тех, кто решил собрать мебель своими руками и не имеет ещё большого опыта в этом деле. Всё объясняется просто и доступно.</p>
				<p class="p1 icon-right print-no"><a href="https://www.youtube.com/channel/UCnHkdPMwTXBtFF3ZqyU-WkQ" target="_blank" class="a1">Перейти на канал...</a></p>
			</div>
		</div>
		
		<div class="paragraph-container <?php rev($rev); ?>">
			<div class="img-illustration">
				<img src="/img/vlog/Saventy_Channel.webp" class="" alt="Saventy Channel" title="Saventy Channel"/>
				<span class="resume">Saventy Channel</span>
			</div>
			<div class="text-unit">
				<h2 class="">Saventy Channel</h2>
				<p class="p1 icon-transparent icon-dot">Ut perpetua accusamus ullamcorper, ex pro congue dolore. Autem dolorem platonem sed ne, at his alterum legendos. Eirmod accusamus accommodare sea ut, ubique percipit sententiae ne nam. An qui delenit impedit lucilius, hinc ornatus ea nec. Ne duis dolorum his. Utinam appareat elaboraret eam eu.</p>
				<p class="p1 icon-right print-no"><a href="https://www.youtube.com/channel/UCuv0vzh6aMOsomsoWzVSNpg" target="_blank" class="a1">Перейти на канал...</a></p>
			</div>
		</div>
	
		<div class="paragraph-container <?php rev($rev); ?>">
			<div class="img-illustration">
				<img src="/img/vlog/JSK-koubou.webp" class="" alt="JSK-koubou" title="JSK-koubou"/>
				<span class="resume">JSK-koubou</span>
			</div>
			<div class="text-unit">
				<h2 class="">JSK-koubou</h2>
				<p class="p1 icon-transparent icon-dot">Красивый канал японского мастера, на котором представлено много хороших видео, в том числе по самостоятельному изготовлению качественных станков и приспособлений для мебельного производства.</p>
				<p class="p1 icon-right print-no"><a href="https://www.youtube.com/channel/UCez62GvvsH05IunJJsRuvuQ" target="_blank" class="a1">Перейти на канал...</a></p>
			</div>
		</div>

	</div>
	
	<div class="anchor"><a name="form"></a></div>
	
	<div class="case print-no">
		<h2 class="">Знаете полезный канал? Предлагайте!</h2>
		<form class="">
			<div class="form-field bigform">
				<label for="vlog-email">Ваш E-mail:</label>
				<input type="email" placeholder="<?php echo $_SESSION['USER_MAIL']; ?>" onkeydown="if(event.keyCode==13){return false;}" name="vlog_mail" id="vlog-email" <?php if (empty($_SESSION['USER_MAIL'])) {echo 'required';} ?> />
			</div>
			<div class="form-field bigform">
				<label for="vlog-text">Адрес (или название) предлагаемого канала:</label>
				<textarea onkeydown="if(event.keyCode==13){return false;}" name="vlog_text" id="vlog-text" maxlength="1000" required></textarea>
			</div>
			<input type="submit" formaction="video.php" formmethod="post" value="Отправить" class="form-button enter" />
		</form>
		<?php
			echo $_SESSION["vlog_answer"];
			unset($_SESSION["vlog_answer"]);
		?>
	</div>
	
</article>
<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_footer.php'; ?>