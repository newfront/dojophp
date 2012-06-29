<?php
//Users Page
require_once 'includes/common.php';
require_once 'classes/clsPage.php';
include $globs[1]."application_controller.php"; // calls navigation in
//
switch($_REQUEST['action']){
	case "login":
		$title = "login";
		$meta_keys = "";
		$meta_description = "";
		$header = Header::compose("Everyone Needs a Blog",$title,$meta_keys,$meta_description,"login");
		echo $header;
		//render out your view
		include 'views/regular_header_view.php';
		include 'views/login_view.php';
		//hear comes the footer
		$footer = Footer::foundation("main");
		echo $footer;
	break;
	
	case "logout":
		session_destroy();
		unset($_SESSION);
		header("Location: /blog/");
	break;
	
	default:
		echo "err";
	break;
}
?>