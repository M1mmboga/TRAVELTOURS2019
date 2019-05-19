<?php 

define("DBSERVER", "localhost");
define("DBUSER", "root");
define("DBPASSWORD", "");
define("DBNAME", "destinations");

	/**
	* 
	*/
	class DBConnection 
	{
		private $conn;
		
		public function DBConnect()
		{
			$this->conn = mysqli_connect(DBSERVER,DBUSER,DBPASSWORD,DBNAME) or die("Error: ".mysqli_error());
			return $this->conn;
		}

		public function closeDatabase()
		{
			return mysqli_close($this->conn);
		}
	}

?>