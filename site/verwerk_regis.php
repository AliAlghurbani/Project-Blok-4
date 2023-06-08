<?php

require 'database.php';

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header($_SERVER["SERVER_PROTOCOL"] . " 405 Method Not Allowed", true, 405);
    echo "verkeerde request method gebruikt";
    include '405.php';
    exit;
}

$username = $_POST['txtUsername'];
$email = $_POST['txtEmail'];
$password = $_POST['txtPassword'];
$firstname = $_POST['txtFirstname'];
$prefixes = $_POST['txtPrefixes'];
$lastname = $_POST['txtLastname'];
$geslacht = $_POST['txtGeslacht'];


$$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (voornaam, achternaam, postcode, email, password , role)
 VALUES ('$voornaam', '$achternaam', '$postcode', '$email', '$hashed_password', 'browser') ";

if (mysqli_query($conn, $sql)) {
    header("location: inloggen.php");
    exit;
}
