<?php
session_start();
// получаем данные
if (!empty($_POST["user_name"]) || !empty($_POST["user_mail"]) || !empty($_POST["user_password"])) {
// 1. Сравниваем полученные из формы данные с данными в сессии (взятые при авторизации из БД)
	if (!empty($_POST["user_name"]) && $_POST["user_name"] != $_SESSION["USER_NAME"]) {
		$genname = $_POST["user_name"]; // присваиваем переменной значение из формы
		require $_SERVER['DOCUMENT_ROOT'].'/include/db.php'; // подключаем БД
		$reg_users_line = "UPDATE `REG_USERS` SET `USER_NAME` = '".$genname."' WHERE `REG_USERS`.`USER_ID` = '".$_SESSION["USER_ID"]."'"; // формируем запрос к БД
		mysqli_query($db_connect, $reg_users_line); // отправляем запрос в БД
		mysqli_close($db_connect); // закрываем подключение к БД
		$_SESSION["USER_NAME"] = $genname; // перезаписываем переменную сессии
	}
	if (!empty($_POST["user_mail"]) && $_POST["user_mail"] != $_SESSION["USER_MAIL"]) {
		$genmail = $_POST["user_mail"];
		require $_SERVER['DOCUMENT_ROOT'].'/include/db.php';
		$reg_users_line = "UPDATE `REG_USERS` SET `USER_MAIL` = '".$genmail."' WHERE `REG_USERS`.`USER_ID` = '".$_SESSION["USER_ID"]."'";
		mysqli_query($db_connect, $reg_users_line);
		mysqli_close($db_connect); // закрываем подключение к БД
		$_SESSION["USER_MAIL"] = $genmail;
	}
	if (!empty($_POST["user_password"]) && $_POST["user_password"] != $_SESSION["USER_PASSWORD"]) {
		$genpass = $_POST["user_password"];
		require $_SERVER['DOCUMENT_ROOT'].'/include/db.php';
		$reg_users_line = "UPDATE `REG_USERS` SET `USER_PASSWORD` = '".$genpass."' WHERE `REG_USERS`.`USER_ID` = '".$_SESSION["USER_ID"]."'";
		mysqli_query($db_connect, $reg_users_line);
		mysqli_close($db_connect); // закрываем подключение к БД
		$_SESSION["USER_PASSWORD"] = $genpass;
	}
	$_SESSION["answer"] = '<p class="p1 icon-transparent icon-ok center green">Изменения успешно применены.</p>'; // выводим комментарий по итогу обработки
	header ('Location: /do-it/profile/'); // возвращаемся назад
	exit(); // прерываем работу скрипта, чтобы забыл о прошлом
} else {
	$_SESSION["answer"] = '<p class="p1 icon-transparent icon-attention center red">Не указаны данные для изменений.</p>'; // выводим комментарий по итогу обработки
	header ('Location: /do-it/profile/'); // иначе возвращаемся назад
	exit(); // прерываем работу скрипта, чтобы забыл о прошлом
}
?>