<?php

if($_REQUEST['cmd']){
	$reload = true;
}

switch($_REQUEST['cmd']){
	case "loaded":
		echo "Loaded";
		echo "CHECK VALUE: ".$_REQUEST['check']."<br>";
	break;
	
	case "eating":
		echo "eating?<br>";
		echo "CHECK VALUE: ".$_REQUEST['check']."<br>";
	break;
	
	default:
		?>
		<form id="willy_test" name="willy_test" action="<?=$_SERVER['PHP_SELF'];?>" method="get">
			<input type="hidden" name="cmd" value="loaded"/>
			<input type="hidden" name="check" value="willy is cool"/>
			<input type="submit" value="go to next page"/>
		</form>
		<?php
	break;
}


?>