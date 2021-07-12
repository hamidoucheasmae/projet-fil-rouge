<?php 
$server = "sql203.epizy.com";
$username = "epiz_29120949";
$password = "n1hCnyli5eP";
$dbname = "epiz_29120949_documents_manager";

$conn = mysqli_connect($server,$username,$password,$dbname);
if (!$conn){
   die ("Connection Failed:".mysqli_connect_error());


}

?>