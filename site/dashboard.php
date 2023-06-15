<?php
include 'header.php';
?>

<?php


session_start();

if (!isset($_SESSION['isIngelogd'])) {
    header("location: inloggen.php");
    exit;
}

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