<?php
/*
STRING SPLIT
We used explode on a specific index (character) last week, but we can use
string split to break up a string by its characters, or into arbitrary chunks
*/
$str = "The cow is a clever one by golly";
$str_array = str_split($str,5);
?>
<pre><?= print_r($str_array)?></pre>