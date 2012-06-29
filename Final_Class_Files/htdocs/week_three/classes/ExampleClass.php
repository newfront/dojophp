<?php

class ExampleClass {
	public $classname = 'class name';
	private $teacher = 'default teacher';
	private $students = array();
	private $classSize;
	public $classType;
	public $course;
	
	function __construct( $teach, array $stud, $cT ){
		$this->teacher = $teach;
		if(is_array($stud)){
			$sSize = count($stud);
			$this->classSize = $sSize;
			for($i=0; $i < $sSize; $i++){
				if(!in_array($stud[$i], $this->students)){
					array_push($this->students, $stud[$i]);
				}
			}
			$this->classType = $cT;
		} else {
			return false;
		}
	}
	
	public function getStudents(){
		return $this->students;
	}
	
	public function getTeacher(){
		return $this->teacher;
	}
	
	public function getCourse(){
		return $this->course;
	}
	
	
}

?>