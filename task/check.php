<?PHP

session_start();

include ("connect.php");

if (isset($_SESSION['uid'])) {   

    $query = mysql_query("SELECT * FROM users WHERE user_id = '". $_SESSION['uid'] ."' LIMIT 1");

    $userdata = mysql_fetch_assoc($query);

    if ($userdata['user_id'] !== $_SESSION['uid']) {

        unset($_SESSION['id']);
        unset($_SESSION['uid']);
        unset($_SESSION['login']);

        session_destroy();

        header("Location: index.php");
    } else {
        
        header("Location: index.php");

    }

} else {

    header("Location: index.php");

}

?>
