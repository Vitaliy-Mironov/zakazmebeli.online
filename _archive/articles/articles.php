<?php
session_start();
if (empty($_POST["art_mail"])) {
	$art_form_mail = $_SESSION['USER_MAIL'];
} else {
	$art_form_mail = $_POST["art_mail"];
}
$art_form_text = htmlentities($_POST["art_text"], ENT_QUOTES, 'UTF-8');
// отправка письма
$subject = '=?utf-8?B?'.base64_encode('Сообщение из раздела Статьи сайта '.$_SERVER['HTTP_HOST']).'?=';
$message = '
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>Предложение статьи от посетителя сайта '.$_SERVER['HTTP_HOST'].'</title>
		<style>
			p {font-size: 16px;}
		</style>
	</head>
	<body>
		<p>'.$art_form_mail.' пишетет:</p>
		<p>'.$art_form_text.'</p>
	</body>
</html>
';
$headers = 'From: mail@zakazmebeli.pro'."\r\n".'Content-type: text/html; charset = utf-8';
$send = mail('admin@zakazmebeli.pro', $subject, $message, $headers);
$_SESSION["art_answer"] = '<p class="p1 icon-transparent icon-ok center green">Спасибо! Ваше сообщение отправлено.</p>'; // выводим комментарий по итогу обработки
header ('Location: /articles/#form');
exit(); // прерываем работу скрипта, чтобы забыл о прошлом
?>