<?php
//main application methods
require_once 'classes/clsNavigation.php';
require_once 'classes/clsSanitize.php';
//require_once 'helpers/application_helper.php';//used for some neat tricks and what not (db side of things!)
$nav = new Navigation();//if you add the parameter 'private' you will see all navigation items
// clsNavigation (if you want to add more menu types, add it to buildMenu)
$simple_navigation = $nav->buildMenu('list');
if($_SESSION && $_SESSION['loggedin'] === true){
	$user_status = '<div id="user_loggedin"><p>Welcome, '.$_SESSION['first_name'].' <a href="/blog/hackerblog/users/logout">logout</a></p></div>';
}
if(defined($_REQUEST['mess'])){
	$mess = '<span class="notification"><p>'.$_REQUEST['mess'].'</p></span>';
}
?>