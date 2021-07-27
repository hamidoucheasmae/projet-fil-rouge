<?php
include("includes/config.php");

//session_destroy(); LOGOUT

if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
}
else {
	header("Location: register.php");
}

?>

<html>
<head>
	<title>Welcome !</title>
</head>

<body>
	Hello!
	<div class="text-center">Want to Leave the Page? <br><a href="../includes/handlers/logout.php">Logout</a></div>
</body>

</html>