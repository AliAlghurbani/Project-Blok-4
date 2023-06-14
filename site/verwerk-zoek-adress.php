<?php

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

<?php
include 'header.php';
?>

<body class="users-overzichtBody">

    <div class="filterandsearch">

        <label for="filter"> Filter </label><br>
        <select id="filter" name="filter" class="dropdownMenu" style="margin-top: 4.5vh;">
            <option value="manager"> A-Z </option>
            <option value="regular"> Z-A </option>
            <option value="admin"> 1-999 </option>
            <option value="admin"> 999-1 </option>
            <option value="admin"> Streets </option>
            <option value="admin"> Post codes </option>
            <option value="admin"> Places </option>
            <option value="admin"> Countries </option>
        </select>

        <form action="verwerk-zoek.php" method="post">
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