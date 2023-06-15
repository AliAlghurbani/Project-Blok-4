<?php


if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header($_SERVER["SERVER_PROTOCOL"] . " 405 Method Not Allowed", true, 405);
    include '405.php';
    exit;
}

require 'database.php';

$email = $_POST['email'];
$password = $_POST['password'];


$sql = "SELECT * FROM users WHERE email = '$email' ";

$result = mysqli_query($conn, $sql);

$user = mysqli_fetch_assoc($result);

if (empty($email)) {
    header("location: inloggen.php?error=User Name is required");
    exit();
} else if (empty($password)) {
    header("location: inloggen.php?error=Password is required");
    exit();
}

if (!is_array($user)) {
    header("location: inloggen.php");
    exit;
}

if (password_verify($password, $user['password'])) {

    session_start();

    $_SESSION['isIngelogd'] = true;
    $_SESSION['voornaam'] = $user['voornaam'];
    $_SESSION['user_id'] = $user['id'];
    

    header("location: dashboard.php");
    exit;
} else {

    header("location: inloggen.php");
    exit;
}
