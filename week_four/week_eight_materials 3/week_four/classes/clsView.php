<?php
// views are what the user actually sees when they are surfing the web
class View{
	private $view;
	public $page_variables;//bring in a hash, or an array for the page to use
	
	public function __construct($p){
		echo 'do page';
		$this->view = $p;
		//$tmp = Globals::getPageInfo();
		//$this->page = $tmp[0].(string) $this->view.'_view.php';
	}
	
	public function getPage(){
		return $this->view;
	}
}
?>