<?php
//get information about the page
// get page contents
class Page {
	
	private $page_id;
	
	public function __construct($id){
		if(is_int($id)) $this->page_id = $id;	
	}
	
	public function getPage($id = null){
		if(is_int($id)) $this->page_id = $id;
		$d = new Database();
		$d->open('hacker_blog');
		$s = $d->q("SELECT * FROM pages WHERE id = '{$this->page_id}'");
		if($s && $d->numrows() >= 1){
			return $d->mfa();
			$d->close();
		} else {
			return false;
		}
	}
}
?>