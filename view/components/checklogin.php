<?php
session_start();
// $_SESSION["username"] = "";
// session_destroy();

print_r($_SESSION["username"]);
if ((isset($_SESSION["username"]) && $_SESSION["username"] == "") || (!isset($_SESSION["username"]))) {
    header('Location: ' . "../login/login.php");
}
