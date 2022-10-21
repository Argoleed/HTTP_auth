<?php
    require_once 'C:/Server/data/htdocs/config/connect.php';

    $password = $_GET['password'];
    $login = $_GET['login'];
    $row = mysqli_fetch_row(mysqli_query($connect, "SELECT count(*) FROM `users` WHERE `login` = '$login'"));
    if ($row[0] < 1){
        echo "<font color = indianred>Invalid login or password</font>";
    }
    else{
        $row = mysqli_fetch_row(mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'"));
        $salt = $row[4];
        $hash = hash('sha256', $password . $salt);
        if ($hash != $row[3]){
            echo "<font color = indianred>Invalid login or password</font>";
        }
        else{
            setcookie($login.'_token', 1, time()+3600);
            header("location: ../profile.php?user=".$login);
        }
    }

