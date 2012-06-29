<?php
//our main blog Class

class Blog{
	private $blogid;
	private $title;
	private $body;
	private $user_id;
	
	public function __construct(){}
	
	public function createBlogPost($title = null, $body = null){
		$this->title = (string) $title;
		$this->body = (string) $body;
		$this->title = Sanitize::sanitize_string($this->title);
		$this->body = Sanitize::sanitize_string($this->body);
		// add database method to push into Database
	}
	
	public function readBlogPost($start = 0, $end = 5){}
	
	public function editBlogPost(array $vals){}
	
	public function destroyBlogPost($id = null, $all = null){}
}


?>