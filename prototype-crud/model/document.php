<?php
class Document implements JsonSerializable {

	public function jsonSerialize()
    {
        return array(
             'id' => $this->_id,
             'name' => $this->_name,
             'last_name' => $this->_last_name,
             'sexe' => $this->_sexe,
             'gmail' => $this->_gmail,
			
        );
    }
	private $_id;
	private $_name;
	private $_last_name;
	private $_sexe;
	private $_gmail;


	public function __construct($data) {
		$this->array_fill($data);
	}

	public function array_fill( $data)
	{
		$this->setId ($data["id"]);
		$this->setname ($data["name"]);
		$this->setlast_name ($data["last_name"]);
		$this->setsexe ($data["sexe"]);
		$this->setgmail ($data["gmail"]);

	}

		public function id() { return $this->_id; }
		public function name() { return $this->_name; }
		public function last_name() { return $this->_last_name; }
		public function sexe() { return $this->_sexe; }
		public function gmail() { return $this->_gmail; }


		public function setId($id){
			$this->_id = (int) $id;
		}

		public function setname($name){
			if (is_string($name) && strlen($name) <= 255)
			{
					$this->_name = $name;
			}
		}
		public function setlast_name($last_name){
			if (is_string($last_name) && strlen($last_name) <= 255)
			{
					$this->_last_name = $last_name;
			}
		}

		public function setsexe($sexe){
				$this->_sexe = $sexe;
		}

		public function setgmail($gmail){
				if (is_string($gmail) && strlen($gmail)){
					$this->_gmail = $gmail;
				}
		}

}
?>