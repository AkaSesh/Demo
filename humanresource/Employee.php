<?php
include ('connection.php');
class Employee{
	private $fname ;
    private $mname;
    private $lname;
    private $age;
    private $field_of_study;
    private $department;
    private $salary;
    private $gender;
    private $address;
    private $email;
    private $phone_number;
    
	public function __construct( $firstname, $middlename, $lastname, $age, $field_of_study, $department,$salary, $gender, $address, $email, $phone_number ) {
			$this->fname = $firstname;
            $this->mname = $middlename;
			$this->lname = $lastname;
			$this->age = $age;
            $this->field_of_study = $field_of_study;
            $this->department = $department;
            $this->salary = $salary;
            $this->gender = $gender;
            $this->address= $address;
            $this->email= $email;
            $this->phone_number = $phone_number;
                    }

  public function insertEmployee(){
    $db = new DBConnection;
    $conn = $db->createconn();
		 
		 $sql = 'INSERT INTO Employee(Id, Firstname, Middlename, Lastname, Age, Field_of_study, Department, Salary, Gender, Address, Email, Phone_number) 
         VALUES ("", "'.$this->fname.'", "' .$this->mname .'", "'. $this->lname.'",'. $this->age.', "' .$this->field_of_study. '", "' .$this->department. '", "' .$this->salary. '", "' .$this->gender. '", "' .$this->address. '", "' .$this->email. '", "' .$this->phone_number. '");';
		 
         mysqli_select_db($conn, 'Employee');
         
         $retval = mysqli_query( $conn, $sql);
if(! $retval ) {
      die('Could Insert Data: ' . mysqli_error($conn));
   }
   
   echo "Data Inserted successfully\n";

      }

}
?>