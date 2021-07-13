<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "header.php";
   include_once("header.php");

?>

<html>
<head>
<style>

body {
	background-image: url();
	background-color: white;
}
</body>
</style>
</head>

<body>
	<nav class="navbar navbar-default navbar-static-top">
	  <div class="container">
	  <h3>SCHEDULING</h3>
	  </div>
	</nav>
	
	<div class="content">
		<div class="form">
		<form class="form-horizontal" method="post" action="regis.php">
			<fieldset>

			<legend>Add Account Here</legend>

			<br><div class="form-group">
			  <label class="col-md-4 control-label" for="username">Username</label>  
			  <div class="col-md-5">
			  <input id="username" name="username" type="text" placeholder="" class="form-control input-md" required="">
				
			  </div>
			</div>

			
			<div class="form-group">
			  <label class="col-md-4 control-label" for="password">Password</label>
			  <div class="col-md-5">
				<input id="password" name="password" type="password" placeholder="" class="form-control input-md" required="">
				
			  </div>
			</div>
			
			<div class="form-group"  align="right">
			  <label class="col-md-4 control-label" for="login"></label>
			  <div class="col-md-5">
				<input type="submit" name="lgn" class="btn btn-success " value="Add">
			  </div>
			</div>
			</fieldset>
		</form>
		</div>
		<font color="grey">Already have an acount?</font> <a href="index.php">Login here </a>
		</div>
	</div>

</body>
</html>
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "footer.php";
   include_once("footer.php");
?>