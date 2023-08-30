<div class="log">
<form><!-- кнопка очистки сессии -->
	<button name="unsess" value="unsess" type="submit" formaction="" formmethod="post" class="" onkeydown="if(event.keyCode==13){return false;}">session_unset</button>
</form><!-- /кнопка очистки сессии -->
<?php 
// вывод идентификатора сессии
echo '<p>SESSION_ID: <span>'.session_id().'</span></p>'."\n";

// вывод данных о браузере пользователя
echo '<p>USER_AGENT: <span>'.$_SERVER['HTTP_USER_AGENT'].'</span></p>'."\n";

/*
// текущая страница
echo '<p>REQUEST_URI: <span>'.$_SERVER['REQUEST_URI'].'</span></p>'."\n";
*/

// вывод переменных сессии
foreach ($_SESSION as $sess_key => $sess_name) {echo '<p>'.$sess_key.': <span>'.$sess_name.'</span></p>'."\n";}

// разрыв ссылки на последний элемент
unset($sess_key);
unset($sess_name);
?>
</div>