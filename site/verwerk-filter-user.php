<?php

require 'database.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $filterOption = $_POST['filter'];
    if ($filterOption == "idASC") {
        $sql = "SELECT * FROM users ORDER BY id";
    } else if ($filterOption == "idDESC") {
        $sql = "SELECT * FROM users ORDER BY id DESC";
    } else if ($filterOption == "firstnameASC") {
        $sql = "SELECT * FROM users ORDER BY voornaam";
    } else if ($filterOption == "firstnameDESC") {
        $sql = "SELECT * FROM users ORDER BY voornaam DESC";
    } else if ($filterOption == "lastnameASC") {
        $sql = "SELECT * FROM users ORDER BY achternaam";
    } else if ($filterOption == "lastnameDESC") {
        $sql = "SELECT * FROM users ORDER BY achternaam DESC";
    } else if ($filterOption == "usernameASC") {
        $sql = "SELECT * FROM users ORDER BY gebruikersnaam";
    } else if ($filterOption == "usernameDESC") {
        $sql = "SELECT * FROM users ORDER BY gebruikersnaam DESC";
    } else if ($filterOption == "emailASC") {
        $sql = "SELECT * FROM users ORDER BY email";
    } else if ($filterOption == "emailDESC") {
        $sql = "SELECT * FROM users ORDER BY email DESC";
    }

    $result = mysqli_query($conn, $sql);
    $all_users = mysqli_fetch_all($result,  MYSQLI_ASSOC);
}

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
                        <th> User ID </th>
                        <th> Firstname </th>
                        <th> Prefixes </th>
                        <th> Lastname </th>
                        <th> Username </th>
                        <th> Email </th>
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
                            <td><?php echo $user['email'] ?></td>
                            <td><?php echo $user['geslacht'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </section>
    </main>
</body>