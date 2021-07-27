<?php
class Document implements JsonSerializable {

	public function jsonSerialize()
    {
        return array(
             'id_document' => $this->_id_document,
			 'id_client' => $this->_id_client,
             'document_name' => $this->_document_name,
             'date_expiration' => $this->_date_expiration,
             'etat' => $this->_etat,
    	
        );
    }
	private $_id_document;
	private $_id_client;
	private $_document_name;
	private $_date_expiration;
	private $_etat;
	

	public function __construct() {
		
	}

		public function getid_document() { return $this->_id_document; }
		public function getid_client() { return $this->_id_client; }
		public function getdocument_name() { return $this->_document_name; }
		public function getdate_expiration() { return $this->_date_expiration; }
		public function getetat() { return $this->_etat; }
		


		public function setid_document($id_document){
			$this->_id_document = (int) $id_document;
		}



		public function setdocument_name($document_name){
					$this->_document_name = $document_name;
			}
			public function setid_client($id_client){
				$this->_id_client = $id_client;
		}
		
		public function setdate_expiration($date_expiration){	
					$this->_date_expiration = $date_expiration;
			}
		

		public function setetat($etat){
				$this->_etat = $etat;
		}



}
?>