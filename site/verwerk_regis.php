<?php

require 'database.php';

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header($_SERVER["SERVER_PROTOCOL"] . " 405 Method Not Allowed", true, 405);
    echo "verkeerde request method gebruikt";
    include '405.php';
    exit;
}

session_start();

$rol = $_POST['role'];
$_SESSION['role'] = $_POST['role'];

$gebruikersnaam = $_POST['txtUsername'];

$voornaam = $_POST['txtFirstname'];

$tussenvoegsels = $_POST['txtPrefixes'];

$achternaam = $_POST['txtLastname'];

$email = $_POST['txtEmail'];

$password = $_POST['txtPassword'];

$straat = $_POST["txtStraat"];

$huisnummer = $_POST["txtHuisnummer"];

$postcode = $_POST["txtPostcode"];

$plaats = $_POST["txtPlaats"];

$land = $_POST["txtLand"];

$telefoonnummer = $_POST["telefoonnummer"];

$mobielnummer = $_POST["mobielnummer"];

$notitie = $_POST["txtNotitie"];

$registerdatum = $_POST["register_datum"];

$aantalmensen = $_POST["aantalmensen"];

$afdeling = $_POST["txtAfdeling"];

$indienst = $_POST["indienst"];

$geslacht = $_POST['geslacht'];



$hash_password = password_hash($password, PASSWORD_DEFAULT);




if ($rol == "admin") {

    $sql = "INSERT INTO administrator (in_dienst) VALUES ('$indienst')";

    mysqli_query($conn, $sql);

    $id = mysqli_insert_id($conn);

    $sql = "INSERT INTO users (voornaam, tussenvoegsels, achternaam, geslacht, email, gebruikersnaam, password, admin_id)
    VALUES ('$voornaam','$tussenvoegsels','$achternaam','$geslacht','$email','$gebruikersnaam','$hash_password','$id')";

    mysqli_query($conn, $sql);

    $sql1 = "INSERT INTO address (straat, huisnummer, postcode, plaats, land, telefoonnummer, mobielnummer, notitie, toevoegdatum) 
    VALUES ('$straat','$huisnummer','$postcode','$plaats','$land','$telefoonnummer','$mobielnummer', '$notitie', '$registerdatum' )";

    mysqli_query($conn, $sql1);
} elseif ($rol == "manager") {

    $sql = "INSERT INTO manager (afdeling, aantal_mensen) VALUES ('$afdeling','$aantalmensen')";

    mysqli_query($conn, $sql);

    $id = mysqli_insert_id($conn);

    $sql = "INSERT INTO users (voornaam, tussenvoegsels, achternaam, geslacht, email, gebruikersnaam, password, manager_id)
    VALUES ('$voornaam','$tussenvoegsels','$achternaam','$geslacht','$email','$gebruikersnaam','$hash_password','$id')";

    mysqli_query($conn, $sql);

    $sql1 = "INSERT INTO address (straat, huisnummer, postcode, plaats, land, telefoonnummer, mobielnummer, notitie, toevoegdatum) 
    VALUES ('$straat','$huisnummer','$postcode','$plaats','$land','$telefoonnummer','$mobielnummer', '$notitie', '$registerdatum' )";

    mysqli_query($conn, $sql1);
} elseif ($rol == "regular") {

    $sql = "INSERT INTO regular (register_datum) VALUES ('$registerdatum')";

    var_dump($sql);

    mysqli_query($conn, $sql);

    $id = mysqli_insert_id($conn);

    $sql = "INSERT INTO users (voornaam, tussenvoegsels, achternaam, geslacht, email, gebruikersnaam, password, regular_id)
    VALUES ('$voornaam','$tussenvoegsels','$achternaam','$geslacht','$email','$gebruikersnaam','$hash_password','$id')";

    var_dump($sql);

    mysqli_query($conn, $sql);

    $sql1 = "INSERT INTO address (straat, huisnummer, postcode, plaats, land, telefoonnummer, mobielnummer, notitie, toevoegdatum) 
    VALUES ('$straat','$huisnummer','$postcode','$plaats','$land','$telefoonnummer','$mobielnummer', '$notitie', '$registerdatum' )";

    var_dump($sql);

    mysqli_query($conn, $sql1);
}
