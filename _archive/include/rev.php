<?php
// Функция стиля ".reverse"
// Запускаем счётчик, затем, при каждом обращении к функции из очередного блока текста, включаем или невключаем стиль ".reverse" в зависимости от цифры в счетчике (четной/нечетной)
$rev = 1;
function rev() {
	global $rev;
	if(($rev % 2) == 0) {
		echo 'reverse';
	}
	$rev++;
	return $rev;
}
?>