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
		$this->result = mysql_query((string) $s);
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
	
	public function getResource(){ return $this->result;}
	
	public function numrows(){
		$this->rows = mysql_num_rows($this->result);
		return $this->rows;
	}
	
	public function close($connect = null){
		if($connect != null && is_resource($connect)) $this->connect = $connect;
		if(is_resource($this->connect)) mysql_close($this->connect);
	}
	
	public function free_space($result = null){
		if($result != null && is_resource($result)) $this->result = $result;
		mysql_free_result($this->result);
	}
	
	// set Object Database
	public function setDB($db){$this->db = $db;}
	
	// find out more about the Database you are working with
	public function showTables($db = null){
		if($db != null) $this->db = $db;
		$this->open('hacker_blog');
		$s = $this->q("SHOW TABLES");
		if($s) $rows = array(); while($r = $this->mfa()) array_push($rows,$r);
		$this->free_space();
		$this->close($this->connect);
		return $rows;
	}
	
	// find out what values need to go into your database
	public function showTableColumns($table,$db = null){
		$this->open($this->db);
		$s = $this->q("SHOW COLUMNS FROM $table");
		if($s) $rows = array(); while($r = $this->mfa()) array_push($rows,$r);
		return $rows;
		$this->close();
	}
	
}

?>