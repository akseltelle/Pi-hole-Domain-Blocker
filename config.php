<?php
// Turn project on or off
$active = "n";
if ($active == "y"){
	
} elseif ($active == "n"){
	echo "This project is offline. <br> See <a href='https://github.com/akseltelle/Pi-hole-Domain-Blocker'>https://github.com/akseltelle/Pi-hole-Domain-Blocker</a>";
	die();
} else {
	echo "This project is offline. <br> See <a href='https://github.com/akseltelle/Pi-hole-Domain-Blocker'>https://github.com/akseltelle/Pi-hole-Domain-Blocker</a>";
	die();
}

// Turn off all error reporting
error_reporting(0);

// Database details
$dbserver = "host"; ## Database host, example "localhost"
$dbuser = "username"; ## Database username
$dbpass = "password"; ## Database password
$dbname = "blocked_domains"; ## Database name, default "blocked_domains"
$dbtable = "domains";

// Date and time
$date = date("d.m.Y - h:i:sa"); ## 19.01.2021 - 11:31:58pm

// Get information from URL
$url = $_GET["url"];
$id = $_GET["id"];
$action = $_GET["action"];
?>