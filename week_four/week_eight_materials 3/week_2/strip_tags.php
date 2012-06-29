<?php
/*
Someone submits a form on your website but you don't actually want them to be
able to submit a url or virus or anything having to do with html text
*/
$str = "<p>Please visit my website <a href='http://www.kingdomofbad.com'>Spam Me Please</a></p>";
echo strip_tags($str);
echo $str;
//$str_get_rid_of_p_tag = preg_replace('/<p>/','',$str);
//echo $str_get_rid_of_p_tag;
?>