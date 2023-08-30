<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_start.php'; ?>
<meta name="robots" content="noindex,nofollow" />
<title>Мои проекты</title>
<meta name="description" content="" />
<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_header.php'; ?>
<h1 class="">Мои проекты</h1>
<article>
	<div class="icon-illustration icon-archive"></div>
<?php
require $_SERVER['DOCUMENT_ROOT'].'/include/db.php'; // подключаемся к БД

$db_query = mysqli_query($db_connect, "SELECT `project_USER_ID` FROM `PROJECTS` WHERE ( `project_USER_ID` = '".$_SESSION['USER_ID']."' )");
if (mysqli_num_rows($db_query) == true) { // проверяем, есть ли у пользователя проекты в БД
	require $_SERVER['DOCUMENT_ROOT'].'/do-it/projects/table.php'; // подключаем таблицу проектов
} else if (isset($_SESSION['project_name'])) { // проверяем, есть ли у пользователя проекты в сессии
	require $_SERVER['DOCUMENT_ROOT'].'/do-it/projects/table.php'; // подключаем таблицу проектов
} else { // если у пользователя ещё нет проектов
	require $_SERVER['DOCUMENT_ROOT'].'/do-it/projects/empty.php'; // предлагаем создать проект
}

mysqli_close($db_connect); // закрываем подключение к БД
?>
</article>
<?php require $_SERVER['DOCUMENT_ROOT'].'/include/html_footer.php'; ?>