<?php
/*

*/
$name_array = array("scott","aaron","tom");
$dates = array("May","June","April");
//echo count($name_array);

function retrieveNameDate($name,$arr,$arr2){
	//loops
	// look up names from array
	// use index from array one to get value from array 2
	// return formated string
	$size = count($arr);
	for($v = 0; $v < $size; $v++){
		//$names[$v]
		//echo $arr[$v].'<br>';
		if($name == $arr[$v]){
			//echo 'true = '.$name.'<br>';
			echo 'Your birthday is in the month of '.$arr2[$v];
		}
	}
}
retrieveNameDate('scott',$name_array,$dates);
?>