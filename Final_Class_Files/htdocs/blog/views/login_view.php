<?=$mess;?>
<div class="main_view_left">
	<?#=$contents['page_contents'];?>
	<div class="simple_page sizeForm mlft">
		<h3>Login</h3>
		<p class="mb block">Enter your Username and Password</p>
		<form id="post_messager" name="post_messager" action="/blog/controllers/check_username_password.php" method="post" class="niceForm">
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
	</div>
</div>
<div class="main_view_right">
</div>
<div class="clearfix"></div>
<div class="bottom_view">
</div>