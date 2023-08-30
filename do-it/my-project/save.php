<?php
session_start();
// 1. подключаемся к БД
require $_SERVER['DOCUMENT_ROOT'].'/include/db.php';

// 2. проверяем наличие в сессии project_id - если нет - создаём, записываем в сессию и в БД (+ время создания проекта)
if (!isset($_SESSION['project_id'])) {
	$_SESSION['project_id'] = date("YmdHis").$_SESSION['USER_ID'];
	$_SESSION['project_date_create'] = date("Y-m-d H:i:s");
	mysqli_query($db_connect, "INSERT INTO `PROJECTS` (`project_id`, `project_date_create`, `project_date_change`) VALUES ('".$_SESSION['project_id']."', '".$_SESSION['project_date_create']."', '".$_SESSION['project_date_create']."')");
}

// 3. проверяем наличие в сессии project_USER_ID - если нет - создаём и записываем в сессию
if (!isset($_SESSION['project_USER_ID'])) {
	$_SESSION['project_USER_ID'] = $_SESSION['USER_ID'];
}

// 4. проверяем наличие нужных колонок в таблице БД, если каких-то нет - создаём и записываем данные из сессии в БД
foreach ($_SESSION as $session_key => $session_value) {
	if(stristr($session_key, 'project_') == true) {
		$db_query = mysqli_query($db_connect, "SELECT `".$session_key."` FROM `PROJECTS` WHERE ( `project_id` = '".$_SESSION['project_id']."' )"); // формируем запрос к БД
		if (mysqli_num_rows($db_query) != true) {
			mysqli_query($db_connect, "ALTER TABLE `PROJECTS` ADD `".$session_key."` VARCHAR(128) NULL"); // создаём новую колонку в БД
		}
		mysqli_query($db_connect, "UPDATE `PROJECTS` SET `".$session_key."` = '".$session_value."' WHERE `PROJECTS`.`project_id` = '".$_SESSION["project_id"]."'"); // записываем данные в БД
	}
}

// 5. записываем в сессию и в БД время изменения проекта
$_SESSION['project_date_change'] = date("Y-m-d H:i:s");
mysqli_query($db_connect, "UPDATE `PROJECTS` SET `project_date_change` = '".$_SESSION['project_date_change']."' WHERE `PROJECTS`.`project_id` = '".$_SESSION["project_id"]."'");

// 6. закрываем подключение к БД
mysqli_close($db_connect);

// 7. если нужно очистить сессию после сохранения (при переходе со страницы нового проекта при существующем открытом проекте)
if ($_SERVER['HTTP_REFERER'] == 'https://'.$_SERVER['HTTP_HOST'].'/do-it/') {
	header ('Location: /do-it/my-project/clear.php');
	exit();
}

// 8. возвращаемся на предыдущую страницу
header ('Location: '.$_SERVER['HTTP_REFERER']);
exit();
?>