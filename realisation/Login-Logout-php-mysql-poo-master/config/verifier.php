
<?php

if(!(isset($_SESSION['id_client'])) )
{
    header("location: ../index.php");
    exit;
}

?>