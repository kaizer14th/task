<?php
// Create connection
$con = mysql_connect("localhost","root","1234");

// Check connection
if (!$con) {
	die("Failed to connect to MySQL");
}

// Select database
mysql_select_db("ajax");
?> 