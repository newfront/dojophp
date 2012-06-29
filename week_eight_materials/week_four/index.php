<?php
require_once('classes/clsGlobals.php');
require_once('classes/clsLayout.php');
require_once('classes/clsController.php');
require_once('classes/clsDatabase.php');
// do header
$title = "Cool Page 2";
$header = Header::compose("cool",$title,"keys,values,class,scripting","Fun class description is cool and stuff","contact");
echo $header;
// bring in controllers and page
// include controllers if any
// contollers can be array or string
//$controllers = array("basic_page","more_stuff");
//$controllers_for_page = PageControllers::buildPage($controllers);
// send fix on the controller class (clsController.php)
require 'controllers/basic_page_controller.php';
require 'controllers/more_stuff_controller.php';
// now that we have our content, let's build our view

include 'views/home_view.php';
//hear comes the footer
$footer = Footer::foundation("main");
echo $footer;
?>