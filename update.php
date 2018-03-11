<?php
ob_start();
include "db_connection.php";
$id = $_POST['id'];
$table = $_POST['table'];
$word = $_POST['word'];
$meaning = $_POST['meaning'];
$synonym = $_POST['synonym'];
$antonym = $_POST['antonym'];
$example = $_POST['example'];
$back = "index.php?id="."$id"."&table=$table";
$query = "UPDATE $table SET word = '$word', meaning = '$meaning', synonym = '$synonym', antonym = '$antonym', example = '$example' WHERE rowid = '$id'";
if ($db->exec($query)) {
	header("location: $back");
}
ob_end_flush();
?>