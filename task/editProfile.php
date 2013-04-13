<?php
include 'connect.php';
include 'saveAvatar.php';
session_start();
$sql = mysql_query("SELECT user_login FROM users WHERE user_id=".$_SESSION['uid']);
$login = mysql_fetch_assoc($sql);
?>
<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="contentM">
            <div class="register">
                <form method="POST" enctype="multipart/form-data">

                    Login: <br /> <input name="login" type="text" value="<? echo $login['user_login'];?>"><br />

                    Password: <br /> <input name="password" type="password"><br />
                    
                    Avatar: <br /> <input name="avatar" type="file"><br />

                    <input name="submit" type="submit" value="Register">

                </form>
            </div>
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
