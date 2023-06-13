<?php

require 'database.php';

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header($_SERVER["SERVER_PROTOCOL"] . " 405 Method Not Allowed", true, 405);
    include '405.php';
    exit;
}

$straat = $_POST["txtStraat"];

$huisnummer = $_POST["txtHuisnummer"];

$postcode = $_POST["txtPostcode"];

$plaats = $_POST["txtPlaats"];

$land = $_POST["txtLand"];

$telefoonnummer = $_POST["telefoonnummer"];

$mobielnummer = $_POST["mobielnummer"];

$notitie = $_POST["txtNotitie"];

$registerdatum = $_POST["register_datum"];


$sql = "INSERT INTO address (straat, huisnummer, postcode, plaats, land, telefoonnummer, mobielnummer, notitie, toevoegdatum) 
    VALUES ('$straat','$huisnummer','$postcode','$plaats','$land','$telefoonnummer','$mobielnummer', '$notitie', '$registerdatum' )";

mysqli_query($conn, $sql);

?>