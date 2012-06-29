<?php
require_once("../blog/classes/clsUserMessage.php");
/* Job is to put data into an array and pass it to UserMessage */
if($_POST['first_name']){
	$user_data = array($_POST['first_name'],$_POST['last_name'],$_POST['message']);
	//print_r($user_data);
	// Add this to your UserMessage class, type is Comment
	$add_comment = new UserMessage($user_data,'blog_comment');
	
	$didPost = $add_comment->didAddToDB();
	if($didPost){
		echo "Success <a href='/week_eight/what_now.php?mess=onto better things I guess.'>Next:</a>";
		//header("Location:/week_eight/what_now.php?mess=onto better things I guess.");
	} else {
		$mess = "<h3>Failed</h3><p>You have already added this message. If you want to add another one, please provide your information below.</p>";
		echo "Failed <a href='/week_eight/post_variables_part_1.php?mess=$mess'>Next:</a>";
		//header("Location:/week_eight/post_variables_part_1.php?mess=$mess");
	}
} else {
	echo 'failed.';
}
?>