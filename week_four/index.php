<?php
require_once('classes/clsGlobals.php');
require_once('classes/clsLayout.php');
require_once('classes/clsPage.php');
require_once('classes/clsDatabase.php');
// do header
$header = Header::compose("main","homepage","keys","description","home");
echo $header;
// bring in controllers and page
// include controllers if any
// contollers can be array or string
$controllers = array("basic_page","more_stuff");
$controllers_for_page = PageControllers::buildPage($controllers);
// now that we have our content, let's build our view
require_once('views/home_view.php');
//hear comes the footer
$footer = Footer::foundation("main");
echo $footer;
?>