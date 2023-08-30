<?php
// имя пользователя
if (!empty($_SESSION["USER_NAME"])) { $user_name = $_SESSION["USER_NAME"]; } else { $user_name = "Вход"; } // по умолчанию $user_name = "Вход"

?>