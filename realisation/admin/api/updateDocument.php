<?php
require_once '../manager/documentsManager.php';

$document = new document;
// $document->setid_document($_POST["id_document"]);
$document->setdocument_name($_POST["document_name"]);
$document->setdate_expiration($_POST["date_expiration"]);
$document->setetat($_POST["etat"]);

$updatedocumentsManager = null;
$updatedocumentManager =  new documentsManager(); 
$updatedocumentQuery = $updatedocumentManager->update($document);
?>