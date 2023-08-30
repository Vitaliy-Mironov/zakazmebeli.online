<?php
session_start();
// 1. удаляем проект из текущей сессии
foreach ($_SESSION as $session_key => $session_value) {
	if(stristr($session_key, 'project_') == TRUE) {
		unset($_SESSION[$session_key]);
	}
}
// 2. переходим на главную страницу нового проекта
header ('Location: /do-it/');
exit();
?>