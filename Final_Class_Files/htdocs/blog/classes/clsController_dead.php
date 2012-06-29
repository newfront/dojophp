<?php
// Our Page Information and Type
class Controller{
	private $controller;
	// page is based off of name_view (_view.php gets appended automatically)
	public function __construct($pub_controllers){
		$this->controller = $pub_controllers;
		print_r($this->controller);
		$this->buildPage();
	}
	
	public function buildPage(){
		$tmp = Globals::getPageInfo();
		//echo "Cool".$this->controller;
		if($this->controller != null){
			if(is_array($this->controller)){
				foreach($this->controller as $controller){
					$_SERVER.include($tmp[1].(string) $controller.'_controller.php');
					echo $tmp[1].(string) $controller.'_controller.php';
				}
			} elseif(is_string($this->controller)){
				$_SERVER.include($tmp[1].(string) $this->controllers.'_controller.php');
			}
		}
	}
	
	/*public function buildPage(){
		$tmp = Globals::getPageInfo();
		if($this->controllers != null){
			if(is_array($this->controllers)){
				foreach($this->controllers as $controller){
					require_once($tmp[1].(string) $controller.'_controller.php');
				}
			} elseif(is_string($this->controllers)){
				include($tmp[1].(string) $this->controllers.'_controller.php');
			}
		}
	}
	*/
}
?>