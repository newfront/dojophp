<?php
require_once 'ExampleClass.php';

class ProgrammingClass extends ExampleClass{
	public $course = 'PHP';
	
	function getCourse(){
		return $this->course;
	}
}

?>