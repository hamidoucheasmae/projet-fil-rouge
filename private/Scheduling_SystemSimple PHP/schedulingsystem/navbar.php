<?php 
 include_once("header.php");
?>

<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php"><!--BUPC --> Scheduling System</a>
    </div>
    <div>
	
	
    <ul class="nav navbar-nav">
        <li><a href="home.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="addsubject.php"><span class="glyphicon glyphicon-plus-sign"></span> Subjects</a></li>
        <li><a href="addfaculty.php"><span class="glyphicon glyphicon-plus-sign"></span> Faculty</a></li> 
        <li><a href="addcourse.php"><span class="glyphicon glyphicon-plus-sign"></span> Course</a></li>
		<li><a href="addroom.php"><span class="glyphicon glyphicon-asterisk"></span> Room</a></li>
		<li><a href="addtime.php"><span class="glyphicon glyphicon-time"></span> Time</a></li>
        <li><a href="list.php"><span class="glyphicon glyphicon-list"></span> List</a></li>
        <li><a href="tablelist.php"><span class="glyphicon glyphicon-calendar"></span> Schedule</a></li>
		
    	</ul>
		<ul class="nav navbar-nav navbar-right">
		<li><a href="Index.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul></div>
  </div>
</nav>

</body>
</html>





