<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("location: inloggen.php");
    exit;
}


session_start();

if (!isset($_SESSION['isIngelogd'])) {
    header("location: inloggen.php");
    exit;
}

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
                <ul class="ulnav">
                    <li class="linav"> <a href="#"> Explore </a></li>
                    <li class="linav"> <a href="#"> Apps </a></li>
                    <li class="linav"><a href="addresses-overzicht.php"> Addresses</a></li>
                    <li class="linav"><a href="#"> Contact </a></li>
                </ul>
            </nav>

            <div class="loginHeader">
                <a href="logout.php" class="signInBtn"> Log out </a>
            </div>

        </header>
    </div>

    <main class="homepageMain">

        <h1> <?php echo "Welcome! " . $_SESSION['voornaam']; ?> </h1>
        <h2> Find and browse through your addresses</h2>
        <a href="addresses-overzicht.php" class="homepageBtn">
            <div><span class="material-symbols-outlined">map</span></div>
            <div>Show addresses</div>
        </a>
        <p> Click on the blue button to browse through adresses! </p>

    </main>



    <?php
    include 'footer.php';
    ?>

</body>

</html>