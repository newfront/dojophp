<?php
class Navigation{
	private $current;
	public $messages;
	// public or private or all
	private $type;
	// menu type
	
	public function __construct($type = null){
		$this->type = $type;
		$this->getMainNavigation();
	}
	
	// function used to find main site navigation
	public function getMainNavigation(){
		$d = new Database();
		$d->open('hacker_blog');
		$sql = "SELECT * FROM navigation ";
		if($this->type == 'private'){
			$sql .= " WHERE public = 0 ";
		} else {
			$sql .= " WHERE private = 1 ";
		}
		$s = $d->q($sql);
		if($s && $d->numrows() >= 1){
			$arr = array();
			while($r = $d->mfa()){
				//print_r($r);
				array_push($arr, $r);
			}
			$this->messages = array("success"=>"Found Navigation");
			$this->current = $arr;
			return $arr;
			$d->close();
		} else {
			$this->messages = array("error"=>"Could not Find Navigation");
			$d->close();
			return false;
		}
	}
	
	//function to Create to General Navigation (C)
	// accepts: 1. nav_name, 2. route, 3. parent_id -- if any, 4. privacy setting
	public function createNavigation($nav_name, $route, $parent_id = null,$privacy_setting = null){
		//echo (string) $nav_name.' '. (string) $route.' '. (integer) $parent_id.' '. (integer) $privacy_setting;
		
	}
	
	public function showNavigation(){
		return $this->current;
	}
	
	public function buildMenu($type = null){
		if($type == null) $type = 'list';
		switch($type){
			case "list":
				$html = '<ul class="navigation">';
				foreach($this->current as $nav){
					$html .= '<li><a href="'.$nav['route'].'">'.$nav['nav_name'].'</a></li>';
				}
				$html .= '</ul><div class="clearfix"></div>';
			break;
		}
		return $html;
	}
	
}

?>