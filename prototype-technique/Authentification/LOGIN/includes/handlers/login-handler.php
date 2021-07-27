<?php
if(isset($_POST['loginButton'])) {
	//Login button was pressed
	$name = $_POST['loginname'];
	$password = $_POST['loginPassword'];

	$result = $account->login($name, $password);

	if($result == true) {
		$_SESSION['userLoggedIn'] = $name;
		header("Location: index.php");
	}

}
?>