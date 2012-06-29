<?php
require_once 'classes/ProgrammingClass.php';
// instantiate our Example Class
$students = array("Ardy","Aaron","Caryl","Doug","Willy");
$eClass = new ProgrammingClass('Scott Haines',$students,'programming');
//echo $eClass->getTeacher();
echo $eClass->course;
//
/*
Public = any instance can modify this
Protected = any method within a Class can modify this value
Private = can only be modified from within the class
*/
?>