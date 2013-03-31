<?PHP

	session_start();
	
	include ("connect.php");

	unset($_COOKIE['id']);
	unset($_COOKIE['uid']);
	unset($_COOKIE['login']);

	session_destroy();

	header("Location: index.php");
?>
