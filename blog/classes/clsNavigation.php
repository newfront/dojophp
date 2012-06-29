<?php
class Navigation{
	private $current;
	private $messages;
	
	public function __construct(){$this->getMainNavigation();}
	
	// function used to find main site navigation
	public function getMainNavigation(){
		
		$d = new Database();
		$d->open('hacker_blog');
		$s = $d->q("SELECT * FROM navigation");
		if($s){
			$r = $d->mfa();
			$this->messages = array("success"=>"Found Navigation");
			$d->close();
			return $r;
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
	
}

?>