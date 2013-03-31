<?php 
	include ('connect.php');

	session_start();

	$name = mysql_real_escape_string($_POST["name1"]);
	$text = mysql_real_escape_string($_POST["text"]);
	$short = mysql_real_escape_string($_POST["sText"]);
	$id = mysql_real_escape_string($_POST['id']);
	$uid = mysql_real_escape_string($_POST['uid']);
	$changeTime = date("Y-m-d H:i:s");
	// Updating comment
	$sql = "UPDATE messages SET name='". $name ."', text='". $text ."', short='". $short ."', changeTime='". $changeTime ."' WHERE id='". $id ."'";
	
	if ($_SESSION['uid'] == $uid) $query = mysql_query($sql)or die(mysql_error());

	if (!$query) echo "error";

	header('location: index.php');
?> 