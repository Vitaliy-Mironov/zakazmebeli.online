
<script>
// preloader
window.onload = function () {
	document.body.classList.add('loaded_hiding');
	window.setTimeout(function () {
		document.body.classList.add('loaded');
		document.body.classList.remove('loaded_hiding');
	}, 500);
}

// fullscreen
var elem = document.documentElement;
function openFullscreen() {
	if (elem.requestFullscreen) {
		elem.requestFullscreen();
	} else if (elem.mozRequestFullScreen) {
		elem.mozRequestFullScreen();
	} else if (elem.webkitRequestFullscreen) {
		elem.webkitRequestFullscreen();
	} else if (elem.msRequestFullscreen) {
		elem.msRequestFullscreen();
	}
	if (document.exitFullscreen) {
		document.exitFullscreen();
	} else if (document.mozCancelFullScreen) {
		document.mozCancelFullScreen();
	} else if (document.webkitExitFullscreen) {
		document.webkitExitFullscreen();
	} else if (document.msExitFullscreen) {
		document.msExitFullscreen();
	}
}

// меню 1-го уровня
function checkAddress(checkbox)
{
  if (checkbox.checked == true) { // если включаем чекбокс
    var checkboxes = document.getElementsByClassName('menu_level_1_checkbox');
    for (var i=0; i<checkboxes.length; i++) { // проходим по всем чекбоксам
      checkboxes[i].checked = false; // выключаем их
    }
    checkbox.checked = true; // и включаем текущий (потому что до этого выключили все)
	}
}
</script>
