<div id="mainwrap">
	<div class="header">
		<div class="main_logo"></div>
	</div>
	<?php
	if($_SESSION['known_user']){
		echo '<span class="notification"><p>Session Data Found</p></span>';
	} else {
		echo '';
	}
	if($_REQUEST['mess']){
		echo '<span class="notification"><p>'.$_REQUEST['mess'].'</p></span>';
	}
	?>
	<div class="container mt">
		
		<div class="main_view_left">
			<div class="sizeForm mlft">
			<h3>Sessions</h3>
			<p class="mb block">Sessions are extremely powerful. With the simple extra layer of a session you can easily restrict where a user can go within your website.</p>
			<p class="block mb">
				<b>Examples:</b> <a href="/week_eight/session_controlled.php">I am located behind a session.</a><br>
				<a href="/week_eight/session_open.php">Open up a New Session</a> | <a href="/week_eight/session_destroy.php">Kill your current Session</a>
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