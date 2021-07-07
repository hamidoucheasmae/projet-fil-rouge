<?php
class Product{
	private $_id;
	private $_Firstname;
	private $_Lastname;
	private $_Matricule;
	private $_Email;


	public function __construct($data) {
		$this->fill($data);
	}

	public function fill(array $data)
	{
		$this->setId ($data["id"]);
		$this->setFirst ($data["Firstname"]);
		$this->setLast ($data["Lastname"]);
		$this->setMatricule ($data["Matricule"]);
		$this->setEmail ($data["Email"]);

	}

		public function id() { return $this->_id; }
		public function Firstname() { return $this->_Firstname; }
		public function Lastname() { return $this->_Lastname; }
		public function Matricule() { return $this->_Matricule; }
		public function Email() { return $this->_Email; }


		public function setId($id){
			$this->_id = (int) $id;
		}

		public function setFirst($Firstname){
			if (is_string($Firstname) && strlen($Firstname) <= 255)
			{
					$this->_Firstname = $Firstname;
			}
		}
		public function setLast($Lastname){
			if (is_string($Lastname) && strlen($Lastname) <= 255)
			{
					$this->_Lastname = $Lastname;
			}
		}

		public function setMatricule($Matricule){
				$this->_Matricule = $Matricule;
		}

		public function setEmail($Email){
				if (is_string($Email) && strlen($Email)){
					$this->_Email = $Email;
				}
		}

}
?>