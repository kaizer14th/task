<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="contentM">
            <div class="register">
                <form method="POST" >

                    Login: <br /> <input name="login" type="text"><br />

                    Password: <br /> <input name="password" type="password"><br />
                    
                    

                    <input name="submit" type="submit" value="Register">

                </form>
            </div>
        <?PHP 
        session_start();
        include ("connect.php");
        

        if(isset($_POST['submit'])) {
            $err = array();

            $login = trim(mysql_real_escape_string($_POST['login']));
            // checking login
            if(!preg_match("/^[a-zA-Z0-9]+$/",$login)) {

                $err[] = "Use only numbers and letters";

            }

            if(strlen($login) < 3 or strlen($login) > 30) {

                $err[] = "Use from 3 to 30 symbols";

            }

            $query = mysql_query("SELECT COUNT(user_id) FROM users WHERE user_login='". $login ."'");

            if(mysql_result($query, 0) > 0) {

                $err[] = "There is user with this user name";

            }

            if(count($err) == 0) {

                $password = trim(mysql_real_escape_string($_POST['password']));
                // Adding user to DB
                $sql = "INSERT INTO users (user_login, user_password) VALUES ('". $login ."', '". $password ."')";
                mysql_query($sql)or die(mysql_error());

                if ($sql) {

                header("Location: index.php");
                 
                }
            } else {

                echo "<div class='regError'><b>Error:</b><br>";

                foreach($err AS $error) {

                    echo $error."<br>";

                }

                echo "</div>";

            }

        }

        ?>

        </div>
    </body>
</html>