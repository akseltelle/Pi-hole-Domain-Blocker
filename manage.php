<?php
// Include configuration file
include("config.php"); ## REQUIRED, DO NOT REMOVE
?>
<title>Domain Blocker</title>
<a href="gravity">View list</a> | <a href="new">Add domain</a>
<hr>
<fieldset>
    <legend>Active domains</legend>
		<table class="table">
			<thead>
				<tr>
					<th>
						Domain
					</th>
					<th>
						Date Added
					</th>
					<th>
						Action
					</th>
				</tr>
			</thead>
			<tbody>
<?php
// Turn off all error reporting
error_reporting(0);

$connection = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname);
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
		$id = $row['id'];
		?>
				<tr>
					<?php echo "<td>", $row['url'], "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>"; ?>
					<?php echo "<td>Added ", $row['date'],"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>"; ?>
					<?php echo "<td><a href='edit?action=disable&id=$id'>Disable</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>"; ?>
				</tr>
		<?php
	}
} else {
	echo "<td>No</td>";
	echo "<td>domains</td>";
	echo "<td>found</td>";
} 
?>
			</tbody>
		</table>
</fieldset>

<fieldset>
    <legend>Inactive domains</legend>
		<table class="table">
			<thead>
				<tr>
					<th>
						Domain
					</th>
					<th>
						Date Added
					</th>
					<th>
						Action
					</th>
				</tr>
			</thead>
			<tbody>
<?php
// Turn off all error reporting
error_reporting(0);

$connection = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname);
if (!$connection){
	die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, $dbname);
if (!$select_db){
	die("Database Selection Failed" . mysqli_error($connection));
}

$query = "SELECT * FROM `$dbtable` WHERE active = 0 ORDER BY id DESC";

$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		$id = $row['id'];
		?>
				<tr>
					<?php echo "<td>", $row['url'], "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>"; ?>
					<?php echo "<td>Added ", $row['date'],"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>"; ?>
					<?php echo "<td><a href='edit?action=enable&id=$id'>Enable</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>"; ?>
				</tr>
		<?php
	}
} else {
	echo "<td>No</td>";
	echo "<td>domains</td>";
	echo "<td>found</td>";
} 
?>
			</tbody>
		</table>
</fieldset>