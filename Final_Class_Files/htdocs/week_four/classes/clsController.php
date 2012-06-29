<?php
// Our Page Information and Type
abstract class Controller{
	// page is based off of name_view (_view.php gets appended automatically)
	abstract function buildPage($controllers);
}

class PageControllers extends Controller{
	// get controllers and needed information pre page build
	function buildPage($controllers){
		$tmp = Globals::getPageInfo();
		if($controllers != null){
			if(is_array($controllers)){
				foreach($controllers as $controller){
					include($tmp[1].(string) $controller.'_controller.php');
				}
			} elseif(is_string($controllers)){
				include($tmp[1].(string) $controllers.'_controller.php');
			}
		}
	}
}
?>