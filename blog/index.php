<?php
require_once 'includes/common.php';
// do your controller calls
include $globs[1]."application_controller.php"; // calls navigation in
include $globs[1]."homepage_controller.php";
$title = "Hacker Dojo::OOP PHP Blog";
$meta_keys = "hacker dojo, mountain view, blogs, building a simple blog";
$meta_description = "Blogs have all the elements we need to create a very sophisticated system";
$header = Header::compose("Everyone Needs a Blog",$title,$meta_keys,$meta_description,"home");
echo $header;

//render out your view
include 'views/home_view.php';
//hear comes the footer
$footer = Footer::foundation("main");
echo $footer;
?>