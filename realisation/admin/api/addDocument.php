<?php
require_once '../manager/documentsManager.php';

$document = new Document();
$document->setid_document($_POST["id_document"]);
// $document->setid_client($_POST["id_client"]);
$document->setdocument_name($_POST["document_name"]);
$document->setdate_expiration($_POST["date_expiration"]);

$document->setetat($_POST["etat"]);


$adddocumentManager = null;
$adddocumentManager =  new DocumentsManager(); 
$adddocumentQuery = $adddocumentManager->add($document);

?>