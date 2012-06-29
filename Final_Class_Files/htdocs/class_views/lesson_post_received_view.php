<?php
// look at all the goodies you have to work with.
$all_info = $_POST;
//print_r($all_info);
//example: Array ( [first_name] => ss [last_name] => ss [message] => ss [post_message] => Post Message ) 
// so we know how to handle this, we just assign to a variable, clean it and look at it.
$fname = $all_info['first_name'];
$lname = $all_info['last_name'];
$mess = $all_info['message'];
$html = '';
// important, you see that the Submit button has also been posted, you know now that this is from your site and not from a 3rd party action (although this can be spoofed easily, but it is one little step towards security)
if($_POST['post_message'] == "Post Message"){
	// we have made it into the post data successfully. Clap your Hands!!
	/*
	if you have not done this yet, please create the following Table in mysql.
	
	CREATE TABLE user_messages (
	user_message_id bigint auto_increment not null,
	first_name varchar(255) null,
	last_name varchar(255) null,
	id bigint null,
	message text not null,
	added_on datetime not null,
	type enum('blog_message','page_comment','inmail','thread') NULL,
	Primary Key(user_message_id)
	)
	
	*/
	$html .= "<h3>Notice</h3>";
	$html .= "First Name: ".$fname."<br>\n";
	$html .= "Last Name: ".$lname."<br>\n";
	$html .= "Message: ".$mess;
	//1. clean values, prep for inserting into MySQL (clsClean)
	//2. check to make sure that the values made it in successfully (clsDatabase > clsUserMessages)
	//3. move user to congratulations page, their post has been successful.
	//echo "Finally, got the right info here.";
	//print_r($all_info);
} else {
	echo 'Bad. Take them to the homepage';
}
?>
<div id="mainwrap">
	<div class="header">
		<div class="main_logo"></div>
	</div>
	<div class="container mt">
		<div class="main_view_left">
			<span class="notification">
			<p><?php
			echo $html;
			?>
			</p>
			<span class="mt mb block">
				<p><b>Is this what you would like to Submit?</b></p>
				<form name="confirm" id="confirm" action="../week_eight/post_success.php" class="niceForm" method="post">
					<input type="hidden" name="first_name" value="<?=$fname;?>"/>
					<input type="hidden" name="last_name" value="<?=$lname;?>"/>
					<input type="hidden" name="message" value="<?=$mess;?>"/>
					<span class="block">
						<input type="button" name="cancel" id="cancel" value="Cancel" class="cancel" onclick="javascript:history.back();"/>
						<input type="submit" name="confirm_message" id="confirm_message" value="Confirm Message"/>
					</span>
					<div class="clearfix"></div>
				</form>
			</span>
			</span>
			<div class="sizeForm" id="message_form" style="display:none;">
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