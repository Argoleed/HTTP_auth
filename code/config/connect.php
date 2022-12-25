<?php
$connect = mysqli_connect('localhost', 'root', '', 'usersdb');
if (!$connect) {
    die('Error to connect db');
}