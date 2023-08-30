<?php
session_start();
if (!empty($_POST["project_name"])) {
	$_SESSION["project_name"] = htmlentities($_POST["project_name"], ENT_QUOTES, 'UTF-8');
}
if (!empty($_POST["project_comment"])) {
	$_SESSION["project_comment"] = htmlentities($_POST["project_comment"], ENT_QUOTES, 'UTF-8');
}
header ('Location: /do-it/my-project/');
exit(); // прерываем работу скрипта, чтобы забыл о прошлом
?>