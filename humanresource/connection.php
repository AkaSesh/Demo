<?php
class DBConnection{
      public $dbhost = 'localhost:3306';
      public $dbuser = 'root';
      public $dbpass = '';

   public function createconn(){
         $conn = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass);
		 if(! $conn ) {
				die('Could not connect: ' . mysqli_error($conn));
                      }
		else {
             return $conn;
		}
      }
}
?>