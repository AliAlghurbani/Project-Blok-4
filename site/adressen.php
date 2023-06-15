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

    <main class="regismain">
        <div class="regiscontainer">
            <form class="regisform" method="post" action="verwerk_addressen.php">
                <ul class="regisul">
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
                        <label for="txtNotitie"> Notitie </label><br>
                        <input class="txtInput" type="text" id="txtNotitie" name="txtNotitie" placeholder="Notitie">
                    </li>
                    <li class="regisli">
                        <label for="register_datum"> Register date </label><br>
                        <input class="txtInput" type="text" id="register_datum" name="register_datum" placeholder="YYYY-MM-DD">
                    </li>
                    <li class="regisli">
                        <button class="Btn" type="submit"> ADD ADDRESS </button>
                    </li>
                </ul>
            </form>
        </div>
    </main>

</body>

</html>