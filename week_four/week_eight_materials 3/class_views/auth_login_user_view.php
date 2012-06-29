<div id="mainwrap">
	<div class="header">
		<div class="main_logo"></div>
	</div>
	<?php
	if($_REQUEST['mess']){
		echo '<span class="notification"><p>'.$_REQUEST['mess'].'</p></span>';
	}
	?>
	<div class="container mt">
		<div class="main_view_left">
			<div class="sizeForm mlft">
			<h3>Login</h3>
			<p class="mb block">Enter your Username and Password</p>
			<form id="post_messager" name="post_messager" action="/week_eight/check_username_login.php" method="post" class="niceForm">
				<span class="block">
					<label for="first_name">Login: </label>
					<input type="text" id="login" name="login" value="" class="sInput"/>
				</span>
				<span class="block">
					<label for="password">Password: </label>
					<input type="password" id="password" name="password" value="" class="sInput"/>
				</span>
				<span class="block indent_submit_button">
					<input type="submit" name="login_btn" id="login_btn" value="Login"/>
				</span>
				<div class="clearfix"></div>
			</form>
			<p class="block mb">
				
			</p>
			</div>
		</div>
		<div class="main_view_right">
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="bottom_view">
	</div>
</div>