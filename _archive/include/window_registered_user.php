	<div class="login-window">
		<div class="login-window-item">
			<h2 class=""><?php echo $user_name; ?></h2>
			<p class="current-project-name">Текущий проект:<br /><span class=""><?php if (isset($_SESSION["project_name"])) {echo '<a href="/do-it/my-project/" class="">'.$_SESSION["project_name"].'</a>';} else {echo 'Нет проекта';} ?></span></p>
			<div class="registered-user-buttons">
				<div class="registered-user-button">
					<div class="icon-illustration icon-user"></div>
					<p>Мой профиль</p>
					<a href="/do-it/profile/" rel="nofollow"></a>
				</div>
				<div class="registered-user-button">
					<div class="icon-illustration icon-doc"></div>
					<p>Создать новый проект</p>
					<a href="/do-it/" rel="nofollow"></a>
				</div>
				<div class="registered-user-button">
					<div class="icon-illustration icon-sliders"></div>
					<p>Мои настройки</p>
					<a href="/do-it/settings/" rel="nofollow"></a>
				</div>
				<div class="registered-user-button">
					<div class="icon-illustration icon-folder-open-empty"></div>
					<p>Открыть проект</p>
					<a href="/do-it/projects/" rel="nofollow"></a>
				</div>
				<div class="registered-user-button">
					<div class="icon-illustration icon-right">
					</div>
					<p>Выход</p>
					<form>
						<button name="unsess" value="unsess" type="submit" formaction="" formmethod="post" class="" onkeydown="if(event.keyCode==13){return false;}"></button>
					</form>
				</div>
				<?php if (isset($_SESSION['project_name'])) {echo '
				<div class="registered-user-button">
					<div class="icon-illustration icon-floppy"></div>
					<p>Сохранить проект</p>
					<a href="/do-it/my-project/save.php" rel="nofollow"></a>
				</div>
				';}?>
			</div>
		</div>
	</div>