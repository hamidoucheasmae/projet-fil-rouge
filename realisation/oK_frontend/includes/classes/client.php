<?php
	class Client {

		private $con;
		private $firstname;

		public function __construct($con, $firstname) {
			$this->con = $con;
			$this->firstname = $firstname;
		}

		// public function getname() {
		// 	return $this->firstname;
		// }

		public function getEmail() {
			$query = mysqli_query($this->con, "SELECT email FROM clients WHERE firstname='$this->firstname'");
			$row = mysqli_fetch_array($query);
			return $row['email'];
		}

		public function getFirstAndLastName() {
			$query = mysqli_query($this->con, "SELECT concat(firstName, ' ', lastName) as 'firstname'  FROM clients WHERE firstname='$this->firstname'");
			$row = mysqli_fetch_array($query);
			return $row['firstname'];
		}
		public function getname() {
			$query = mysqli_query($this->con, "SELECT firstname FROM clients WHERE firstname='$this->firstname'");
			$row = mysqli_fetch_array($query);
			return $row['firstName'];
		}
		public function getpicture() {
			$query = mysqli_query($this->con, "SELECT picture FROM clients WHERE firstname='$this->firstname'");
			$row = mysqli_fetch_array($query);
			return $row['picture'];
		}

		

	}
?>