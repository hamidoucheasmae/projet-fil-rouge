<?php
if(isset($_POST['loginButton'])) {
	//Login button was pressed
	$email = $_POST['loginemail'];
	$password = $_POST['loginPassword'];

	$result = $account->login($email, $password);

	if($result == true) {
		$_SESSION['userLoggedIn'] = $email;
		header("Location: index.html");
	}

}
?>