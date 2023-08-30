<?php
// подключение к БД

// доступы к БД
$db_host = 'localhost:3306'; // адрес сервера БД
$db_user = 'zakazmeb_qwerty'; // пользователь
$db_pass = 'C}$n%7z2^f9q'; // пароль
$db_name = 'zakazmeb_test'; // имя БД 

// соединение с БД MySQL
$db_connect = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// на всякий случай дублируем установку кодировки UTF8
mysqli_query($db_connect, "SET NAMES 'utf8'");
?>