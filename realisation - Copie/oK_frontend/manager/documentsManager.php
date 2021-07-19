<?php

require_once('../model/document.php');

class DocumentsManager  {
	// get document
	public function getList(){
		$dbh = new PDO("mysql:host=localhost;dbname=documents_manager","root","root");
		$stack = array();
		$req = 'SELECT * FROM documents ';
		$result = $dbh->query($req)->fetchAll();
		foreach ($result as $row){
			$item = new Document();
			$item->setid_document($row["id_document"]);	
			$item->setdocument_name($row["document_name"]);
			$item->setdate_expiration($row["date_expiration"]);
			$item->setetat($row["etat"]);
			array_push($stack, $item);
		}
		return $stack;
	}

//Add Document
public function add($document){
	$dbh = new PDO("mysql:host=localhost;dbname=documents_manager","root","root");
	
	$req = "INSERT INTO `documents`(`id_document`,`document_name`, `date_expiration`,`etat`) VALUES (:id_document,:document_name,:date_expiration,:etat)";

	$addDocumentQuery = $dbh ->prepare($req);
	$addDocumentQuery -> bindParam(":id_document",$document->getid_document(),PDO::PARAM_STR);
	$addDocumentQuery -> bindParam(":document_name",$document->getdocument_name(),PDO::PARAM_STR);	
	$addDocumentQuery -> bindParam(":date_expiration",$document->getdate_expiration(),PDO::PARAM_STR);
	$addDocumentQuery -> bindParam(":etat",$document->getetat(),PDO::PARAM_STR);
	$addDocumentQuery->execute();
}
		// delete document
		public function delete($id_document){
    	
			$dbh = new PDO("mysql:host=localhost;dbname=documents_manager","root","root");
	
			$req = "DELETE FROM documents WHERE id_document = $id_document";
			$deleteDocument= $dbh->prepare($req);
			$deleteDocument->execute();
		}


// update Document
public function update($document){
	$id = $document->getid_document();
	$dbh = new PDO("mysql:host=localhost;dbname=documents_manager","root","root");
	$req = "UPDATE documents SET document_name = :document_name,date_expiration = :date_expiration,etat = :etat WHERE id_document = $id";
	$updateOuvrierQuery = $dbh ->prepare($req);
	$updateOuvrierQuery -> bindParam(":document_name",$ouvrier->getNomOuvrier(),PDO::PARAM_STR);
	$updateOuvrierQuery -> bindParam(":date_expiration",$ouvrier->getNumCIN(),PDO::PARAM_STR);
	$updateOuvrierQuery -> bindParam(":etat",$ouvrier->getPrixHeure(),PDO::PARAM_STR);
	

	$updateOuvrierQuery->execute();		
	
        }
}
?>