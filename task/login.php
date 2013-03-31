<?PHP
session_start();

include ("connect.php");

$login = trim(mysql_real_escape_string($_POST['login']));

$query = mysql_query("SELECT user_id, user_password FROM users WHERE user_login='". $login ."' LIMIT 1");

$data = mysql_fetch_assoc($query);

// checking password

if ($data['user_password'] == (mysql_real_escape_string($_POST['password']))) {

    $_SESSION['uid'] = $data['user_id'];

    $_SESSION['login'] = $login;

    header("Location: check.php");

} else {

    echo "wrong password or login";

}

?>