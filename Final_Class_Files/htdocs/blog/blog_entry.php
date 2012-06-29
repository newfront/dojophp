<?php
//blog_entry.php?name=$1&action=$2&id=$3
/*
To Each their own, let's cheat though and create some psudeo files!
#/blog/blog_entry.php?name=socks&action=show&id=23
#or simply: http://localhost:8888/blog/socks/show/23 
# You decide!!
*/
require_once 'includes/common.php';
require_once 'classes/clsPage.php';
require_once 'classes/clsBlog.php';
include $globs[1]."application_controller.php"; // calls navigation in

// now fill in the body of the page
switch($_REQUEST['action']){
	case "show":
		if($_REQUEST['id']) $post = (int) $_REQUEST['id'];
		if($post){
			$blog = new Blog();
			$contents = $blog->readBlogPost(0,1,$post,null);
			//print_r($blog_post);
			$title = $contents[0]['blog_title'];
			$meta_keys = $contents[0]['blog_keywords'];
			$meta_description = $contents[0]['blog_description'];
			$header = Header::compose("About this Blog",$title,$meta_keys,$meta_description,"blog");
			echo $header;
			//render out your view
			include 'views/regular_header_view.php';
			include 'views/blog_show_view.php';
			//hear comes the footer
			$footer = Footer::foundation("main");
			echo $footer;
		} else {
			echo 'failed';
		}
	break;
	
	case "edit":
	
	break;
	
	case "destroy":
	
	break;
	
	default:
		header("Location: /blog/hackerblog/show/");
	break;
}
?>