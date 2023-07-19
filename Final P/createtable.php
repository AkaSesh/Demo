<?php
   $dbhost = 'localhost:3306';
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error($conn));
   }

    mysqli_select_db($conn, "Patient");
    
   $sql = "CREATE TABLE Record(
       ID int PRIMARY KEY AUTO_INCREMENT,
       Site_of_registration VARCHAR(1000) NOT NULL,
       Diagnosis varchar(10000),
       Fullname VARCHAR(50) NOT NULL,
       Phone_number1 INT,
       Next_of_kin_phone_number1 INT,
       Phone_number2 INT,
       Gender CHAR(1),
       Age INT,
       Other_diagnosis VARCHAR(50) NOT NULL,
       Attach_echo_report VARCHAR(50) NOT NULL,
       Date_of_regist_at_hospital VARCHAR(50) NOT NULL,
       Echo_for_vhd VARCHAR(50) NOT NULL,
       Echo_conclusion VARCHAR(50) NOT NULL,
       Echo_ef VARCHAR(50) NOT NULL,
       Pulmonary_hypertension VARCHAR(50) NOT NULL,
       Echo_for_chd VARCHAR(50) NOT NULL,
       Todays_date VARCHAR(50) NOT NULL,
       Medications VARCHAR(50) NOT NULL,
       Others_drug_specify VARCHAR(50) NOT NULL,
       Region VARCHAR(50) NOT NULL,
       Specific_village VARCHAR(50) NOT NULL,
       Adress_closest VARCHAR(50) NOT NULL,
       Card_number INT,
       Unique_rhd_number INT,
       House_number INT,
       Nyha_class VARCHAR(50) NOT NULL,
       Interventions_done VARCHAR(50) NOT NULL,
       Interventions_recomended VARCHAR(50) NOT NULL)";
      
      $retval = mysqli_query($conn, $sql);
      
   if(! $retval ) {
      die('Could not create Table: ' . mysqli_error($conn));
   }

   echo "Table created successfully\n";

?>