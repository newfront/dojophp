<?php
/*
switch

switch($val){
   case "something":

   break;
}
*/

function switchName($val){
	switch($val){
		case "ardy":
		case "ardy2":
		case "class":
			echo 'class is met';
		break;
		
		case "outside":
			echo 'outside is met';
		break;
		
		case "flooring":
			echo 'flooring is met';
		break;
		
		default:
			echo 'nothing matched';
		break;
		
	}
}

function switchOldSchool($val){
	if($val == 'class' || $val == 'ardy'){
		echo 'class is met - ardy';
	} elseif($val == 'outside'){
		echo 'outside is met';
	} else {
		echo 'flooring is met';
	}
}
/*

*/

function workingWithAnd($val,$val2='ardy'){
	if($val == 'scott' || $val == 'class' && $val2 == 'ardy'){
		echo 'meet criteria';
	} else {
		echo 'fail';
	}
}

//switchOldSchool('ardy');
//switchName('ardy3');
workingWithAnd('class','scott');
?>