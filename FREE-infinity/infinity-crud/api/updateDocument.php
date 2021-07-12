<?php
require_once '../manager/documentsManager.php';

$document = new document();
$document->setname($_POST["name"]);
$document->setdate_expiration($_POST["date_expiration"]);
$document->setetat($_POST["etat"]);

$updatedocumentsManager = null;
$updatedocumentManager =  new documentsManager(); 
$updatedocumentQuery = $updatedocumentManager->update($document);
?>