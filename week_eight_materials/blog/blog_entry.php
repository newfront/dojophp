<?php
//blog_entry.php?name=$1&action=$2&id=$3
/*
To Each their own, let's cheat though and create some psudeo files!
#/blog/blog_entry.php?name=socks&action=show&id=23
#or simply: http://localhost:8888/blog/socks/show/23 
# You decide!!
*/
require_once 'includes/common.php';
if(isset($_REQUEST['action'])){
	$action = $_REQUEST['action'];
	if(isset($_REQUEST['id'])) $interest = $_REQUEST['id']; else $interest = "catch-all";
	switch($action){
		case "show";
			echo "I REALLY LOVE ACTION = ".$action;
			//get blog information
			//check user credentials
			//can users comment? write?
			include $globs[1]."application_controller.php"; // calls navigation in
			include $globs[1]."blog_controller.php"; //get blog related information
			$title = "Hacker Blog :: $interest";
			//can gather keyword information from the database
			//can grab description from database
			$meta_keys = "hacker dojo, mountain view, blogs, building a simple blog";
			$meta_description = "Blogs have all the elements we need to create a very sophisticated system";
			$header = Header::compose("Everyone Needs a Blog",$title,$meta_keys,$meta_description,"blog");
			echo $header;

			//render out your view
			include 'views/partials/blog_header_partial_view.php';
			include 'views/blog_show_view.php';
			//hear comes the footer
			$footer = Footer::foundation("main");
			echo $footer;
		break;
		
		case "edit";
			
		break;
	
		case "list";
			//get all blog entries
			// order by DEF
			// limit = 5
		break;
	
		default;
		break;
	} 
} else {
	echo 'Your Missing your Action or ID from your URL';
}
?>