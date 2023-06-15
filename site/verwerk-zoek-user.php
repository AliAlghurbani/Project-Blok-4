<?php

$zoekterm = $_POST['zoekveld'];

if (empty($zoekterm)) {
    header("location: addresses-overzicht.php");
    exit;
}

require 'database.php';

$sql = "SELECT * FROM users WHERE id LIKE '%$zoekterm%' OR voornaam LIKE '%$zoekterm%' OR tussenvoegsels LIKE '%$zoekterm%' 
OR achternaam LIKE '%$zoekterm%' OR gebruikersnaam LIKE '%$zoekterm%' OR geslacht LIKE '%$zoekterm%' ";

$result = mysqli_query($conn, $sql);
$all_users = mysqli_fetch_all($result,  MYSQLI_ASSOC);

?>

<?php
include 'header.php';
?>

<body class="users-overzichtBody">


    <div class="filterandsearch">
        <form action="verwerk-filter-user.php" method="post" class="filter">
            <select id="filter" name="filter" class="dropdownMenu" style="margin-top: 4.5vh;">
                <option value="idASC"> ID v </option>
                <option value="idDESC"> ID ^ </option>
                <option value="firstnameASC"> Firstname v </option>
                <option value="firstnameDESC"> Firstname ^ </option>
                <option value="lastnameASC"> Lastname v </option>
                <option value="lastnameDESC"> Lastname ^ </option>
                <option value="usernameASC"> Username v </option>
                <option value="usernameDESC"> Username ^ </option>
                <option value="emailASC"> Email v </option>
                <option value="emailDESC"> Email ^ </option>
            </select>
            <button class="Btn" type="submit"><span class="material-symbols-outlined">sort</span></button>
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