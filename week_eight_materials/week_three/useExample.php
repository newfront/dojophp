<?php
require_once 'classes/ExampleClass.php';
// instantiate our Example Class
$students = array("Ardy","Aaron","Caryl","Doug","Willy");
$eClass = new ExampleClass('Scott Haines',$students,'programming');
//$eClass = new ExampleClass('Scott Haines',$students,'programming');
//$eClass = 405;
//public can be overridden outside the class
//$eClass->classname = "PHP";
//echo $eClass->classname;
//echo $eClass->getTeacher();
//$studentsFromObject = $eClass->getStudents();
//print_r($studentsFromObject);
/*if(is_object($eClass)){
	echo 'is an object';
} else {
	echo 'is not an object';
}
*/
// get class methods
// get class variables
print_r(get_class_methods($eClass));
?>