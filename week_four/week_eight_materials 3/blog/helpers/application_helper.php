<?php
// global application functions
//showTables($db = null){
function showTables($db){
	$d = new Database();
	$d->setDB($db);
	$tabs = $d->showTables();
	print_r($tabs);
	$d->close();
	return $tabs;
}
//showTableColumns($table,$db = null){
function showCloumns($db,$table){
	$d = new Database();
	$d->setDB('hacker_blog');
	$cols = $d->showTableColumns($table);
	$d->close();
	print_r($cols);
	return $cols;
}
//find out information on your database
$showdb = showTables('hacker_blog');
// view your database tables, easier to work with them this way
$showcols = showCloumns('hacker_blog','user');
?>