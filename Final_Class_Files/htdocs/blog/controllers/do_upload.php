<?php
//print_r($_FILES);
//this needs to be a full system path
require '../includes/session.php';
$dir = '/Applications/MAMP/htdocs/blog/media/';
$final_file = $dir . basename($_FILES['media']['name']);
if(move_uploaded_file($_FILES['media']['tmp_name'], '/Applications/MAMP/htdocs/blog/media/'.basename($_FILES['media']['name']))){
	$_SESSION['last_upload'] = basename($_FILES['media']['name']);
	header("Location: /blog/show_image.php");
} else {
	echo 'failed. Check that your uploads folder has global write access.';
}
?>