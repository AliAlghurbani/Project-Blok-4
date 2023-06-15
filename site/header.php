<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/icon.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title> Locasion </title>
</head>

<body>

    <div class="shadow">
        <header>

            <div class="logo">
                <a href="homepage.php"><img src="images/Logo1-removebg-preview.png" alt="LOGO" class="logoImg"></a>
            </div>
            <nav>

                <?php
                if (isset($_SESSION['isIngelogd'])) {
                    $user['role'] = $_SESSION['role'];
                    if ($user['role'] == 'administrator') {
                        die('dasdasdasdasdf');

                ?>
                        <ul class="ulnav">
                            <li class="linav"> <a href="#"> Stats </a></li>
                            <li class="linav"> <a href="#"> Add Adresses </a></li>
                            <li class="linav"><a href="adressen.php"> Addresses</a></li>
                            <li class="linav"><a href="#"> Add Users </a></li>
                            <li class="linav"><a href="#"> Users </a></li>
                        </ul>
                    <?php
                    } else if ($user['role'] == 'manager') {
                    ?>
                        <ul class="ulnav">
                            <li class="linav"> <a href="#"> Stats </a></li>
                            <li class="linav"> <a href="#"> Add Adresses </a></li>
                            <li class="linav"><a href="adressen.php"> Addresses</a></li>
                        </ul>
                    <?php
                    } else {
                    ?>
                        <ul class="ulnav">
                            <li class="linav"> <a href="#"> Explore </a></li>
                            <li class="linav"> <a href="#"> Apps </a></li>
                            <li class="linav"><a href="adressen.php"> Addresses</a></li>
                            <li class="linav"><a href="#"> Contact </a></li>
                        </ul>
                <?php
                    }
                }
                ?>

            </nav>

            <div class="loginHeader">
                <a href="inloggen.php" class="signInBtn"> Sign in </a>
            </div>

        </header>
    </div>