<?php
require_once '../blog/includes/session.php';
require_once '../blog/classes/clsDatabase.php';
require_once '../blog/classes/clsSanitize.php';
if($_POST['login']){
	//print_r($_POST);
	// sanitize
	$login = Sanitize::clearWhiteSpaceLR($_POST['login']);
	//$password = Sanitize::clearWhiteSpaceLR($_POST['password']);
	$password = strtolower(Sanitize::clearWhiteSpaceLR($_POST['password']));
	//echo $login.' '.$password;
	// test if in Database as well
	$d = new Database();
	$d->open('hacker_blog');
	$s = $d->q("SELECT * FROM user WHERE user.username = '{$login}' AND user.password = sha1('{$password}') LIMIT 0,1");
	if($s && $d->numrows() > 0){
		//mysql fetch assoc
		$info = $d->mfa();
		//print_r($info);
		//$info = associative array
		$_SESSION['loggedin'] = true;
		// concat first and last name
		$name = $info['user_first_name'].' '.$info['user_last_name'];
		//echo "NAME: $name";
		$_SESSION['loggedin'] = true;
		$_SESSION['user_full_name'] = $name;
		$_SESSION['user_quick_name'] = $info['user_first_name'];
		$_SESSION['user_id'] = $info['id'];
		//echo '<a href="/week_eight/secret_loggedin_area.php">Manual Override</a>';
		header("Location: /week_eight/secret_loggedin_area.php");
		// /secret_loggedin_area.php
	} else {
		$_SESSION['loggedin'] = false;
		header("Location: /week_eight/login_user.php?mess=username and password not found in database");
	}
	$d->close();
} else {
	echo 'Failed to submit simple things.';
}
?>