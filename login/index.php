<?php
session_start();
// получаем данные поля "E-mail" и поля "Пароль"
if (!empty($_POST["user_mail"]) && !empty($_POST["user_password"])) {
	$genmail = $_POST["user_mail"];
	$genpass = $_POST["user_password"];
// 1. проверяем e-mail по БД
	require $_SERVER['DOCUMENT_ROOT'].'/include/db.php'; // подключаем БД
	$db_query = mysqli_query($db_connect, "SELECT `USER_MAIL` FROM `REG_USERS` WHERE ( `USER_MAIL` = '".$genmail."' )"); // формируем запрос к БД
	if (mysqli_num_rows($db_query) != true) {
		header ('Location: /login/wrong_address/');
		exit();
	}
// 2. проверяем, соответствие пароля адресу e-mail по БД
	$db_query = mysqli_query($db_connect, "SELECT `USER_PASSWORD` FROM `REG_USERS` WHERE `USER_MAIL` LIKE '".$genmail."'"); // формируем запрос к БД
	$db_rows = mysqli_fetch_all($db_query, MYSQLI_ASSOC); // сливаем данные из БД в массив
	foreach ($db_rows as $db_row) {
		$db_pass = $db_row['USER_PASSWORD'];
	}
	if ($genpass != $db_pass) {
		header ('Location: /login/wrong_password/');
		exit();
	}
// 3. записываем в сессию данные пользователя из БД
	$db_query = mysqli_query($db_connect, "SELECT * FROM `REG_USERS` WHERE `USER_MAIL` LIKE '".$genmail."'"); // формируем запрос к БД "USERS"
	$db_rows = mysqli_fetch_all($db_query, MYSQLI_ASSOC); // сливаем данные из БД в массив
	foreach ($db_rows as $db_row) {
		$_SESSION = $db_row; // записываем в сессию
	}
// 4. возвращаемся на предыдущую страницу
	header ('Location: '.$_SERVER['HTTP_REFERER']);
	mysqli_close($db_connect); // закрываем подключение к БД
	exit();
} else {
	header ('Location: /'); // иначе возвращаемся на главную страницу
	exit(); // прерываем работу скрипта, чтобы забыл о прошлом
}
?>