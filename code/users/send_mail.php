<?php
require_once 'C:/Server/data/htdocs/config/connect.php';

function RandomString()
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randstring = '';
    for ($i = 0; $i < 10; $i++) {
        $randstring = $randstring.$characters[rand(0, strlen($characters))];
    }
    return $randstring;
}

$mail = $_GET['mail'];
$login = $_GET['login'];
$row = mysqli_fetch_row(mysqli_query($connect, "SELECT count(*) FROM `users` WHERE `login` = '$login'"));
if ($row[0] < 1){
    echo "<font color = indianred>User not found</font>";
}
else{
    $row = mysqli_fetch_row(mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'"));
    if ($mail != $row[2]){
        echo "<font color = indianred>Invalid e-mail</font>";
    }
    else{
        $password = RandomString();
        $salt = random_bytes(16);
        $hash = hash('sha256', $password . $salt);
        mysqli_query($connect,"UPDATE `users` SET `salt`='$salt', `hash`='$hash' WHERE `login`= '$login'");
        mail($mail, "Password recovery", "New password from $login: $password");
        header("Location: ../login.php");
    }
}
