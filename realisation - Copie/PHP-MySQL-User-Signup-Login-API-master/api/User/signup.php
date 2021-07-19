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
$client->lastname = $_POST['lastname'];
$client->created = date('Y-m-d H:i:s');
 
// create the client
if($client->signup()){
    $client_arr=array(
        "status" => true,
        "message" => "Successfully Signup!",
        "id_client" => $client->id_client,
        "lastname" => $client->lastname,
        "email" => $client->email
    );
}
else{
    $client_arr=array(
        "status" => false,
        "message" => "email already exists!"
    );
}
print_r(json_encode($client_arr));
?>