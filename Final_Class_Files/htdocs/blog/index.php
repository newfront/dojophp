<?php
require_once 'includes/common.php';
require_once 'classes/clsPage.php';
require_once 'classes/clsBlog.php';
// do your controller calls
include $globs[1]."application_controller.php"; // calls navigation in
include $globs[1]."homepage_controller.php";
//
$page = new Page(2);
$contents = $page->getPage();
$title = $contents['page_name'];
$meta_keys = $contents['page_keywords'];
$meta_description = $contents['page_description'];
$header = Header::compose("Everyone Needs a Blog",$title,$meta_keys,$meta_description,"home");
echo $header;

//render out your view
include 'views/regular_header_view.php';
include 'views/home_view.php';
//hear comes the footer
$footer = Footer::foundation("main");
echo $footer;
?>