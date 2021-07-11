<?php

class Manager {
    protected $bdd;
    protected function executerRequete($sql, $params = null) {
        if ($params == null) {
            $resultat = $this->getBdd()->query($sql);
        }
        else {
            $resultat = $this->getBdd()->prepare($sql);
            $resultat->execute($params);
        }
        return $resultat;
    }
    protected function getBdd() {
        if ($this->bdd == null) {
            $this->bdd = new PDO('mysql:host=localhost;dbname=documents_manager',
                    'root', 'solicode123',
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        return $this->bdd;
    }

//Add document
public function add($document){
    $dbh = new PDO("mysql:host=localhost;dbname=documents_manager","root","solicode123");
    $req = "INSERT INTO `documents`(`id`,`name`, `date_expiration`,`etat`) VALUES (:id,:name,:date_expiration,:etat)";

    $adddocumentQuery = $dbh ->prepare($req);
    $adddocumentQuery -> bindParam(":id",$document->id(),PDO::PARAM_STR);	
    $adddocumentQuery -> bindParam(":name",$document->getName(),PDO::PARAM_STR);
    $adddocumentQuery -> bindParam(":date_expiration",$document->getdate_expiration(),PDO::PARAM_STR);
    $adddocumentQuery -> bindParam(":etat",$document->getetat(),PDO::PARAM_STR);
   
    $adddocumentQuery->execute();
}


}
?>