<?php 

function sanitizeFormPassword($inputText) {
	$inputText = strip_tags($inputText);
	return $inputText;
}

function sanitizeFormname($inputText) {
	$inputText = strip_tags($inputText);
	$inputText = str_replace(" ", "", $inputText);
	return $inputText;
}

function sanitizeFormString($inputText) {
	$inputText = strip_tags($inputText);
	$inputText = str_replace(" ", "", $inputText);
	$inputText = ucfirst(strtolower($inputText));
	return $inputText;
}


if(isset($_POST['registerButton'])) {
	//Register button was pressed
	$name = sanitizeFormname($_POST['name']);
	
	$lastName = sanitizeFormString($_POST['lastName']);
	$email = sanitizeFormString($_POST['email']);
	$email2 = sanitizeFormString($_POST['email2']);
	$password = sanitizeFormPassword($_POST['password']);
	$password2 = sanitizeFormPassword($_POST['password2']);

	$wasSuccessful = $account->register($name,  $lastName, $email, $email2, $password, $password2);

	if($wasSuccessful == true) {
		$_SESSION['userLoggedIn'] = $name;
		header("Location: index.php");
	}

}


?>