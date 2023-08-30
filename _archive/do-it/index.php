<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_start.php'; ?>
<meta name="robots" content="noindex,nofollow" />
<title>Новый проект</title>
<meta name="description" content="" />
<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_header.php'; ?>
<h1 class="">Новый проект</h1>
<?php if (isset($_SESSION["project_name"])) {
	echo '
<article>
	<div class="icon-illustration icon-attention red"></div>
	<p class="p1 icon-transparent icon-dot red">У Вас уже есть открытый проект "<a href="/do-it/my-project/" class="a1">'.$_SESSION["project_name"].'</a>". Создание нового проекта приведёт к потере несохранённой информации по открытому проекту!</p>
	<div class="text-unit">
		<div class="button big bg-left"><a href="/do-it/my-project/" class="">Вернуться к текущему открытому проекту</a></div>
		<div class="button big bg-floppy"><a href="/do-it/my-project/save.php" class="">Сохранить текущий открытый проект и создать новый</a></div>
		<div class="button light big bg-trash"><a href="/do-it/my-project/clear.php" class="">Закрыть текущий открытый проект без сохранения и создать новый</a></div>
	</div>
</article>
';
} else {
	echo '
<article>
	<div class="icon-illustration icon-doc"></div>
	<p class="p1 icon-transparent icon-dot">Приступим! Назовите Ваш проект. Например, - "Кухня моей мечты!", если делаете для себя, или "Заказ #369. Шкаф-купе", если профессионально занимаетесь изготовлением мебели.</p>
	<form class="">
		<div class="form-field bigform">
			<label for="project-name">Название проекта</label>
			<input type="text" onkeydown="if(event.keyCode==13){return false;}" name="project_name" id="project-name" maxlength="128" required />
		</div>
		<div class="form-field bigform">
			<label for="project-comment">Комментарий к проекту</label>
			<input type="text" onkeydown="if(event.keyCode==13){return false;}" name="project_comment" id="project-comment" maxlength="128" />
		</div>
		<input type="submit" formaction="form.php" formmethod="post" value="Применить" class="form-button enter" />
	</form>
</article>
';
}
?>

<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_footer.php'; ?>