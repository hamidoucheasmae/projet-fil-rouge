<?php
require_once '../manager/documentsManager.php';

$document = new Document();

$document->setdocument_name($_POST["document_name"]);
$document->setdate_expiration($_POST["date_expiration"]);
$document->setetat($_POST["etat"]);


$adddocumentManager = null;
$adddocumentManager =  new DocumentsManager(); 
$adddocumentQuery = $adddocumentManager->add($document);

?>