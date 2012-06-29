<?php
/*
UserMessage is our message center, think of this as our Factory, we are producing New Messages based on specific molds
*/
require_once('clsUserBlogCommentMessage.php');

class UserMessage {
	/*
	User has many actions
	Let a user post a message
	types of messages may vary
	*/
	
	private $type;
	private $cur_message;
	private $passed;
	
	
	public function __construct(Array $field_data,$type){
		//print_r($field_data);
		if(is_array($field_data)){
			$this->type = $type;
			$this->cur_message = $field_data;
			// we have our values, let's sanitize and add to database
			$this->addComment();
		} else {
			return false;
		}
		//echo $this->type;
		//print_r($this->cur_message);
	}
	
	private function addComment(){
		//$this->type;
		// switch on type
		switch ($this->type){
			case "blog_comment":
				//echo 'IS Blog Comment. Instantiate new UserBlogCommentMessage';
				$spawn_message = new UserBlogCommentMessage($this->getType(), $this->getMessage());
				$passed = $spawn_message->wasSuccess();
				if($passed){
					$this->passed = true;
				} else {
					$this->passed = false;
				}
			break;
			
			default:
				$this->passed = false;
			break;
		}
	}
	public function didAddToDB(){
		return $this->passed;
	}
	//Protected so only Children can get to this data
	// Data is Private so only UserMessage can update data
	protected function getType(){
		return $this->type;
	}
	
	protected function getMessage(){
		return $this->cur_message;
	}
	
}
?>