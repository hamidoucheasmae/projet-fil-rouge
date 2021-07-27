<?php
// include database and object files
include_once '../config/database.php';
include_once '../objects/user.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare user object
$client = new Client($db);
// set ID property of client to be edited
$client->email = isset($_GET['email']) ? $_GET['email'] : die();
$client->password = base64_encode(isset($_GET['password']) ? $_GET['password'] : die());
// read the details of client to be edited
$stmt = $client->login();
if($stmt->rowCount() > 0){
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
   
    header('location:../../../admin/dashboard3.php');
  
}
else{

    header('location:../../../landing-page/index.html');
 
}

?>