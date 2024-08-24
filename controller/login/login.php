<?php
include_once("../../config/dbconnection.php");

$res = new stdClass();

$username = $_POST["username"];
$password = $_POST["password"];

$login = "SELECT username, password FROM users WHERE username = '$username'";
$login = $conn->query($login);
$resLogin = $login->fetch_assoc();

if ($login->num_rows > 0 && $resLogin["password"] === $password) {
    $res->status = 200;
    $res->msg = "Success login";
    session_start();
    $_SESSION["username"] = $username;
} else {
    $res->status = 500;
    $res->msg = "Failed login";
}

echo json_encode($res);
