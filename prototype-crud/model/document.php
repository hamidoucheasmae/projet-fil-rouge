<?php
class Document implements JsonSerializable {

	public function jsonSerialize()
    {
        return array(
             'id' => $this->_id,
             'name' => $this->_name,
             'date_expiration' => $this->_date_expiration,
             'etat' => $this->_etat,
           
			
        );
    }
	private $_id;
	private $_name;
	private $_date_expiration;
	private $_etat;
	

	public function __construct($data) {
		$this->array_fill($data);
	}

	public function array_fill( $data)
	{
		$this->setId ($data["id"]);
		$this->setname ($data["name"]);
		$this->setdate_expiration ($data["date_expiration"]);
		$this->setetat ($data["etat"]);
		
	}

		public function id() { return $this->_id; }
		public function name() { return $this->_name; }
		public function date_expiration() { return $this->_date_expiration; }
		public function etat() { return $this->_etat; }
		


		public function setId($id){
			$this->_id = (int) $id;
		}

		public function setname($name){
			if (is_string($name) && strlen($name) <= 255)
			{
					$this->_name = $name;
			}
		}
		public function setdate_expiration($date_expiration){
			if (is_string($date_expiration) && strlen($date_expiration) <= 255)
			{
					$this->_date_expiration = $date_expiration;
			}
		}

		public function setetat($etat){
				$this->_etat = $etat;
		}



}
?>