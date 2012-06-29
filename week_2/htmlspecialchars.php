<?php
/*
Think of this as a way of keeping your characters / code and allowing the browser
to format it for you
*/
$str = "<a href='cool.html'>cool</a> <p>My <b>Paragraph</b></p>";
$special = htmlspecialchars($str, ENT_QUOTES);
echo $special;
echo $new;
?>
<pre><?php print($special); ?></pre>