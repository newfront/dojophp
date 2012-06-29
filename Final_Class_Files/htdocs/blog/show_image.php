<?php
require_once 'includes/common.php';
// do your controller calls
include $globs[1]."application_controller.php"; // calls navigation in
//include $globs[1]."homepage_controller.php";
//echo $_SESSION['last_upload'];
$title = "Upload Finished";
$meta_keys = "";
$meta_description = "";
$header = Header::compose("Everyone Needs a Blog",$title,$meta_keys,$meta_description,"uploaded");
echo $header;
$contents['page_contents'] = '<img src="../blog/media/'.$_SESSION['last_upload'].'"/>';
//render out your view
include 'views/regular_header_view.php';
include 'views/simple_page_view.php';
//hear comes the footer
$footer = Footer::foundation("main");
echo $footer;
?>