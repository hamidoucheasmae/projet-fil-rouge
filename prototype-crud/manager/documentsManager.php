<?php
require_once("manager.php");
require_once('../model/document.php');

class DocumentsManager extends Manager {
	public function get($id){
		$req = "SELECT * FROM documents WHERE id = $id";
		$row = $this->executerRequete($req, array($id))->fetch();
		return new document($row);
	}
	
	public function getList(){
		$stack = array();
		$req = 'SELECT * FROM documents';
		$result = $this->executerRequete($req)->fetchAll();
		foreach ($result as $row){
			$itm = new document($row);
			array_push($stack, $itm);
		}
		return $stack;
	}
}
?>