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

                    <li class="linav"> <a href="#"> Add Adresses </a></li>
                    <li class="linav"><a href="adressen.php"> Addresses</a></li>
                    <li class="linav"><a href="#"> Add Users </a></li>
                    <li class="linav"><a href="#"> Users </a></li>
                </ul>
            </nav>

            <div class="loginHeader">
                <a href="logout.php" class="signInBtn"> Log out </a>
            </div>

        </header>
    </div>

    <main class="regismain">
        <div class="regiscontainer">
            <form class="regisform" method="post" action="verwerk_regis.php">
                <ul class="regisul">
                    <li class="regisli">
                        <label for="role"> Role </label><br>
                        <select id="role" name="role" class="dropdownMenu">
                            <option value="manager">Manager</option>
                            <option value="regular">Regular</option>
                            <option value="admin">Admin</option>
                        </select>
                    </li>
                    <li class="regisli">
                        <label for="txtUsername">Username</label><br>
                        <input class="txtInput" type="text" id="txtUsername" name="txtUsername" placeholder="Username" autofocus>
                    </li>
                    <li class="regisli">
                        <label for="txtFirstname">Firstname</label><br>
                        <input class="txtInput" type="text" id="txtFirstname" name="txtFirstname" placeholder="Firstname" autofocus>
                    </li>
                    <li class="regisli">
                        <label for="txtPrefixes">Prefixes</label><br>
                        <input class="txtInput" type="text" id="txtPrefixes" name="txtPrefixes" placeholder="Prefixes" autofocus>
                    </li>
                    <li class="regisli">
                        <label for="txtLastname">Lastname</label><br>
                        <input class="txtInput" type="text" id="txtLastname" name="txtLastname" placeholder="Lastname">
                    </li>
                    <li class="regisli">
                        <label for="txtEmail">Email</label><br>
                        <input class="txtInput" type="text" id="txtEmail" name="txtEmail" placeholder="Email" autofocus>
                    </li>
                    <li class="regisli">
                        <label for="txtPassword">Password</label><br>
                        <input class="txtInput" type="text" id="txtPassword" name="txtPassword" placeholder="Password">
                    </li>
                    <li class="regisli">
                        <label for="txtStraat"> Street </label><br>
                        <input class="txtInput" type="text" id="txtStraat" name="txtStraat" placeholder="Straat">
                    </li>
                    <li class="regisli">
                        <label for="txtHuisnummer"> House number </label><br>
                        <input class="txtInput" type="text" id="txtHuisnummer" name="txtHuisnummer" placeholder="House number">
                    </li>
                    <li class="regisli">
                        <label for="txtPostcode"> Postcode </label><br>
                        <input class="txtInput" type="text" id="txtPostcode" name="txtPostcode" placeholder="Postcode">
                    </li>
                    <li class="regisli">
                        <label for="txtPlaats"> Place </label><br>
                        <input class="txtInput" type="text" id="txtPlaats" name="txtPlaats" placeholder="Place">
                    </li>
                    <li class="regisli">
                        <label for="txtLand"> Country </label><br>
                        <input class="txtInput" type="text" id="txtLand" name="txtLand" placeholder="Country">
                    </li>
                    <li class="regisli">
                        <label for="telefoonnummer"> Telefone number </label><br>
                        <input class="txtInput" type="text" id="telefoonnummer" name="telefoonnummer" placeholder="Telefone number">
                    </li>
                    <li class="regisli">
                        <label for="mobielnummer"> Mobile number </label><br>
                        <input class="txtInput" type="text" id="mobielnummer" name="mobielnummer" placeholder="Mobile number">
                    </li>
                    <li class="regisli">
                        <label for="txtNotitie"> Note </label><br>
                        <input class="txtInput" type="text" id="txtNotitie" name="txtNotitie" placeholder="Note">
                    </li>
                    <li class="regisli">
                        <label for="register_datum"> Register date </label><br>
                        <input class="txtInput" type="text" id="register_datum" name="register_datum" placeholder="YYYY-MM-DD">
                    </li>
                    <li class=" regisli">
                        <label for="aantalmensen"> Aantal mensen </label><br>
                        <input class="txtInput" type="text" id="aantalmensen" name="aantalmensen" placeholder="Aantal mensen">
                    </li>
                    <li class="regisli">
                        <label for="txtAfdeling"> Afdeling </label><br>
                        <input class="txtInput" type="text" id="txtAfdeling" name="txtAfdeling" placeholder="Afdeling">
                    </li>
                    <li class="regisli">
                        <label for="indienst">Employee</label><br>
                        <input class="btnRadio" type="radio" id="employeeYes" name="indienst" value="true">
                        <label class="lblRadio" for="employeeYes">Yes</label>
                        <input class="btnRadio" type="radio" id="employeeNo" name="indienst" value="false">
                        <label class="lblRadio" for="employeeNo">No</label>
                    </li>
                    <li class="regisli">
                        <label for="geslacht">Gender</label><br>
                        <input class="btnRadio" type="radio" id="male" name="geslacht" value="male">
                        <label class="lblRadio" for="male">Male</label>
                        <input class="btnRadio" type="radio" id="female" name="geslacht" value="female">
                        <label class="lblRadio" for="female">Female</label>
                        <input class="btnRadio" type="radio" id="other" name="geslacht" value="other">
                        <label class="lblRadio" for="other">Other</label>
                    </li>
                    <li class="regisli">
                        <button class="Btn" type="submit"> RIGESTER </button>
                    </li>
                </ul>
            </form>
        </div>
    </main>

    <?php require 'footer.php' ?>

</body>

</html>