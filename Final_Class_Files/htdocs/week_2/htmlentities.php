<?php
/*
Sometimes you need to use HTML's characters due to ascii limitations
this code will take your code and generate the html equivalents automatically
*/
$str = "<p>My <b>Paragraph</b></p>";
echo htmlentities($str);
?>
<pre><?= $str; ?></pre>