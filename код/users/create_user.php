<?php
    require_once 'C:/Server/data/htdocs/config/connect.php';

    $login = $_GET['login'];
    $salt = random_bytes(16);
    $password = $_GET["password"];
    $rep_password = $_GET["rep_password"];
    $mail = $_GET["mail"];

    $row = mysqli_fetch_row(mysqli_query($connect, "SELECT count(*) FROM `users` WHERE `login` = '$login'"));
    if ($password != $rep_password){
        echo "Passwords don't match";
    }
    elseif($row[0] > 0) {
        echo "Username is occuped";
    }
    else{
        $hash = hash('sha256', $password . $salt);
        mysqli_query($connect, "INSERT INTO `users` (`id`, `login`, `mail`, `hash`, `salt`) VALUES (NULL, '$login', '$mail', '$hash', '$salt')");
        setcookie($login.'_token', 1, time()+3600);
        setcookie($login.'_password_refresh', 1, time()+3600*24*7);
        header("location: ../profile.php?user=".$login, true, 301);
    }
