<?php
include("includes/config.php");
include("../ok_frontend/model/client.php");

//session_destroy(); LOGOUT
if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = new Client ($con, $_SESSION['userLoggedIn']);
	$name = $userLoggedIn->getname();
	echo "<script>userLoggedIn = '$name';</script>";
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
	<div class="text-center">Want to Leave the Page? <br><a href="../../landing-page/logout.php">Logout</a></div>
</body>

</html>