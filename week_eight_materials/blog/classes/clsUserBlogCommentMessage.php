<?php
/*
extend UserMessage to get type and data from message array
*/
require_once('clsSanitize.php');
require_once('clsUserMessage.php');
require_once('clsDatabase.php');

class UserBlogCommentMessage extends UserMessage{
	protected $message_information;
	protected $type;
	protected $passed;
	
	public function __construct($type,$message_info){
		
		$this->message_information = $message_info;
		
		$this->type = $type;
	
		$this->cleanAndPost();
	}
	
	protected function cleanAndPost(){
		
		for($n=0;$n<count($this->message_information);$n++){
			//clean left and white white space, escape the string for the Database
			$this->message_information[$n] = Sanitize::prepForDatabase(Sanitize::clearWhiteSpaceLR($this->message_information[$n]));
		}
		
		$d = new Database();
		$d->open('hacker_blog');
		
		//check for duplicates
		$chx = $d->q("SELECT * FROM user_messages WHERE user_messages.message = '{$this->message_information[2]}'");
		if($chx && $d->numrows() <= 0){
			// id in the messages field is for the user's uid or user_id, depending on how you are moving forward with your code
			$s = $d->q("INSERT into user_messages
				 		(user_message_id,first_name,last_name,id,message,type,added_on) VALUES
						(NULL,'{$this->message_information[0]}','{$this->message_information[1]}',NULL,'{$this->message_information[2]}','{$this->type}',now())"
			);
			
			if($s){
				
				//echo 'made it through gauntlet. Added info into Database.';
				$this->passed = true;
			} else {
				
				$this->passed = false;
			}
		} else {
			
			//echo 'You have already made a comment like this.';
			$this->passed = false;
		}
		$d->close();
		//print_r($this->message_information);
	}
	
	public function wasSuccess(){
		return $this->passed;
	}
}
?>