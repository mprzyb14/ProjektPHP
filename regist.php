<?php
session_start();
$connect = mysqli_connect('localhost', 'root', '', 'test');
$username = $_POST['login'];
$password = $_POST['password'];

$s = "SELECT * FROM user WHERE username='$username';";

$result = mysqli_query($connect, $s);

$num = mysqli_num_rows($result);

if ($num == 1) {
    header('Location: strregist.php');
} else {
    $reg = "INSERT INTO user(username, password) VALUES ('$username', '$password');";
    mysqli_query($connect, $reg);
    header('Location: index.php');
}
