<?php
// array within an array
$a1 = array("scott",10,"people");
$a2 = array("phil","jeans","world");
$a3 = array();
// now we add the arrays into the array
// array_push(array, value from another source)
array_push($a3,$a1);
array_push($a3,$a2);
// print_r(array) allows you to view the array in a more easy to work with manner

//
echo '<br>';
//print_r($a3[0]);
//var_dump($a3);
/*echo '<br>';
print_r($a3[1]);
echo '<br>';
*/
echo $a3[0][1];

?>
<html>
	<head>
		
	</head>
	<body>
		<pre><?php
		//var_dump($a3);
		?>
		</pre>
	</body>
</html>