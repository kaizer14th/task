<?php 
	include ('connect.php');

	$id = mysql_real_escape_string($_POST['id']);
	// Delete comment
	$sql = "DELETE FROM messages WHERE id='". $id ."'";
	$query = mysql_query($sql)or die(mysql_error());

	if (!$query) {
		echo "error";
	}

	header('location: index.php');
?> 