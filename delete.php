<?php
ob_start();
include "db_connection.php";
$id = $_GET['id'];
$table = $_GET['table'];
$query = "DELETE FROM $table WHERE rowid = '$id'";
if ($db->query($query)) {
	header("location: index.php");
}
ob_end_flush();
?>