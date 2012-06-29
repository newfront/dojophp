<?php
//our main blog Class
//require 'clsSanitize.php';
require 'clsDatabase.php';
class Blog{
	private $blogid;
	private $title;
	private $body;
	private $user_id;
	
	public function __construct(){}
	
	public function createBlogPost($title = null, $body = null){
		$this->title = (string) $title;
		$this->body = (string) $body;
		//$this->title = Sanitize::sanitize_string($this->title);
		//$this->body = Sanitize::sanitize_string($this->body);
		// add database method to push into Database
		// mysql_real_escape_string (php.net for use examples)
		$d = new Database();
		$d->open('hacker_blog');
		//$d = new Database();
		//$d->setDB('hacker_blog');
		$s = $d->q("INSERT INTO blog_entries (blog_id,user_id,blog_title,blog_created_at,blog_updated_at,blog_body) VALUES (NULL,1,'{$this->title}',now(),now(),'{$this->body}');");
		$d->close();
		if($s){
			return true;
		} else {
			return false;
		}
	}
	
	public function readBlogPost($start = 0, $end = 5){}
	
	public function editBlogPost(array $vals){}
	
	public function destroyBlogPost($id = null, $all = null){}
}


?>