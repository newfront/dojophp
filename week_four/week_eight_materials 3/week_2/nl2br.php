<?php
/*
Last week we tried to figure out what to do with \n symbol
and used pre to see where these actually showed up. We can convert these
newline (\n) symbols to <br> (breaking space) with a simple function
*/
$str2 = <<<TOM
			Example of string $str\n
			spanning multiple lines\n
			using heredoc syntax.\n
			dddddddd.
TOM;

$newlines = "Howdy Partner\nHow is it going\nLet's go out and shoot some fish";
//without nl2br
echo $newlines.'<br><br>';
echo nl2br($newlines).'<br>';
echo nl2br($str2);
?>