<?php
require_once 'C:/Server/data/htdocs/config/connect.php';

$user = $_GET['user'];
$login = $user;
$password = $_GET['password'];
$rep_password = $_GET['rep_password'];
$old_password = $_GET['old_password'];

$row = mysqli_fetch_row(mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'"));
$salt = $row[4];
$hash = hash('sha256', $old_password . $salt);
if ($hash != $row[3]) {
    echo "<font color = indianred>Invalid password</font>";
}
else{
    if ($password != $rep_password){
        echo "<font color = indianred>Passwords don't match</font>";
    }
    else{
        $salt = random_bytes(16);
        $hash = hash('sha256', $password . $salt);
        mysqli_query($connect,"UPDATE `users` SET `salt`='$salt', `hash`='$hash' WHERE `login`='$user'");
        setcookie($user.'_password_refresh', 1, time()+3600*24*7);
        header("Location: ../profile.php?user=$user");
    }
}
