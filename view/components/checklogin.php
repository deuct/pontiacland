<?php
session_start();

if ((isset($_SESSION["username"]) && $_SESSION["username"] == "") || (!isset($_SESSION["username"]))) {
    header('Location: ' . "../login/login.php");
}
