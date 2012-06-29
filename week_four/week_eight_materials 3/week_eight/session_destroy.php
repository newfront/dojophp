<?php
//kill the open session
require_once '../blog/includes/session.php';
session_destroy();
//header("Location: /week_eight/sessions_overview.php");
echo "<b>Go Back: </b> <a href='/week_eight/sessions_overview.php'>Back to Main Sessions Page</a>";
?>