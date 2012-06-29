<?php
// here is a helpful controller file
// we can use this to help us create a much better experience for ourselves!
$basic = "Hero";
$data = new Database();
$data->open('phpclass');
$user_data = $data->q("SELECT * FROM users"); //Resource ID
$resource = $data->getResource();
$r = $data->mfa($user_data);
$data->close();
// used to call a function and get a result, yeah.
//print_r($r);
?>