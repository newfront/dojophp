<?php
// attempt to use shell programming to read a directory
$descriptorspec = array(
	0 => array("pipe", "r"),  // stdin is a pipe that the child will read from
	1 => array("pipe", "w"),  // stdout is a pipe that the child will write to
	2 => array("pipe", "w") // stderr is a file to write to
);

$cmd = 'cd /var/www/html/css/;ls -l'; 
$pipes= array();
$cwd = NULL;
$env = NULL;
$process = proc_open($cmd, $descriptorspec, $pipes,$cwd,$env);
$output= "";
if (!is_resource($process)) return false;
fclose($pipes[0]);
stream_set_blocking($pipes[1],false);
stream_set_blocking($pipes[2],false);
$todo= array($pipes[1],$pipes[2]);
while(true) {
	$read= array();
	if( !feof($pipes[1]) ) $read[]= $pipes[1];
	if( !feof($pipes[2]) ) $read[]= $pipes[2];
	if (!$read){ break;}
	$ready= stream_select($read, $write=NULL, $ex= NULL, 2);
	if ($ready === false){break;}
	foreach ($read as $r) {
		$s= fread($r,1024);
		$output .= $s;
	}
}
$first = true;
fclose($pipes[1]);
fclose($pipes[2]);
$code = proc_close($process);
echo $output;
?>