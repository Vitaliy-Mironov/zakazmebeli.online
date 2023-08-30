<?php
// получаем данные поля "E-mail"
if (!empty($_POST["user_mail"])) {
	$genmail = $_POST["user_mail"];
// 1. проверяем наличие адреса электронной почты  в БД
	require $_SERVER['DOCUMENT_ROOT'].'/include/db.php'; // подключаем БД
	$db_query = mysqli_query($db_connect, "SELECT `USER_MAIL` FROM `REG_USERS` WHERE ( `USER_MAIL` = '".$genmail."' )"); // формируем запрос к БД
	if (mysqli_num_rows($db_query) != true) {
		header ('Location: /forgot-password/wrong_address/');
		exit();
	}
// 2. получаем из БД имя пользователя и пароль
	$db_query = mysqli_query($db_connect, "SELECT `USER_NAME`, `USER_PASSWORD` FROM `REG_USERS` WHERE `USER_MAIL` LIKE '".$genmail."'"); // формируем запрос к БД
	$db_rows = mysqli_fetch_all($db_query, MYSQLI_ASSOC); // сливаем данные из БД в массив
	foreach ($db_rows as $db_row) {
		$genname = $db_row['USER_NAME'];
		$genpass = $db_row['USER_PASSWORD'];
	}
// 3. отправляем пароль на e-mail пользователя
	$subject = '=?utf-8?B?'.base64_encode('Сообщение с сайта '.$_SERVER['HTTP_HOST']).'?=';
	$message = '
	<html lang="ru">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
			<title>Восстановление пароля</title>
			<style>
				p {font-size: 16px;}
			</style>
		</head>
		<body>
			<p>Здравствуйте, '.$genname.'.</p>
			<p>Ваш пароль для входа на сайт: <b>'.$genpass.'</b></p>
			<p>Сообщение отправлено автоматически, на него не нужно отвечать.</p>
		</body>
	</html>
	';
	$headers = 'From: mail@zakazmebeli.pro'."\r\n".'Content-type: text/html; charset = utf-8';
	$send = mail($genmail, $subject, $message, $headers);
// 4. переходим на страницу с сообщеним об успешной отправке
	header ('Location: /forgot-password/success/');
	mysqli_close($db_connect); // закрываем подключение к БД
	exit();
} else {
	header ('Location: /forgot-password/'); // иначе возвращаемся на предыдущую страницу
	exit(); // прерываем работу скрипта, чтобы забыл о прошлом
}

?>