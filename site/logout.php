<?php

session_start();

unset($_SESSION);
session_destroy();

header("location: homepage.php");
exit;