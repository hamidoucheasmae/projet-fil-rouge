<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "header.php";
   include_once("header.php");
   include_once("navbar.php");
?>
<html>
<head>
<style>

body {
	background-image: url();
	background-color: white;
}
tr:hover,tr.alt:hover
{
    background: #f7dcdf;
}

</body>
</style>
</head>
<body>

	<div id="content">
		<div id="form">
		
			<fieldset>
            <legend>Schedules</legend>
<body>
    <?php
     echo "<tr>
            <td>";
               // your database connection
			   $host       = "localhost"; 
               $username   = "root"; 
               $password   = "";
               $database   = "insertion"; 
			   
               // select database
			   mysql_connect($host,$username,$password) or die(mysql_error()); 
               mysql_select_db($database) or die(mysql_error()); 

                    $query = ("SELECT * FROM data");
                    $result = mysql_query($query) or die(mysql_error());
                    echo "<table class='table' width='99.120%' border='0' >
                            <tr class='table'>
                                <th>name</th>
                                <th>course</th>
                                <th>subject</th>
							             	    <th>room</th>
						                		<th>start time</th>
								                <th>end time</th>
                                <th>action</th>
                            </tr>";
                        while($row = mysql_fetch_array($result))
                        {
                        echo "<tr>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['subject'] . "</td>";
						            echo "<td>" . $row['room'] . "</td>";
					            	echo "<td>" . $row['startTime'] . "</td>";
					            	echo "<td>" . $row['endTime'] . "</td>";
                        echo "<td><form method=post action=tb.php>
                        <input name=id type=hidden value='".$row['id']."';>
                        <input type=submit name=submit value=Delete>
                        </form></td>";
                        echo "</tr>";
                        }
                    echo "</table>";

            echo "</td>           
        </tr>";

       // delete record
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
		echo '<script type="text/javascript">
                      alert("Schedule Successfuly Deleted");
                         location="tb.php";
                           </script>';
    }
    if(isset($_POST['id']))
    {
    $id = mysql_real_escape_string($_POST['id']);
    $sql = mysql_query("DELETE FROM data WHERE id='$id'");
    if(!$sql)
    {
        echo ("Could not delete rows" .mysql_error());
    }
	
    }
    ?>
</fieldset>
</form>
</div>
</div>
<div align="center">
<br>
<a href="Insertion.php"><input type='submit' class='' name='delete' value='New'></a>
<a href="Index.php"><input type='submit' class='' name='delete' value='Logout'></a>
</div>
	</body>
	</html>
	
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "footer.php";
   include_once("footer.php");

?>
