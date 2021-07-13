<?php 

 $link = mysqli_connect("localhost", "root", "", "insertion");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "DELETE FROM faculty";
$result = mysqli_query($link, $sql)
if(isset($_GET['delete'])){
   
   if ($result) {
   	    echo 'deleted!'
   } else {
   	echo "not deleted!";
   }
} echo ".";



?>