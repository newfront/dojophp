<?php
// Our Page Information and Type
abstract class Page{
	// page is based off of name_view (_view.php gets appended automatically)
	abstract function buildPage($controllers);
}

class PageControllers extends Page{
	// get controllers and needed information pre page build
	function buildPage($controllers){
		$tmp = Globals::getPageInfo();
		if($controllers != null){
			if(is_array($controllers)){
				foreach($controllers as $controller){
					require_once($tmp[1].(string) $controller.'_controller.php');
				}
			} elseif(is_string($controllers)){
				require_once($tmp[1].(string) $controllers.'_controller.php');
			}
		}
	}
}
?>