<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header($_SERVER["SERVER_PROTOCOL"] . " 405 Method Not Allowed", true, 405);
    include '405.php';
    exit;
}

session_start();

if (!isset($_SESSION['isIngelogd'])) {
    header("location: inloggen.php");
    exit;
}

?>

<?php
include 'header.php';
?>


<div class="dashbody">
    <h1 class="dashheader"> <?php echo "Welcome! " . $_SESSION['voornaam']; ?> </h1>
    <a href="homepage.php" class="dashButton"> HOME PAGE </a>
    <a href="logout.php" class="dashButton"> LOGOUT </a>
</div>
</body>

</html>

<?php
include 'footer.php';
?>