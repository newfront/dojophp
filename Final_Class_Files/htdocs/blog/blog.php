<?php
//Used to create pages that are fairly simple
require_once 'includes/common.php';
require_once 'classes/clsPage.php';
require_once 'classes/clsBlog.php';
include $globs[1]."application_controller.php"; // calls navigation in

// now fill in the body of the page
switch($_REQUEST['action']){
	case "about":
	$page = new Page(1);
	$contents = $page->getPage();
	//print_r($contents);
	/*
	[id]
	[page_name]
	[page_navigation_id]
	[page_contents]
	[page_keywords]
	[page_description]
	*/
	$title = $contents['page_name'];
	$meta_keys = $contents['page_keywords'];
	$meta_description = $contents['page_description'];
	$header = Header::compose("About this Blog",$title,$meta_keys,$meta_description,"about");
	echo $header;
	//render out your view
	include 'views/regular_header_view.php';
	include 'views/simple_page_view.php';
	//hear comes the footer
	$footer = Footer::foundation("main");
	echo $footer;
	break;
	
	case "recent":
		require $globs[1]."recent_controller.php";
		$title = 'Recent Blog Posts';
		$meta_keys = "";
		$meta_description = "";
		$header = Header::compose("Recent Posts",$title,$meta_keys,$meta_description,"recents");
		echo $header;
		//render out your view
		include 'views/regular_header_view.php';
		$contents['page_contents'] = $recent_posts;
		include 'views/simple_page_view.php';
		//hear comes the footer
		$footer = Footer::foundation("main");
		echo $footer;
	break;
	
	case "show":
		echo 'cool';
	break;
	
	case "legal":
	
	break;
	
	default:
	
	break;
}
?>