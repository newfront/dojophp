<?php
require_once '../blog/includes/session.php';
require_once '../blog/classes/clsLayout.php';
// do your controller calls
//include $globs[1]."application_controller.php"; // calls navigation in
//include $globs[1]."homepage_controller.php";
$title = "Hacker Dojo::Log User In";
$meta_keys = "hacker dojo, mountain view, blogs, building a simple blog";
$meta_description = "Blogs have all the elements we need to create a very sophisticated system";
$header = Header::compose("Upload File",$title,$meta_keys,$meta_description,"lesson");
echo $header;

//render out your view
include '../class_views/upload_file.php';
//hear comes the footer
$footer = Footer::foundation("main");
echo $footer;
?>