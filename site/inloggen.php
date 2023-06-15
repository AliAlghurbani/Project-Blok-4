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
                    <li class="linav"><a href="inloggen.php"> Addresses</a></li>
                    <li class="linav"><a href="#"> Contact </a></li>
                </ul>
            </nav>

            <div class="loginHeader">
                <a href="inloggen.php" class="signInBtn"> Sign in </a>
            </div>

        </header>
    </div>

    <main class="regismain">
        <div class="regiscontainer">
            <form class="regisform" method="post" action="verwerk_inloggen.php">
                <ul class="inloggensul">
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <li class="regisli">
                        <label for="txtEmail">Email</label><br>
                        <input class="txtInput" type="text" id="txtEmail" name="email" placeholder="Email" autofocus>
                    </li>
                    <li class="regisli">
                        <label for="txtPassword">Password</label><br>
                        <input class="txtInput" type="text" id="txtPassword" name="password" placeholder="Password">
                    </li>
                    <li class="regisli">
                        <button class="Btn" type="submit"> SIGN IN </button>
                    </li>
                </ul>
            </form>
        </div>
    </main>

    <?php include 'footer.php'; ?>

</body>

</html>