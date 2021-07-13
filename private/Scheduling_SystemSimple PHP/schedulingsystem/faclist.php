<?php
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
th {
  text-align: center;
}
tr {
   height: 30px;
}
td {
    padding-top: 5px;
  padding-left: 20px; 
  padding-bottom: 5px;  
  height: 20px;
}


</body>
</style>
</head>
<body><br>
<div class="container">

    
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

                    $query = ("SELECT * FROM faculty");
                    $result = mysql_query($query) or die(mysql_error());
                    echo "<div class='container'><table width='' class='table table-bordered' border='1' >
                            <tr>
                                <th>Faculty</th>
                                <th>Designation</th>
                                 <th>Action</th>
                            </tr>";
                        while($row = mysql_fetch_array($result))
                        {
                        echo "<tr>";
                        echo "<td>" . $row['faculty_name'] . "</td>";
                        echo "<td>" . $row['designation'] . "</td>";
                        echo "<td><form class='form-horizontal' method='post' action='faclist.php'>
                        <input name='faculty_id' type='hidden' value='".$row['faculty_id']."';>
                        <input type='submit' class='btn btn-danger' name='delete' value='Delete'>
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
                      alert("row Successfuly Deleted");
                         location="list.php";
                           </script>';
    }
    if(isset($_POST['faculty_id']))
    {
    $faculty_id = mysql_real_escape_string($_POST['faculty_id']);
    $sql = mysql_query("DELETE FROM faculty WHERE faculty_id='$faculty_id'");
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
</div>
</div>
  </body>
  </html>
  
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "footer.php";
   include_once("footer.php");

?>
