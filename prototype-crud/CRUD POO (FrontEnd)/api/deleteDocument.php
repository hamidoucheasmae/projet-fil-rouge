<?php
require_once '../manager/documentsManager.php';


$deleteDocumentManager = null;
$deleteDocumentManager =  new documentsManager(); 
$deleteDocumentQuery = $deleteDocumentManager->delete($_POST["id"]);
?>
