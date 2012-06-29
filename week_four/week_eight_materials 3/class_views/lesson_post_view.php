<div id="mainwrap">
	<div class="header">
		<div class="main_logo"></div>
	</div>
	<div class="container mt">
		<div class="main_view_left">
			<?php
			if($_REQUEST['mess']){
				if(strlen($_REQUEST['mess']) > 2){
					echo '<span class="notification"><p>'.$_REQUEST['mess'].'</p></span>';
				}
			}
			?>
			<div class="sizeForm mlft">
			<?php
			// TAKE NOTE OF THE action="", this is where you will be posting your variables to
			?>
			
			<form id="post_messager" name="post_messager" action="/week_eight/post_variables_part_2.php" method="post" class="niceForm">
				<span class="block">
					<label for="first_name">First Name: </label>
					<input type="text" id="first_name" name="first_name" value="" class="sInput"/>
				</span>
				<span class="block">
					<label for="last_name">Last Name: </label>
					<input type="text" id="last_name" name="last_name" value="" class="sInput"/>
				</span>
				<span class="block">
					<label class="block" for="message">Message: </label>
					<textarea name="message" id="message" class="sInputTA"></textarea>
				</span>
				<span class="block indent_submit_button">
					<input type="submit" name="post_message" id="post_message" value="Post Message"/>
				</span>
				<div class="clearfix"></div>
			</form>
			</div>
		</div>
		<div class="main_view_right">
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="bottom_view">
	</div>
</div>