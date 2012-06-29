<?php

class Database{
	private $connect;
	private $result;
	private $rows;
	private $db;
	
	// open main database
	public function open($db){
		$this->db = (string) $db;
		$dbglobs = Globals::getDBInfo();
		$host_port = (string) $dbglobs[0].':'. (string) $dbglobs[2];
		// connection to testing database
		$this->connect = mysql_connect($host_port,$dbglobs[3],$dbglobs[4]) or die(mysql_error());
		$select = mysql_select_db($this->db,$this->connect) or die(mysql_error());
	}
	
	public function q($s){
		$this->result = mysql_query($s);
		return $this->result;
	}
	
	public function mfa($resource = null){
		if($resource != null){
			$row = mysql_fetch_assoc($resource);
			return $row;
		} else {
			$row = mysql_fetch_assoc($this->result);
			return $row;
		}
	}
	
	public function numrows(){
		$this->rows = mysql_num_rows($this->result);
		return $this->rows;
	}
	
	public function close(){
		mysql_close($this->connect);
	}
}

?>