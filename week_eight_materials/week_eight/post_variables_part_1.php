<?php
// The objective here is to take a simple web form (slightly designed with the help of css 3), and post the contents to a page to do some magic with them. 
require_once '../blog/classes/clsLayout.php';
// do your controller calls
//include $globs[1]."application_controller.php"; // calls navigation in
//include $globs[1]."homepage_controller.php";
$title = "Hacker Dojo::OOP PHP Blog";
$meta_keys = "hacker dojo, mountain view, blogs, building a simple blog";
$meta_description = "Blogs have all the elements we need to create a very sophisticated system";
$header = Header::compose("Form 1: Send Post",$title,$meta_keys,$meta_description,"lesson");
echo $header;

//render out your view
include '../class_views/lesson_post_view.php';
//hear comes the footer
$footer = Footer::foundation("main");
echo $footer;
?>