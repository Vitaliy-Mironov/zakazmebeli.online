<?php
// время жизни сессии == сутки
ini_set('session.gc_maxlifetime', 86400);
ini_set('session.cookie_lifetime', 0);
session_set_cookie_params(0);

// запись сессии в директорию sessions на сайте
// ini_set('session.save_path', $_SERVER['DOCUMENT_ROOT'].'/sessions/');

// старт сессии
session_start();

// сброс сессии
$unsess = $_POST["unsess"];
if (!empty($unsess)) { session_unset(); }

// подключение переменных сессии
require $_SERVER['DOCUMENT_ROOT'].'/include/sessions.php';

// проверка доступа, - на уровень 'do-it' и выше доступ только зарегистрированным
$this_url_name = $_SERVER['SCRIPT_URL']; // получаем url текущей страницы
$this_url_analysis = explode("/", $this_url_name); // разбиваем url на части разделителем '/'
$this_url_folder = $this_url_analysis[1]; // находим название первой папки
if ($this_url_folder === 'do-it' && $user_name === "Вход") {
	header ('Location: /');
	exit();
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="author" content="Vitaliy Mironov, telegram: @MIRONOV_VITALIY" />
<meta name="copyright" content="Mironov V.A." />