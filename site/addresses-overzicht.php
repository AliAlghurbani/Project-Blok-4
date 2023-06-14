<?php

require 'database.php';


$sql = "SELECT * FROM address";
$result = mysqli_query($conn, $sql);
$all_users = mysqli_fetch_all($result, MYSQLI_ASSOC);



?>

<?php

require 'header.php';

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

        <form action="verwerk-zoek-adress.php" method="post">
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
                    <?php foreach ($all_users as $user) : ?>
                        <tr>
                            <td><?php echo $user['address_id'] ?></td>
                            <td><?php echo $user['straat'] ?></td>
                            <td><?php echo $user['huisnummer'] ?></td>
                            <td><?php echo $user['postcode'] ?></td>
                            <td><?php echo $user['plaats'] ?></td>
                            <td><?php echo $user['land'] ?></td>
                            <td><?php echo $user['telefoonnummer'] ?></td>
                            <td><?php echo $user['mobielnummer'] ?></td>
                            <td><?php echo $user['notitie'] ?></td>
                            <td><?php echo $user['toevoegdatum'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </section>
    </main>
</body>
<?php require 'footer.php' ?>

</body>

</html>