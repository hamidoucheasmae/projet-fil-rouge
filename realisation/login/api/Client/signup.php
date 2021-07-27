<?php
 
// get database connection
include_once '../config/database.php';
 
// instantiate user object
include_once '../objects/user.php';
 
$database = new Database();
$db = $database->getConnection();
 
$client = new Client($db);
 
// set client property values
$client->email = $_POST['email'];
$client->password = base64_encode($_POST['password']);

$client->created = date('Y-m-d H:i:s');
 
// create the client
if($client->signup()){
    header('location:../../../admin/dashboard3.php');
}
else{
 
        echo "email already exists!";
     
}
print_r(json_encode($client_arr));
?>