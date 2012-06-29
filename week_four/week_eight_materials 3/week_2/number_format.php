<?php
/*
sometimes you want to format your strings as they enter your processed
code view (output view)
Number must be a float
*/
$num = 1500.56;

$numfor = number_format($num, 2);
echo '$'.$numfor;
?>