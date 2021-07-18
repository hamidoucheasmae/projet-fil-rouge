<?php
    session_start();
    unset($_SESSION['id_client']);
    header("location: ../index.php");
    exit;


?>