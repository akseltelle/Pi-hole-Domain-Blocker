<?php
// Include configuration file
include("config.php"); ## REQUIRED, DO NOT REMOVE
?>
<title>Domain Blocker</title>
<?php
// Create connection
$conn = new mysqli($dbserver, $dbuser, $dbpass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `$dbtable` (id, url, date, active)
VALUES ('', '$url', '$date', '1')";

if ($conn->query($sql) === TRUE) {
    header("gravity");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<meta http-equiv='refresh' content='0; url=manage'>
