<?php
session_start();

  $username = $_POST['username'];
  $password = $_POST['password'];
 
  if ($username&&$password)
  {
	 $connect = mysql_connect("localhost", "root", "")or die("couldn't connect to the database!");
	 mysql_select_db("insertion") or die ("couldn't find database!");
	 
	 $query = mysql_query("SELECT * FROM admin WHERE username='$username'");
	 
	 $numrows = mysql_num_rows($query);
	 
	 if($numrows!==0)
	 {
		 while($row = mysql_fetch_assoc($query))
		 {
			 $dbusername = $row['username'];
			 $dbpassword = $row['password'];
		 }
		 if ($username==$dbusername&&($password)==$dbpassword)
		 {
			  echo '<script type="text/javascript">
                      alert("Welcome User!");
                         location="home.php";
                           </script>';
			 $_SESSION['username'] = $username;
		 }
		 else
			 echo '<script type="text/javascript">
                      alert("Wrong Password!");
                         location="index.php";
                           </script>';
	 }	 
	 else
         die('<script type="text/javascript">
                      alert("That uder dont exist!");
                         location="index.php";
                           </script>');		 
	  
  }
  else 
	  die('<script type="text/javascript">
                      alert("Please enter a username and password!");
                         location="tb.php";
                           </script>');
  
	  	 
?>
