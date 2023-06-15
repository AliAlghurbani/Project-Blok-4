<?php

require 'database.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $filterOption = $_POST['filter_option'];
    if ($filterOption == "A-Z") {
        $sql = "SELECT * FROM address ORDER BY straat";
    } else if ($filterOption == "Z-A") {
        $sql = "SELECT * FROM address ORDER BY straat DESC";
    } else if ($filterOption == "1-999") {
        $sql = "SELECT * FROM address ORDER BY address_id";
    } else if ($filterOption == "999-1") {
        $sql = "SELECT * FROM address ORDER BY address_id DESC";
    } else if ($filterOption == "Streets") {
        $sql = "SELECT * FROM address ORDER BY straat";
    } else if ($filterOption == "Post_codes") {
        $sql = "SELECT * FROM address ORDER BY postcode";
    } else if ($filterOption == "Places") {
        $sql = "SELECT * FROM address ORDER BY plaats";
    } else if ($filterOption == "Countries") {
        $sql = "SELECT * FROM address ORDER BY land";
    }

    $result = mysqli_query($conn, $sql);
    $all_addresses = mysqli_fetch_all($result,  MYSQLI_ASSOC);
}

?>

<?php
include 'header.php';
?>

<body class="users-overzichtBody">

    <div class="filterandsearch">

        <form action="verwerk-filter-address.php" method="post" class="filter">
            <select id="filter_option" name="filter_option" class="dropdownMenu" style="margin-top: 4.5vh;">
                <option value="A-Z"> A-Z </option>
                <option value="Z-A"> Z-A </option>
                <option value="1-999"> 1-999 </option>
                <option value="999-1"> 999-1 </option>
                <option value="Streets"> Streets </option>
                <option value="Post_codes"> Post codes </option>
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