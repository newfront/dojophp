<?php
class Globals {
	
	// change your mysql port, username and password
	const DOCROOT = "";
	const DBTYPE = "mysql";
	const DBHOST = "127.0.0.1";
	const DBUSER = "root";
	//const DBUSER = "database_user";
	const DBPORT = 8888;
	//const DBPORT = 3306;
	const DBPASS = "root";
	//const DBPASS = "dojo2010";
	const VIEWS = "views/";
	const CONTROLLERS = "controllers/";
	const PAGESIZE = 5;
	
	public function __construct(){}
	
	// Allow for all Database Info to come from the same place
	public function getDBInfo(){
		$dbinfo = array();
		array_push($dbinfo,self::DBHOST);//0
		array_push($dbinfo,self::DBTYPE);//1
		array_push($dbinfo,self::DBPORT);//2
		array_push($dbinfo,self::DBUSER);//3
		array_push($dbinfo,self::DBPASS);//4
		return $dbinfo;
	}
	
	public function getPageInfo(){
		$pageinfo = array();
		array_push($pageinfo, self::VIEWS);
		array_push($pageinfo, self::CONTROLLERS);
		return $pageinfo;
	}
}
?>