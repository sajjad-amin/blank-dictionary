<?php
ob_start();
include "db_connection.php";
$word = $_POST['word'];
$meaning = $_POST['meaning'];
$synonym = $_POST['synonym'];
$antonym = $_POST['antonym'];
$example = $_POST['example'];
$table = substr($word, 0,1);
$add = "INSERT INTO $table(word, meaning, synonym, antonym, example) VALUES ('$word', '$meaning', '$synonym', '$antonym', '$example')";

if ($db->exec($add)) {
	header("location: index.php");
}
ob_end_flush();
?>