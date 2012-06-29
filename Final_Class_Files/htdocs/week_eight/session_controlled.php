<?php

//make sure you have this require, otherwise the current session data is not available
require_once '../blog/includes/session.php';
// THIS PAGE IS BEHIND A SESSION
if($_SESSION['known_user']){
	//load in the clsLayout.php file cause you need it now
	require_once '../blog/classes/clsLayout.php';
	// do your controller calls
	//include $globs[1]."application_controller.php"; // calls navigation in
	//include $globs[1]."homepage_controller.php";
	$title = "Hacker Dojo::Secret Session Controlled Area";
	$meta_keys = "hacker dojo, mountain view, blogs, building a simple blog";
	$meta_description = "Blogs have all the elements we need to create a very sophisticated system";
	$header = Header::compose("Welcome to Secrets",$title,$meta_keys,$meta_description,"lesson");
	echo $header;

	//render out your view
	include '../class_views/session_secret_view.php';
	//hear comes the footer
	$footer = Footer::foundation("main");
	echo $footer;
} else {
	header("Location: /week_eight/sessions_overview.php?mess=login to view content");
	//echo 'This area is private. Please <a href="/week_eight/sessions_overview.php">Go Back</a>';
}
?>