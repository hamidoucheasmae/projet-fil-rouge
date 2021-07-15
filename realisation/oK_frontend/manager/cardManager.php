<?php

require_once('../model/document.php');

class DocumentsManager  {
	// get document
	public function getList(){
		$dbh = new PDO("mysql:host=localhost;dbname=documents_manager","root","solicode123");
		$stack = array();
		$req = 'SELECT COUNT(*) totaldocument FROM documents;';
      
		$result = $dbh->query($req)->fetchAll();
		foreach ($result as $row){
			$item = new Document($row);
			$item->setid($row["id"]);
			$item->setid_client($row["id"]);
			$item->setname($row["name"]);
			$item->setdate_expiration($row["date_expiration"]);
			$item->setetat($row["etat"]);
			array_push($stack, $item);
		}
		return $stack;
	}
}
    ?>