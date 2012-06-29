<?php
/*
STRING FUNCTIONS
http://php.net/manual/en/ref.strings.php

Sometimes you want to add a full paragraph to your string statement
heredoc is the best way to do this
it is easy to add variables in here as well
*/
$str = "Hello";

$str2 = <<<TOM
			Example of string $str
			spanning multiple lines
			using heredoc syntax.
			dddddddd.
TOM;

$str_old_school = "Example of a string ".$str.' spanning ';
$str_old_school .= " multiple lines using non heredoc";
$str_old_school .= " syntax";

$str3 = "Example ".$str." cool";

//echo $str2.$str3;
echo $str_old_school;
?>