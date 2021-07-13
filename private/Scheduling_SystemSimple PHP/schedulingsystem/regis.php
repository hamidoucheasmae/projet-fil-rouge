<?php 
 
 $con = mysqli_connect ('localhost', 'root', '');
 
 if (!$con)
 {
	 echo 'not connected to server';
 }
 if (!mysqli_select_db($con, 'insertion'))
 {
	 echo 'database not selected';
 }
 
 $username = $_POST['username'];
 $password = $_POST['password'];
 
 
 $sql = "INSERT INTO admin (username, password) VALUES ('$username', '$password')";

 if (!mysqli_query ($con, $sql))
 {
	 echo 'not registered';
 }
 else 
 {
	 echo '<script type="text/javascript">
                      alert("Welcome! Your account has been created. please login to manage your schedules!");
                         location="index.php";
                           </script>';
 }


?>