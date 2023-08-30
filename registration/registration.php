<?php
// получаем данные поля "Имя" и поля "E-mail"
if (!empty($_POST["user_name"]) && !empty($_POST["user_mail"])) {
	$genname = $_POST["user_name"];
	$genmail = $_POST["user_mail"];
// 1. проверяем уникальность адреса электронной почты (если такой адрес уже есть в БД - выводим сообщение об этом и уточняем, нужно ли напомнить пароль или зарегистрироваться с другим e-mail)
	require $_SERVER['DOCUMENT_ROOT'].'/include/db.php'; // подключаем БД
	$db_query = mysqli_query($db_connect, "SELECT `USER_MAIL` FROM `REG_USERS` WHERE ( `USER_MAIL` = '".$genmail."' )"); // формируем запрос к БД
	if (mysqli_num_rows($db_query) == true) {
		header ('Location: /registration/has_already/');
		exit();
	}
// 2. генерируем пароль для пользователя (шестизначный)
	$genpass = bin2hex(random_bytes(3));
// 3. записываем данные пользователя (id, имя, e-mail, пароль) в БД
	$reg_users_qwerty_line = "INSERT INTO `REG_USERS` (`USER_ID`, `USER_NAME`, `USER_MAIL`, `USER_PASSWORD`) VALUES (NULL, '".$genname."', '".$genmail."', '".$genpass."')";
	mysqli_query($db_connect, $reg_users_qwerty_line);
// 4. отправляем пароль на e-mail пользователя
	$subject = '=?utf-8?B?'.base64_encode('Сообщение с сайта '.$_SERVER['HTTP_HOST']).'?=';
	$message = '
	<html lang="ru">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
			<title>Успешная регистрация</title>
			<style>
				p {font-size: 16px;}
			</style>
		</head>
		<body>
			<p>Здравствуйте, '.$genname.'.</p>
			<p>Вы успешно зарегистрировались на сайте <a href="https://'.$_SERVER['HTTP_HOST'].'/">'.$_SERVER['HTTP_HOST'].'</a>.</p>
			<p>Ваш пароль для входа на сайт: <b>'.$genpass.'</b></p>
			<p>Сообщение отправлено автоматически, на него не нужно отвечать.</p>
		</body>
	</html>
	';
	$headers = 'From: mail@zakazmebeli.pro'."\r\n".'Content-type: text/html; charset = utf-8';
	$send = mail($genmail, $subject, $message, $headers);
// 5. переходим на страницу с сообщеним об успешной регистрации
	header ('Location: /registration/success/');
	mysqli_close($db_connect); // закрываем подключение к БД
	exit();
} else {
	header ('Location: /registration/'); // иначе возвращаемся на страницу регистрации
	exit(); // прерываем работу скрипта, чтобы забыл о прошлом
}
?>