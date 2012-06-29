<?php
require_once('clsProc.php');
$cwd = '/var/www/html/examples';
$env = 'null';
$t = array("cwd" => $cwd);

// create new process object
$process = new Proc('cd /var/www/html/examples/; ls -l',$t);
$output = $process->getReadOut();
//echo $output;
//var_dump($output);
$n = explode("\n",$output);

?>
<html>
<head>
	<title>Working?</title>
</head>
<body>
	<pre>
		<?php
		foreach($n as $item){
			print('<p>'.$item.'</p>');
		}
		?>
	</pre>
</body>
</html>