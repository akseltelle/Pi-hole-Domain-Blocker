<?php
// Include configuration file
include("config.php"); ## REQUIRED, DO NOT REMOVE
?>
<title>Domain Blocker</title>
<?php
if ($action == "enable") {
	
// Create connection
$conn = new mysqli($dbserver, $dbuser, $dbpass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "UPDATE `$dbtable` SET active = 1 WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    header("gravity");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

} elseif ($action == "disable") {
	
// Create connection
$conn = new mysqli($dbserver, $dbuser, $dbpass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE `$dbtable` SET active = 0 WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    header("gravity");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
	
	
} else {
	echo "No action provided. Killing proccess.";
	die();
}

?>
<meta http-equiv='refresh' content='0; url=manage'>
