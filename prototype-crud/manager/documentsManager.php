<?php
require_once("manager.php");
require_once('../model/document.php');

class DocumentsManager  {
	// public function get($id){
	// 	$req = "SELECT * FROM documents WHERE id = $id";
	// 	$row = $this->executerRequete($req, array($id))->fetch();
	// 	return new document($row);
	// }
	
	public function getList(){
		$dbh = new PDO("mysql:host=localhost;dbname=documents_manager","root","solicode123");
		$stack = array();
		$req = 'SELECT * FROM documents';
		$result = $dbh->query($req)->fetchAll();
		foreach ($result as $row){
			$item = new document($row);
			$item->setname($row["name"]);
			$item->setdate_expiration($row["date_expiration"]);
			$item->setetat($row["etat"]);
			array_push($stack, $item);
		}
		return $stack;
	}

//Add Document
public function add($document){
	$dbh = new PDO("mysql:host=localhost;dbname=documents_manager","root","solicode123");
	$req = "INSERT INTO `documents`(`id`,`name`, `date_expiration`,`etat`) VALUES (:id,:name,:date_expiration,:etat)";

	$addDocumentQuery = $dbh ->prepare($req);
	$addDocumentQuery -> bindParam(":id",$document->getid(),PDO::PARAM_STR);	
	$addDocumentQuery -> bindParam(":name",$document->getname(),PDO::PARAM_STR);
	$addDocumentQuery -> bindParam(":date_expiration",$document->getdate_expiration(),PDO::PARAM_STR);
	$addDocumentQuery -> bindParam(":etat",$document->getetat(),PDO::PARAM_STR);
	$addDocumentQuery->execute();
}



}
?>