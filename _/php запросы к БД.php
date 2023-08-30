<?php
	// запросы к таблице БД
	$a = "SELECT * FROM `REG_USERS` WHERE `USER_ID` > 0"; // SQL-запрос на выбор всей таблицы (не пробовал, но возможно подойдёт и вариант "SELECT * FROM `REG_USERS`")
	$a = "SELECT * FROM `REG_USERS` WHERE `USER_MAIL` LIKE 'mironov@n1.by'"; //
	$a = "SELECT `USER_MAIL` FROM `REG_USERS` WHERE ( `USER_MAIL` = 'mironov@n1.by' )"; // SQL-запрос на выбор конкретного элемента
	
	// заполнение таблицы БД
	$a = "INSERT INTO `REG_USERS` (`USER_ID`, `USER_NAME`, `USER_MAIL`, `USER_PASSWORD`) VALUES (NULL, 'Иван', 'ivan@mail.ru', '1a2b3c')"; // SQL-запрос
	mysqli_query($db_connect, $a);
	
	// закрываем подключение к БД
	mysqli_close($db_connect);
?>