<?php
require_once('clsProc.php');
if(!isset($_REQUEST['do'])){
	$_REQUEST['do'] = "no";
}
switch($_REQUEST['do']){
	case "run":
		if(isset($_POST['command'])){
			require_once('clsProc.php');
			$cwd = '/var/www/html/examples';
			$env = 'null';
			$t = array("cwd" => $cwd);
			$cmd = ltrim(rtrim($_POST['command']));
			$cmd = str_replace("\n","",$cmd);
			// run command
			$process = new Proc($cmd,$t);
			$output = $process->getReadOut();
			$n = explode("\n",$output);
		} else {
			echo 'Epic Failure';
		}
	break;
	
	default:
		?>
		<?
	break;
}
?>
<html>
<head>
	<title>Ultra Exposed Terminal</title>
	<style type="text/css">
		body{margin:0;padding:0;font-family:Arial;font-size:.8em;color:#666666;background:#000000;}
		.mainwrap{margin:10px auto;width:410px;background:#fbfbfb;border:1px solid #ccc;padding:10px;}
		.niceTA{
			width:400px;
			height:250px;
			border:1px solid #cccccc;
			color:#666666;
			font-family:Arial;
			padding:10px;
			margin:10px;
		}
		form{
		}
		#results{
			padding:5px;
		}
		#results h4{
			padding-bottom:5px;
			border-bottom:2px solid #666666;
		}
		#results p{
			color:#333333;
			margin:0 0 3px 0;
			padding:0;
		}
	</style>
</head>
<body>
	<div class="mainwrap">
		<form name="cmd" id="cmd" action="<?=$_SERVER['PHP_SELF']?>" method="post">
			<label for="cmd"><strong>Enter a Command</strong></label><br>
			<textarea name="command" id="command" class="niceTA"></textarea><br>
			<input type="submit" value="Run"/>
			<input type="hidden" name="do" value="run"/>
		</form>
		<br>
		
			<?php
			if(isset($n)){
				print('<div id="results"><h4>Results</h4>');
				foreach($n as $item){
					print('<p>'.$item.'</p>');
				}
				print('</div>');
			}
			?>
		
	</div>
</body>
</html>