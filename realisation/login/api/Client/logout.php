<?php
 session_start();
 session_destroy();
 header('Location: login.php');

	// session_start();
	// unset($_SESSION['email']);
	// unset($_SESSION['password']);
	// header('location:login.php');
	// die();
?>