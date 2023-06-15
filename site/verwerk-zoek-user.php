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