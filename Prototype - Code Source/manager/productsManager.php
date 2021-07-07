<?php
require_once("manager.php");
require_once('../model/product.php');

class ProductsManager extends Manager {
	public function get($id){
		$req = "SELECT * FROM former WHERE id = $id";
		$row = $this->executerRequete($req, array($id))->fetch();
		return new Product($row);
	}
	
	public function getList(){
		$stack = array();
		$req = 'SELECT * FROM former';
		$result = $this->executerRequete($req)->fetchAll();
		foreach ($result as $row){
			$itm = new Product($row);
			array_push($stack, $itm);
		}
		return $stack;
	}
}
?>