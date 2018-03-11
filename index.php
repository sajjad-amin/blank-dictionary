<?php
include "db_connection.php";
$data_a = "SELECT rowid, * FROM a ORDER BY word";
$show_a = $db->query($data_a);
$data_b = "SELECT rowid, * FROM b ORDER BY word";
$show_b = $db->query($data_b);
$data_c = "SELECT rowid, * FROM c ORDER BY word";
$show_c = $db->query($data_c);
$data_d = "SELECT rowid, * FROM d ORDER BY word";
$show_d = $db->query($data_d);
$data_e = "SELECT rowid, * FROM e ORDER BY word";
$show_e = $db->query($data_e);
$data_f = "SELECT rowid, * FROM f ORDER BY word";
$show_f = $db->query($data_f);
$data_g = "SELECT rowid, * FROM g ORDER BY word";
$show_g = $db->query($data_g);
$data_h = "SELECT rowid, * FROM h ORDER BY word";
$show_h = $db->query($data_h);
$data_i = "SELECT rowid, * FROM i ORDER BY word";
$show_i = $db->query($data_i);
$data_j = "SELECT rowid, * FROM j ORDER BY word";
$show_j = $db->query($data_j);
$data_k = "SELECT rowid, * FROM k ORDER BY word";
$show_k = $db->query($data_k);
$data_l = "SELECT rowid, * FROM l ORDER BY word";
$show_l = $db->query($data_l);
$data_m = "SELECT rowid, * FROM m ORDER BY word";
$show_m = $db->query($data_m);
$data_n = "SELECT rowid, * FROM n ORDER BY word";
$show_n = $db->query($data_n);
$data_o = "SELECT rowid, * FROM o ORDER BY word";
$show_o = $db->query($data_o);
$data_p = "SELECT rowid, * FROM p ORDER BY word";
$show_p = $db->query($data_p);
$data_q = "SELECT rowid, * FROM q ORDER BY word";
$show_q = $db->query($data_q);
$data_r = "SELECT rowid, * FROM r ORDER BY word";
$show_r = $db->query($data_r);
$data_s = "SELECT rowid, * FROM s ORDER BY word";
$show_s = $db->query($data_s);
$data_t = "SELECT rowid, * FROM t ORDER BY word";
$show_t = $db->query($data_t);
$data_u = "SELECT rowid, * FROM u ORDER BY word";
$show_u = $db->query($data_u);
$data_v = "SELECT rowid, * FROM v ORDER BY word";
$show_v = $db->query($data_v);
$data_w = "SELECT rowid, * FROM w ORDER BY word";
$show_w = $db->query($data_w);
$data_x = "SELECT rowid, * FROM x ORDER BY word";
$show_x = $db->query($data_x);
$data_y = "SELECT rowid, * FROM y ORDER BY word";
$show_y = $db->query($data_y);
$data_z = "SELECT rowid, * FROM z ORDER BY word";
$show_z = $db->query($data_z);
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
		body{
			background: #6c757d;
			font-family: font_1;
		}
	</style>
	<script src="js/jquery.min.js"></script>
  	<script src="js/popper.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
	<script>
	function search() {
	    var input, filter, words, tr, i;
	    input = document.getElementById("search_keyword");
	    filter = input.value.toUpperCase();
	    words = document.getElementById("words");
	    tr = words.getElementsByTagName("tr");
	    for (i = 0; i < tr.length; i++) {
	        if (tr[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
	            tr[i].style.display = "";
	        } else {
	            tr[i].style.display = "none";
	        }
	    }
	}
	</script>
</head>
<body>


<?php

	$got_data['word'] = "";
	$got_data['meaning'] = "";
	$got_data['synonym'] = "";
	$got_data['antonym'] = "";
	$got_data['example'] = "";

if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$table = $_GET['table'];
		$select_data = "SELECT rowid, * FROM $table WHERE rowid = $id";
		$get_data = $db->query($select_data);
		$got_data = $get_data->fetchArray();
	}
