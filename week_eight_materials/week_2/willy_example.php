<?php
$str = "heloo
pppppp
pppppp
ppsfpdfdfdpf
dfdfdf
";
$html_output = <<<WILLY
			<p>This is a $str paragraph</p>
			<p>html is here</p>
WILLY;
echo $html_output;
?>