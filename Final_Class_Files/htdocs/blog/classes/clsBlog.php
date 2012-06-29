<?php
//our main blog Class
//require 'clsSanitize.php';
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
	//ex. ->readBlogPost(0,20,null,'blog_title DESC')
	public function readBlogPost($start = 0, $end = 5, $post_id = null, $order = null){
		$d = new Database();
		$d->open('hacker_blog');
		$sql = "SELECT * FROM blog_entries ";
		if(is_int($post_id)) $sql .= " WHERE blog_id = '{$post_id}' ";
		if(is_string($order)) $sql .= " ORDER BY $order ";
		$sql .= " LIMIT $start, $end";
		//
		$s = $d->q($sql);
		if($s && $d->numrows() >= 1){
			$posts = array();
			while($r = $d->mfa()) array_push($posts, $r);
			return $posts;
		} else {
			return false;
		}
	}
	
	public function editBlogPost(array $vals){}
	
	public function destroyBlogPost($id = null, $all = null){}
}


?>