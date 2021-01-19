<?php
// Include configuration file
include("config.php"); ## REQUIRED, DO NOT REMOVE
?>
<?php
$connection = mysqli_connect($dbserver, $dbuser, $dbpass);
if (!$connection){
	die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, $dbname);
if (!$select_db){
	die("Database Selection Failed" . mysqli_error($connection));
}

$query = "SELECT * FROM `$dbtable` WHERE active = 1 ORDER BY id DESC";

$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo $row['url'];
		echo "\r\n";
	}
} else {
	echo "0 domains";
} 
?>