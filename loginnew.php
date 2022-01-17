<?php
session_start();
$connect = mysqli_connect('localhost', 'root', '', 'test');
$username = $_POST['login'];
$password = $_POST['password'];

$s = "SELECT * FROM user WHERE username='$username' && password='$password';";

$result = mysqli_query($connect, $s);

$num = mysqli_num_rows($result);

if ($num == 1) {
    header('Location: user.php');
} else {
    header('Location: strlogin.php');
}
