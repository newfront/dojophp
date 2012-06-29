<?php
// Let's look at some examples of how we may add custom variables into our page work flow.

// The Request Method

/*url looks like: 
	http://localhost:8888/week_eight/url_based_variables_and_post.php?name=Scott (from MAMP)
	http://localhost/week_eight/url_based_variables_and_post.php?name=Scott (other setups)
*/

//example #1, retrieve name
//http://localhost:8888/week_eight/url_based_variables_and_post.php?name=Scott
$name = $_REQUEST['name'];
echo $name;

// example #2, retrieve name from Get variable
//$name = $_GET['name'];
//echo $name;

// ODD? The Request parameters are looking at the key value pairs in the url, the GET method is also looking for key value pairs in the URL. The usage is tied down typically to a web form of some type that actually sends these variables into the url on a page redirect.
?>