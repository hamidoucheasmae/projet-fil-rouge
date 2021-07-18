<?php
session_start();
require 'database.php';
if (!empty($_POST)) {
    $log = checkInput($_POST['email']);
    $pass = checkInput($_POST['pass']);

    $isSuccess = true;

    if(empty($log))
    {
        $isSuccess = false;
    }
    if(empty($pass))
    {
        $isSuccess = false;
    }
// On verifie si tous est bon
    if ($isSuccess){
        $passC = md5($pass);
        $db = Database::connect();
        // Requette Sql pour voir si l'utilisateur exist dans la bd
        $stat = $db->query("SELECT id_client,email,password FROM clients WHERE email='$log' AND password='$passC' ");
        // S'il existe
        if ($u = $stat->fetch()) {

           $_SESSION['id'] = $u['id_client'];
// On se connecte
           header("location:../site/");

        } else {
            // Sinon on le redirige

            header("location: ../index.php");
            $_SESSION['nan_loginerror'] = "Email ou mot de pass incorrecte";
        }
    }else{
        $_SESSION['nan_loginerror'] = "Merci de remplir correctement les champs svp!";
        header("location: ../exam-nan/login.php");
    }

}else{
    header("location: ../index.php");
}

function checkInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
