<?php
session_start();
// 1. проверяем наличие проекта в БД (если есть, - удаляем)
require $_SERVER['DOCUMENT_ROOT'].'/include/db.php'; // подключаем БД
$db_query = mysqli_query($db_connect, "SELECT `project_id` FROM `PROJECTS` WHERE ( `project_id` = '".$_SESSION['project_id']."' )"); // формируем запрос к БД
if (mysqli_num_rows($db_query) == true) {
	mysqli_query($db_connect, "DELETE FROM `PROJECTS` WHERE `PROJECTS`.`project_id` = '".$_SESSION['project_id']."'");
}
// 2. удаляем проект из текущей сессии
require $_SERVER['DOCUMENT_ROOT'].'/do-it/my-project/clear.php';
?>