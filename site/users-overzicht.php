<?php

require 'database.php';

//de sql query
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
$all_users = mysqli_fetch_all($result, MYSQLI_ASSOC);

$sql = "SELECT DISTINCT COUNT(id) FROM users";
$result = mysqli_query($conn, $sql);
$aantal_gebruikers = mysqli_fetch_array($result);

$sql = "SELECT DISTINCT COUNT(id) FROM users";
$result = mysqli_query($conn, $sql);
$gebruiker = mysqli_fetch_array($result);
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


    <div class="shadow">
        <header>

            <div class="logo">
                <a href="homepage.php"><img src="images/Logo1-removebg-preview.png" alt="LOGO" class="logoImg"></a>
            </div>
            <nav>
                <ul class="ulnav">

                    <li class="linav"> <a href="adressen.php"> Add Adresses </a></li>
                    <li class="linav"><a href="addresses-overzicht.php"> Addresses</a></li>
                    <li class="linav"><a href="regis.php"> Add Users </a></li>
                    <li class="linav"><a href="users-overzicht.php"> Users </a></li>
                </ul>
            </nav>

            <div class="loginHeader">
                <a href="logout.php" class="signInBtn"> Log out </a>
            </div>

        </header>
    </div>


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

        <div class="table-container">
            <table class="stats-table">
                <thead>
                    <tr>
                        <th>Aantal Gebruikers</th>
                        <th>Admin</th>
                        <th>Manager</th>
                        <th>Regular</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $aantal_gebruikers[0]; ?></td>
                        <td>5</td>
                        <td>15</td>
                        <td>80</td>
                    </tr>
                </tbody>
            </table>
        </div>
</body>

</html>
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
<?php require 'footer.php' ?>

</body>

</html>