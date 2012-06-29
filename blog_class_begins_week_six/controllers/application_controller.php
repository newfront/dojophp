<?php
//main application methods
require_once 'classes/clsNavigation.php';
require_once 'classes/clsSanitize.php';
//require_once 'helpers/application_helper.php';//used for some neat tricks and what not (db side of things!)
$nav = new Navigation();
$simple_navigation = "<ul><li><a href=\"javascript:void(0);\">Action</a></li></ul>";
/*
$new = $nav->createNavigation("Box Office", "/blog/box_office", 1,2);
//use php to have gui access to your database
$bad_string = "            chicken little            ";
// good string
$good = Sanitize::clearWhiteSpaceLR($bad_string);
if (Sanitize::checkSize($good)){
	echo 'Our Word has passed the length test';
}
if(Sanitize::isEmailFormat('scott@newfrontcreative.com')){
	echo 'Your Email is valid';
}
*/
?>