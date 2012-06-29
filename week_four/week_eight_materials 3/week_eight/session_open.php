<?php
require_once '../blog/includes/session.php';
//we are now going to openup the session called known_user
$_SESSION['known_user'] = true;
//header("Location: /week_eight/sessions_overview.php");
echo "<b>Go Back: </b> <a href='/week_eight/sessions_overview.php'>Back to Main Sessions Page</a>";
?>