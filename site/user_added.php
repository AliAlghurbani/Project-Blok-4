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
                <ul class="ulnav">

                    <li class="linav"> <a href="adressen.php"> Add Adresses </a></li>
                    <li class="linav"><a href="addresses-overzicht.php"> Addresses</a></li>
                    <li class="linav"><a href="regis.php"> Add Users </a></li>
                    <li class="linav"><a href="users-overzicht.php"> Users </a></li>
                </ul>
            </nav>

            <div class="loginHeader">
                <a href="logout.php" class="signInBtn"> Log out </a>
            </div>

        </header>
    </div>

    <div class="dashbody">
        <div class="addusersH">
            <img class="adduserPic" src="images/check1.gif" alt="img">
            <h1 class="addusersTitle"> USER ADDED </h1>
        </div>
        <a href="homepage.php" class="dashButton"> HOME PAGE </a>
        <a href="regis.php" class="dashButton"> ADD ANOTHER USER </a>
    </div>
</body>

</html>

<?php
include 'footer.php';
?>