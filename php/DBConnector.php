<?php 

define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'destinations');
 // class to create a MYSQL DB Connection

	/**
	* 
	*/
	class DBConnector
	{
		private $conn;

		public function DBConnect()
		{
			$this->conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME) OR die("Error:".mysqli_connect_error());

			return $this->conn;
		}

		public function closeDB()
		{
			mysqli_close($this->conn);
		}
	}


?>