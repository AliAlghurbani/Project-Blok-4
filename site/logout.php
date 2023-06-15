<?php


if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header($_SERVER["SERVER_PROTOCOL"] . " 405 Method Not Allowed", true, 405);
    include '405.php';
    exit;
}

session_start();

unset($_SESSION);
session_destroy();

header("location: homepage.php");
exit;
