<?php

require 'database.php';

//de sql query
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
$all_users = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<?php

require 'header.php';

?>

<body class="users-overzichtBody">


    <div class="filterandsearch">
        <form action="specials.php" method="post" class="filter">
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
        </form>

        <form action="verwerk-zoek-user.php" method="post">
            <input class="txtInput" type="text" name="zoekveld" placeholder="Type the user here">
            <button class="Btn" type="submit"><span class="material-symbols-outlined">travel_explore</span></button>
        </form>
    </div>


    <main class="table">
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Id </th>
                        <th> First Name </th>
                        <th> Prefixes </th>
                        <th> Last Name </th>
                        <th> Username </th>
                        <th> Gender </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($all_users as $user) : ?>
                        <tr>
                            <td><?php echo $user['id'] ?></td>
                            <td><?php echo $user['voornaam'] ?></td>
                            <td><?php echo $user['tussenvoegsels'] ?></td>
                            <td><?php echo $user['achternaam'] ?></td>
                            <td><?php echo $user['gebruikersnaam'] ?></td>
                            <td><?php echo $user['geslacht'] ?></td>
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