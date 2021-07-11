<?php
require_once '../manager/documentsManager.php';


$deleteDocumentManager = null;
$deleteDocumentManager =  new documentsManager(); 
$deleteDocumentQuery = $deletedocumentManager->delete($_POST["id"]);
?>
