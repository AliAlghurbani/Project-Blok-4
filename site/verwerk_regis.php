<?php

require 'database.php';

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header($_SERVER["SERVER_PROTOCOL"] . " 405 Method Not Allowed", true, 405);
    echo "verkeerde request method gebruikt";
    include '405.php';
    exit;
}

$gebruikersnaam = $_POST['txtUsername'];

$email = $_POST['txtEmail'];

$password = $_POST['txtPassword'];

$voornaam = $_POST['txtFirstname'];

$tussenvoegsels = $_POST['txtPrefixes'];

$achternaam = $_POST['txtLastname'];

$geslacht = $_POST['geslacht'];

$rol = $_POST['role'];

$straat = $_POST["txtStraat"];

$huisnummer = $_POST["txtHuisnummer"];

$postcode = $_POST["txtPostcode"];

$plaats = $_POST["txtPlaats"];

$land = $_POST["txtLand"];

$telefoonnummer = $_POST["telefoonnummer"];

$mobielnummer = $_POST["mobielnummer"];

$notitie = $_POST["txtNotitie"];

$indienst = $_POST["indienst"];

$registerdatum = $_POST["register_datum"];

$afdeling = $_POST["txtAfdeling"];

$aantalmensen = $_POST["aantalmensen"];

$hash_password = password_hash($password, PASSWORD_DEFAULT);




if ($rol == "admin") {

    $sql = "INSERT INTO administrator (in_dienst) VALUES ('$indienst')";

    mysqli_query($conn, $sql);

    $id = mysqli_insert_id($conn);

    $sql = "INSERT INTO users (voornaam, tussenvoegsels, achternaam, geslacht, email, gebruikersnaam, password, admin_id)
    VALUES ('$voornaam','$tussenvoegsels','$achternaam','$geslacht','$email','$gebruikersnaam','$hash_password','$id')";

    mysqli_query($conn, $sql);

    // $sql = "INSERT INTO address (straat, huisnummer, postcode, plaats, land, telefoonnummer, mobielnummer, notitie) 
    // VALUES ('$straat','$huisnummer','$postcode','$plaats','$land','$telefoonnummer','$mobielnummer', '$notitie' )";

    // mysqli_query($conn, $sql);
    
} elseif ($rol == "manager") {

    $sql = "INSERT INTO manager (txtAfdeling, aantalmensen) VALUES ('$afdeling','$aantalmensen')";

    mysqli_query($conn, $sql);

    $id = mysqli_insert_id($conn);

    $sql = "INSERT INTO users (voornaam, tussenvoegsels, achternaam, geslacht, email, gebruikersnaam, password, manager_id)
    VALUES ('$voornaam','$tussenvoegsels','$achternaam','$geslacht','$email','$gebruikersnaam','$hash_password','$id')";

    mysqli_query($conn, $sql);

    // $sql = "INSERT INTO address (straat, huisnummer, postcode, plaats, land, telefoonnummer, mobielnummer, notitie) 
    // VALUES ('$straat','$huisnummer','$postcode','$plaats','$land','$telefoonnummer','$mobielnummer', '$notitie' )";

    // mysqli_query($conn, $sql);
} elseif ($rol == "regular") {

    $sql = "INSERT INTO regular (register_datum) VALUES ('$registerdatum')";

    mysqli_query($conn, $sql);

    $id = mysqli_insert_id($conn);

    $sql = "INSERT INTO users (voornaam, tussenvoegsels, achternaam, geslacht, email, gebruikersnaam, password, regular_id)
    VALUES ('$voornaam','$tussenvoegsels','$achternaam','$geslacht','$email','$gebruikersnaam','$hash_password','$id')";

    mysqli_query($conn, $sql);

    // $sql = "INSERT INTO address (straat, huisnummer, postcode, plaats, land, telefoonnummer, mobielnummer, notitie) 
    // VALUES ('$straat','$huisnummer','$postcode','$plaats','$land','$telefoonnummer','$mobielnummer', '$notitie' )";

    // mysqli_query($conn, $sql);
}
