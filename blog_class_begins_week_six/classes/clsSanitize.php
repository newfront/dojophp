<?php

//because no one can be trusted!
class Sanitize{
	
	private $string;
	
	public function __construct(){}
	
	// strip all the bad extra white space away
	public function clearWhiteSpaceLR($string){
		return (string) ltrim(rtrim($string));
	}
	
	//strip tags, trim
	
	public function sanitize_string($string){
		return strip_tags($this->clearWhiteSpace($string));
	}
	// check that a value is string, and greater than n characters
	public function checkSize($string, $quota = 3){
		//if string is smaller than $quota, return false, else return true
		if(strlen((string) $string) < $quota) return false; else return true;
	}
	
	public function isEmailFormat($email){
		// check against a failry simple regular expression
		$regexp = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]+$/';
		preg_match($regexp,$email,$matches);
		if($matches[0] == $email){
			return true;
		} else {
			return false;
		}
	}
	
}

?>