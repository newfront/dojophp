<?php
$string = "T";
$passed = false;
//echo strlen($string);
if(strlen($string) >= 1){
	echo 'true';
	$passed = true;
} else {
	echo 'false';
	$passed = false;
}
// validate only 10 words
$str = "today is an awesome day I learned something new. the train ride was way to long today. I don't know. my train is at 10:30. sounds good.";
if(str_word_count($str) > 9){
	echo '<br>you failed';
	$passed = false;
} else {
	echo '<br>you did great';
	$passed = true;
}
echo '<p>';
if($passed){
	echo 'yeah you passed <b>Yeah</b>';
} else {
	echo 'you failed<b>fail</b>';
}
echo '</p>';