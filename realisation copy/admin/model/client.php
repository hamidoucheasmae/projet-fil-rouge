<?php
	class Client {

		private $con;
		private $name;

		public function __construct($con, $name) {
			$this->con = $con;
			$this->name = $name;
		}

		public function getname() {
			return $this->name;
		}

		public function getEmail() {
			$query = mysqli_query($this->con, "SELECT email FROM clients WHERE name='$this->name'");
			$row = mysqli_fetch_array($query);
			return $row['email'];
		}

		public function getFirstAndLastName() {
			$query = mysqli_query($this->con, "SELECT concat(firstName, ' ', lastName) as 'name'  FROM clients WHERE name='$this->name'");
			$row = mysqli_fetch_array($query);
			return $row['name'];
		}
		public function getnJJJJame() {
			$query = mysqli_query($this->con, "SELECT name FROM clients WHERE name='$this->name'");
			$row = mysqli_fetch_array($query);
			return $row['firstName'];
		}
		public function getprofilePic() {
			$query = mysqli_query($this->con, "SELECT profilePic FROM clients WHERE name='$this->name'");
			$row = mysqli_fetch_array($query);
			return $row['profilePic'];
		}
	}
?>