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
}
?>