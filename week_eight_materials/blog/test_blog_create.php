<?php
require 'classes/clsBlog.php';
$cblog = new Blog();
//createBlogPost($title = null, $body = null)
// get title
// get body
// these come from post from form from html
$did_create = $cblog->createBlogPost("John is sitting on the table","John is still there and will be for the next couple minutes, he is actually falling asleep because he likes my voice and it is soothing.");
if($did_create){
	echo 'woo-hooo';
} else {
	echo 'bummer, says Caryl';
}
?>