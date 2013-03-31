<?php 
	include ('connect.php');
	
	$user_id = $_POST['id'];
	$name = $_POST["name1"];
	$text = $_POST["text"];
	$stext = $_POST["sText"];
	$changeTime = date("Y-m-d H:i:s");
	// regExp
	$text=str_replace("\r","",$text);
	$text=str_replace("man","***",$text);
	$text=str_replace("girl","****",$text);
	// Adding new comment
	$sql = "INSERT INTO messages (name, text, short, changeTime, user_id) VALUES ('". $name ."', '". $text ."', '". $stext ."', '". $changeTime ."', '". $user_id ."');";
	$query = mysql_query($sql)or die(mysql_error());

	if (!$query){
		echo "error";
	}

	header('location: index.php');
?> 