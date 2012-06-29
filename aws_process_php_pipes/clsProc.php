<?php
// create a simple PHP Class for running shell commands through a simple input output GUI
class Proc{
	private $cmd;
	private $result;
	private $cwd;
	private $env;
	private $code;
	private $running = false;
	
	public function __construct($cmd, $vals = null){
		$this->cmd = (string) $cmd;
		
		$tmp_num = count($vals);
		if($vals && is_array($vals)){
			foreach($vals as $val => $key){
				//echo $val.' -- '.$key;
				if($val == "cwd") $this->cwd = $key;
				if($val == "env") $this->env = $key;
			}
		}
		// run
		$this->runProcess();
	}
	
	private function runProcess(){
		
		// run command
		$descriptorspec = array(
			0 => array("pipe", "r"),  // stdin is a pipe that the child will read from
			1 => array("pipe", "w"),  // stdout is a pipe that the child will write to
			2 => array("pipe", "w") // stderr is a file to write to
		);
		$pipes= array();
		$process = proc_open($this->cmd, $descriptorspec, $pipes,$this->cwd,$this->env);
		$this->result = "";
		if (!is_resource($process)) return false;
		fclose($pipes[0]);
		stream_set_blocking($pipes[1],false);
		stream_set_blocking($pipes[2],false);
		$todo= array($pipes[1],$pipes[2]);
		while(true) {
			$running = true;
			$read= array();
			if( !feof($pipes[1]) ) $read[]= $pipes[1];
			if( !feof($pipes[2]) ) $read[]= $pipes[2];
			if (!$read){ break;}
			$ready= stream_select($read, $write=NULL, $ex= NULL, 2);
			if ($ready === false){break;}
			foreach ($read as $r) {
				$s= fread($r,1024);
				$this->result .= $s;
			}
		}
		fclose($pipes[1]);
		fclose($pipes[2]);
		$running = false;
		$this->code = proc_close($process);
		return true;
	}
	
	// check to see if the process is still running
	public function checkStatus(){
		return $this->running;
	}
	
	// get the returned results
	public function getReadOut(){
		if($this->running) return "still running";
		return $this->result;
	}
}
?>