?>

	<div class="search_nav">
		<div class="searchbar">
  			<form class="form-inline" action="">
    			<input class="form-control" type="text" placeholder="Search" id="search_keyword" onkeyup="search()">
  			</form>
  		</div>
  		<div class="top-btn">

  			<button type="button" class="btn btn-info btn-sm">Statistics </button>

  			<button type="button" class="btn btn-info btn-sm">Setting </button>

  			<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown">About</button>
  			<div class="dropdown-menu">
  				<p class="dropdown-item"><strong>Blank Dictionay</strong> is an <br>web based application for<br>learning english vocabulary<br>and store here.<br><strong>Contributor :</strong><br><a href="http://www.facebook.com/sajjad.amin.100/" target="_new">Sajjad Amin</a><br>this is incompleate version <br> you can contribute in <br> this open source project<br>Scource code: <a href="https://github.com/sajjad-amin/blank-dictionary/" target="_new">Github</a></p>
  			</div>

  		</div>
  	</div>

  	<div class="middle-body">
  		<table class="table table-dark">
  			<tr>
  				<td><strong>Word :</strong></td>
  				<td><?php echo $got_data['word']; ?></td>
  				<td><button style="float: right;" class="btn btn-danger btn-sm" onclick="window.location='edit.php?id=<?php echo $id; ?>&table=<?php echo $table; ?>'">Edit</button></td>
  			</tr>
  			<tr>
  				<td><strong>Meaning :</strong></td>
  				<td colspan="2"><?php echo $got_data['meaning']; ?></td>
  			</tr>
  			<tr>
  				<td><strong>Synonym :</strong></td>
  				<td colspan="2"><?php echo $got_data['synonym']; ?></td>
  			</tr>
  			<tr>
  				<td><strong>Antonym :</strong></td>
  				<td colspan="2"><?php echo $got_data['antonym']; ?></td>
  			</tr>
  			<tr>
  				<td><strong>Example :</strong></td>
  				<td colspan="2"><?php echo $got_data['example']; ?></td>
  			</tr>
  		</table>
  	</div>

	<div class="new_word">

  		<div class="new_word_header">
  			<p><strong>Add new word</strong></p>
  		</div>

		<form class="form-inline" method="post" action="add.php">
			<input class="add-panel add-panel-margin form-control" type="text" name="word" placeholder="Word*" required><br>
			<input class="add-panel form-control" type="text" name="meaning" placeholder="Meaning"><br>
			<input class="add-panel add-panel-margin form-control" type="text" name="synonym" placeholder="Synonym"><br>
			<input class="add-panel form-control" type="text" name="antonym" placeholder="Antonym"><br>
			<input class="add-panel add-panel-margin form-control" type="text" name="example" placeholder="Example"><br>
			<input class="add-btn" type="submit" value="ADD">
		</form>
	</div>

	<div class="word_list">
		<div class="container">
	<table class="table table-dark" id="words">
			<?php while ($row = $show_a->fetchArray()) { ?>
		<tr>
			<td><strong><a href="index.php?id=<?php echo $row['rowid']; ?>&table=a"><?php echo $row['word']; ?></a></strong></td>
		</tr>
			<?php } ?>
			<?php while ($row = $show_b->fetchArray()) { ?>
		<tr>
			<td><strong><a href="index.php?id=<?php echo $row['rowid']; ?>&table=b"><?php echo $row['word']; ?></a></strong></td>
		</tr>
			<?php } ?>
			<?php while ($row = $show_c->fetchArray()) { ?>
		<tr>
			<td><strong><a href="index.php?id=<?php echo $row['rowid']; ?>&table=c"><?php echo $row['word']; ?></a></strong></td>
		</tr>
			<?php } ?>
			<?php while ($row = $show_d->fetchArray()) { ?>
		<tr>
			<td><strong><a href="index.php?id=<?php echo $row['rowid']; ?>&table=d"><?php echo $row['word']; ?></a></strong></td>
		</tr>
			<?php } ?>
			<?php while ($row = $show_e->fetchArray()) { ?>
		<tr>
			<td><strong><a href="index.php?id=<?php echo $row['rowid']; ?>&table=e"><?php echo $row['word']; ?></a></strong></td>
		</tr>
			<?php } ?>
			<?php while ($row = $show_f->fetchArray()) { ?>
		<tr>
			<td><strong><a href="index.php?id=<?php echo $row['rowid']; ?>&table=f"><?php echo $row['word']; ?></a></strong></td>
		</tr>
			<?php } ?>
			<?php while ($row = $show_g->fetchArray()) { ?>
		<tr>
			<td><strong><a href="index.php?id=<?php echo $row['rowid']; ?>&table=g"><?php echo $row['word']; ?></a></strong></td>
		</tr>
			<?php } ?>
			<?php while ($row = $show_h->fetchArray()) { ?>
		<tr>
			<td><strong><a href="index.php?id=<?php echo $row['rowid']; ?>&table=h"><?php echo $row['word']; ?></a></strong></td>
		</tr>
			<?php } ?>
			<?php while ($row = $show_i->fetchArray()) { ?>
		<tr>
			<td><strong><a href="index.php?id=<?php echo $row['rowid']; ?>&table=i"><?php echo $row['word']; ?></a></strong></td>
		</tr>
			<?php } ?>
			<?php while ($row = $show_j->fetchArray()) { ?>
		<tr>
			<td><strong><a href="index.php?id=<?php echo $row['rowid']; ?>&table=j"><?php echo $row['word']; ?></a></strong></td>
		</tr>
			<?php } ?>
			<?php while ($row = $show_k->fetchArray()) { ?>
		<tr>
			<td><strong><a href="index.php?id=<?php echo $row['rowid']; ?>&table=k"><?php echo $row['word']; ?></a></strong></td>
		</tr>
			<?php } ?>
			<?php while ($row = $show_l->fetchArray()) { ?>
		<tr>
			<td><strong><a href="index.php?id=<?php echo $row['rowid']; ?>&table=l"><?php echo $row['word']; ?></a></strong></td>
		</tr>
			<?php } ?>
			<?php while ($row = $show_m->fetchArray()) { ?>
		<tr>
			<td><strong><a href="index.php?id=<?php echo $row['rowid']; ?>&table=m"><?php echo $row['word']; ?></a></strong></td>
		</tr>
			<?php } ?>
			<?php while ($row = $show_n->fetchArray()) { ?>
		<tr>
			<td><strong><a href="index.php?id=<?php echo $row['rowid']; ?>&table=n"><?php echo $row['word']; ?></a></strong></td>
		</tr>
			<?php } ?>
			<?php while ($row = $show_o->fetchArray()) { ?>
		<tr>
			<td><strong><a href="index.php?id=<?php echo $row['rowid']; ?>&table=o"><?php echo $row['word']; ?></a></strong></td>
		</tr>
			<?php } ?>
			<?php while ($row = $show_p->fetchArray()) { ?>
		<tr>
			<td><strong><a href="index.php?id=<?php echo $row['rowid']; ?>&table=p"><?php echo $row['word']; ?></a></strong></td>
		</tr>
			<?php } ?>
			<?php while ($row = $show_q->fetchArray()) { ?>
		<tr>
			<td><strong><a href="index.php?id=<?php echo $row['rowid']; ?>&table=q"><?php echo $row['word']; ?></a></strong></td>
		</tr>
			<?php } ?>
			<?php while ($row = $show_r->fetchArray()) { ?>
		<tr>
			<td><strong><a href="index.php?id=<?php echo $row['rowid']; ?>&table=r"><?php echo $row['word']; ?></a></strong></td>
		</tr>
			<?php } ?>
			<?php while ($row = $show_s->fetchArray()) { ?>
		<tr>
			<td><strong><a href="index.php?id=<?php echo $row['rowid']; ?>&table=s"><?php echo $row['word']; ?></a></strong></td>
		</tr>
			<?php } ?>
			<?php while ($row = $show_t->fetchArray()) { ?>
		<tr>
			<td><strong><a href="index.php?id=<?php echo $row['rowid']; ?>&table=t"><?php echo $row['word']; ?></a></strong></td>
		</tr>
			<?php } ?>
			<?php while ($row = $show_u->fetchArray()) { ?>
		<tr>
			<td><strong><a href="index.php?id=<?php echo $row['rowid']; ?>&table=u"><?php echo $row['word']; ?></a></strong></td>
		</tr>
			<?php } ?>
			<?php while ($row = $show_v->fetchArray()) { ?>
		<tr>
			<td><strong><a href="index.php?id=<?php echo $row['rowid']; ?>&table=v"><?php echo $row['word']; ?></a></strong></td>
		</tr>
			<?php } ?>
			<?php while ($row = $show_w->fetchArray()) { ?>
		<tr>
			<td><strong><a href="index.php?id=<?php echo $row['rowid']; ?>&table=w"><?php echo $row['word']; ?></a></strong></td>
		</tr>
			<?php } ?>
			<?php while ($row = $show_x->fetchArray()) { ?>
		<tr>
			<td><strong><a href="index.php?id=<?php echo $row['rowid']; ?>&table=x"><?php echo $row['word']; ?></a></strong></td>
		</tr>
			<?php } ?>
			<?php while ($row = $show_y->fetchArray()) { ?>
		<tr>
			<td><strong><a href="index.php?id=<?php echo $row['rowid']; ?>&table=y"><?php echo $row['word']; ?></a></strong></td>
		</tr>
			<?php } ?>
			<?php while ($row = $show_z->fetchArray()) { ?>
		<tr>
			<td><strong><a href="index.php?id=<?php echo $row['rowid']; ?>&table=z"><?php echo $row['word']; ?></a></strong></td>
		</tr>
			<?php } ?>
	</table>
	</div>
	</div>

</body>
</html>