<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_start.php'; ?>
<meta name="robots" content="noindex,nofollow" />
<title><?php echo $_SESSION["project_name"]; ?></title>
<meta name="description" content="" />
<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_header.php'; ?>
<h1 class=""><?php echo $_SESSION["project_name"]; ?></h1>
<article>
	<div class="icon-illustration icon-codeopen"></div>
	
	<div class="button-active-container">
		<a href="/do-it/workroom/" class="button-active custom-button">
			<span class="icon-right">Мастерская</span>
		</a>
	</div>
	
	<div class="button gray"><a href="delete.php" class="icon-trash-empty">Удалить проект</a></div>
</article>
<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_footer.php'; ?>