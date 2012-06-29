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
			<h3>Upload a File</h3>
			<p class="mb block">Please get a file to upload. Max 1 GB.</p>
			<form id="post_messager" name="post_messager" action="../blog/controllers/do_upload.php" method="post" class="niceForm" enctype="multipart/form-data">
				<span class="block">
					<label for="file">File: </label>
					<input name="media" type="file" />
				</span>
				<span class="block indent_submit_button">
					<input type="submit" name="login_btn" id="login_btn" value="Upload"/>
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