<?php
include "db_connection.php";
$id = $_GET['id'];
$table = $_GET['table'];
$data = "SELECT rowid, * FROM $table WHERE rowid = $id";
$show = $db->query($data);
$row = $show->fetchArray();
$word = $row['word'];
$meaning = $row['meaning'];
$synonym = $row['synonym'];
$antonym = $row['antonym'];
$example = $row['example'];
$back = "index.php?id="."$id"."&table=$table";
$delete = "delete.php?id="."$id"."&table=$table";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
		body{
			background: #33393f;
			font-family: font_1;
		}
		label{
			font-weight: bold;
			color: white;
		}
	</style>
	<script type="text/javascript">
	function dlt() {
		if (confirm('Are you sure?')) {
			window.location='<?php echo $delete; ?>';
		}
	}
</script>
</head>
<body>

	<div class="container">

		<br>

		<form method="post" action="update.php">

			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<input class="form-control" type="hidden" name="table" value="<?php echo $table; ?>">

			<div class="form-group">
				<label>Word :</label>
				<input class="form-control" type="text" name="word" value="<?php echo $word; ?>" required>
			</div>
			<div class="form-group">
				<label>Meaning :</label>
				<input class="form-control" type="text" name="meaning" value="<?php echo $meaning; ?>">
			</div>
			<div class="form-group">
				<label>Synonym :</label>
				<input class="form-control" type="text" name="synonym" value="<?php echo $synonym; ?>">
			</div>
			<div class="form-group">
				<label>Antonym :</label>
				<input class="form-control" type="text" name="antonym" value="<?php echo $antonym; ?>">
			</div>
			<div class="form-group">
				<label>Example :</label>
				<input class="form-control" type="text" name="example" value="<?php echo $example; ?>">
			</div>

				<input class="btn btn-info" type="submit" value="UPDATE">

		</form>

			<button style="float: right; margin-left: 10px;" class="btn btn-danger" onclick="dlt()">Delete</button>
			<button style="float: right;" class="btn btn-warning" onclick="window.location='<?php echo $back; ?>'">Back</button>

	</div>

</body>
</html>