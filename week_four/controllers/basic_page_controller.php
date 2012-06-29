<?php
// here is a helpful controller file
// we can use this to help us create a much better experience for ourselves!
$basic = "Hero";
$data = new Database();
$data->open('phpclass');
$s = $data->q("SELECT * FROM users");
$r = $data->mfa();
$data->close();
// used to call a function and get a result, yeah.
print_r($r);
?>