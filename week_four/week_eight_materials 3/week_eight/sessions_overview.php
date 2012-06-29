<?php
// The objective here is to take a simple web form (slightly designed with the help of css 3), and post the contents to a page to do some magic with them. 
require_once '../blog/includes/session.php';
require_once '../blog/classes/clsLayout.php';
// do your controller calls
//include $globs[1]."application_controller.php"; // calls navigation in
//include $globs[1]."homepage_controller.php";
$title = "DOJO PHP: Week 8: Sessions";
$meta_keys = "hacker dojo, mountain view, blogs, building a simple blog";
$meta_description = "Blogs have all the elements we need to create a very sophisticated system";
$header = Header::compose("Form Message Success: Post in Database",$title,$meta_keys,$meta_description,"lesson");
echo $header;
//render out your view
include '../class_views/sessions_intro_view.php';
//hear comes the footer
$footer = Footer::foundation("main");
echo $footer;
?>