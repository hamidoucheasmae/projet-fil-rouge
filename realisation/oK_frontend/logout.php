<?php
session_start();
unset($_SESSION['userLoggedIn']);
header("Location: register.php");
?>