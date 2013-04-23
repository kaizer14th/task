<?php
include 'connect.php';
$id = $_POST['id'];
$name = $_POST['name'];
$disc = $_POST['disc'];

$sql = mysql_query("UPDATE post SET name='". $name ."', disc='". $disc ."' WHERE id='". $id ."'");

?>
