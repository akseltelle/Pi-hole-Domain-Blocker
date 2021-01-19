<?php
// Include configuration file
include("config.php"); ## REQUIRED, DO NOT REMOVE
?>
<title>Domain Blocker</title>
<form action="add_db.php" method="get">
	<input type="text" name="url" placeholder="example.com">
	<br>
	<input type="submit" value="Add domain">
</form>
