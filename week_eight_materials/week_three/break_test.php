<?php
//look of type casting
function breakCool($name){
	// type casting in a function to string
	echo (string) $name;
}
$str = 45;
breakCool($str);
/*
If the (string) type cast keyword is added into the function properties eg. function cool((string) $var)
Then it causes an error where PHP says it is looking for string, and it is provided a string which isn't
an instance of string. I am not 100% sure why this error occures, but this seems to be an issue that lives outside of the class structure and resides inside just the procedural code in PHP 5 (as of 5.2.13)
*/
?>