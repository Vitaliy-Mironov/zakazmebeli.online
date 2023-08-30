	<div class="login-window">
		<div class="login-window-item">
			<h2 class="">Вход</h2>
			<div class="icon-illustration icon-user"></div>
			<form class="">
				<div class="form-field">
					<label for="email">E-mail</label>
					<input type="email" onkeydown="if(event.keyCode==13){return false;}" name="user_mail" id="email" required />
				</div>
				<div class="form-field">
					<label for="password-input">Пароль</label>
					<input type="password" onkeydown="if(event.keyCode==13){return false;}" name="user_password" id="password-input" autocomplete="current-password" pattern="[A-Za-z0-9]{4,8}" minlength="4" maxlength="8" title="Состоит из цифр и латинских букв. От 4 до 8 символов." required />
					<span class="icon-low-vision" onclick="return show_hide_password(this);"></span>
					<script>
						function show_hide_password(target){
							var input = document.getElementById('password-input');
							if (input.getAttribute('type') == 'password') {
								input.setAttribute('type', 'text');
							} else {
								input.setAttribute('type', 'password');
							}
							return false;
						}
					</script>
				</div>
				<input type="submit" formaction="/login/" formmethod="post" value="Войти" class="form-button enter" />
			</form>
			<div class="forgot-password"><span class="icon-lightbulb"><a href="/forgot-password/" class="a-forgot">Забыли пароль?</a></span></div>
			<div class="button light"><a href="/registration/" class="icon-pencil-alt">Регистрация</a></div>
		</div>
	</div>