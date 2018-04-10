<?php 
	/**
	* Database Class
	*/
	class Database
	{
		public function dbKonekcioni()
		{
			$db = mysqli_connect('localhost', 'root', 'njeriop123!@#', 'familyFinance');

			if (mysqli_connect_errno($db)) {
			    return mysqli_connect_error();
			} else {
				return $db;
			}
		}
	}
 ?>