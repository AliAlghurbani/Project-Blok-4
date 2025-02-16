<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("location: inloggen.php");
    exit;
}

$zoekterm = $_POST['zoekveld'];

if (empty($zoekterm)) {
    header("location: addresses-overzicht.php");
    exit;
}

require 'database.php';

$sql = "SELECT * FROM address WHERE address_id LIKE '%$zoekterm%' OR straat LIKE '%$zoekterm%' OR huisnummer LIKE '%$zoekterm%' 
OR postcode LIKE '%$zoekterm%' OR plaats LIKE '%$zoekterm%' OR land LIKE '%$zoekterm%' OR telefoonnummer LIKE '%$zoekterm%' 
OR mobielnummer LIKE '%$zoekterm%' OR notitie LIKE '%$zoekterm%' OR toevoegdatum LIKE '%$zoekterm%' ";

$result = mysqli_query($conn, $sql);
$all_addresses = mysqli_fetch_all($result,  MYSQLI_ASSOC);

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

<body class="users-overzichtBody">

    <div class="filterandsearch">

        <form action="verwerk-filter-address.php" method="post" class="filter">
            <select id="filter_option" name="filter_option" class="dropdownMenu" style="margin-top: 4.5vh;">
                <option value="A-Z"> A-Z </option>
                <option value="Z-A"> Z-A </option>
                <option value="1-999"> 1-999 </option>
                <option value="999-1"> 999-1 </option>
                <option value="Streets"> Streets </option>
                <option value="Post codes"> Post codes </option>
                <option value="Places"> Places </option>
                <option value="Countries"> Countries </option>
            </select>
            <button class="Btn" type="submit"><span class="material-symbols-outlined">sort</span></button>
        </form>

        <form action="verwerk-zoek-address.php" method="post">
            <input class="txtInput" type="text" name="zoekveld" placeholder="Type the address here">
            <button class="Btn" type="submit"><span class="material-symbols-outlined">travel_explore</span></button>
        </form>

    </div>


    <main class="table">
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Address Id </th>
                        <th> Street </th>
                        <th> House number </th>
                        <th> Post code </th>
                        <th> Place </th>
                        <th> Country </th>
                        <th> Telefone number </th>
                        <th> Mobile number </th>
                        <th> Note </th>
                        <th> Added date </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($all_addresses as $address) : ?>
                        <tr>
                            <td><?php echo $address['address_id'] ?></td>
                            <td><?php echo $address['straat'] ?></td>
                            <td><?php echo $address['huisnummer'] ?></td>
                            <td><?php echo $address['postcode'] ?></td>
                            <td><?php echo $address['plaats'] ?></td>
                            <td><?php echo $address['land'] ?></td>
                            <td><?php echo $address['telefoonnummer'] ?></td>
                            <td><?php echo $address['mobielnummer'] ?></td>
                            <td><?php echo $address['notitie'] ?></td>
                            <td><?php echo $address['toevoegdatum'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </section>
    </main>
</body>