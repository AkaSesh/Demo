<?php
include ('./createconn.php');

    $checkbox1 = $_POST['diagnosis'];
    $chk = "";
    foreach ($checkbox1 as $chk1) {
        $chk .= $chk1 . ",";
    }
    $checkbox2 = $_POST['echo_for_vhd'];
    $chk1 = "";
    foreach ($checkbox2 as $chk2) {
        $chk1 .= $chk2 . ",";
    }
    $checkbox3 = $_POST['echo_for_conclusion'];
    $chk2 = "";
    foreach ($checkbox3 as $chk3) {
        $chk2 .= $chk3 . ",";
    }
    $checkbox4 = $_POST['echo_for_chd'];
    $chk3 = "";
    foreach ($checkbox4 as $chk4) {
        $chk3 .= $chk4 . ",";
    }
    $checkbox5 = $_POST['medications'];
    $chk4 = "";
    foreach ($checkbox5 as $chk5) {
        $chk4 .= $chk5 . ",";
    }
    $checkbox6 = $_POST['interventions_done'];
    $chk5 = "";
    foreach ($checkbox6 as $chk6) {
        $chk5 .= $chk6 . ",";
    }
    $checkbox7 = $_POST['interventions_recommended'];
    $chk6 = "";
    foreach ($checkbox7 as $chk7) {
        $chk6 .= $chk7 . ",";
    }
  


$Site_of_registration = $_POST['Site_of_registration'];
$fullname = $_POST['Fullname'];
$phonenumber1 = $_POST['Phone_number1'];
$nextofkinphonenumber1 = $_POST['Next_of_kin_phone_number1'];
$phonenumber2 = $_POST['Phone_number2'];
$gender = $_POST['Gender'];
$age = $_POST['Age'];
$otherdiagnosis = $_POST['Other_diagnosis'];
$dateofregistathospital= $_POST['Date_of_regist_at_hospital'];
$echoef = $_POST['Echo_ef'];
$pulmonaryhypertension = $_POST['Pulmonary_hypertension'];
$todaysdate = $_POST['Todays_date'];
$othersdrugspecify = $_POST['Others_drug_specify'];
$region = $_POST['Region'];
$specificvillage = $_POST['Specific_village'];
$adressclosest = $_POST['Adress_closest'];
$cardnumber = $_POST['Card_number'];
$uniquerhdnumber = $_POST['Unique_rhd_number'];
$housenumber = $_POST['House_number'];
$nyhaclass = $_POST['Nyha_class'];

if(isset($_FILES['Attach_echo_report']) && $_FILES['Attach_echo_report']['error'] === UPLOAD_ERR_OK){
    $fileTmpPath = $_FILES['Attach_echo_report']['tmp_name'];
    $fileName = $_FILES['Attach_echo_report']['name'];
    $fileTmpSize = $_FILES['Attach_echo_report']['size'];
    $fileTmpType = $_FILES['Attach_echo_report']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));

    $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

    $uploadFileDir = './uploadedFiles/';
    $dest_path = $uploadFileDir . $newFileName;

    if(move_uploaded_file($fileTmpPath, $dest_path)){
        $message ='File is successfully uploaded.';
        $Attach_echo_report = $dest_path;
    }
        else{
        $message ='File is not uploaded.';
        }
    
}

$conn = mysqli_connect('localhost:3306', 'root', '', 'Patient');



$query="INSERT INTO Record(Site_of_registration, Diagnosis, Fullname, Phone_number1, Next_of_kin_phone_number1, Phone_number2, Gender, Age, Other_diagnosis, Attach_echo_report, Date_of_regist_at_hospital, Echo_for_vhd, Echo_conclusion, Echo_ef, Pulmonary_hypertension, Echo_for_chd, Todays_date, Medications, Others_drug_specify, Region, Specific_village, Adress_closest, Card_number , Unique_rhd_number, House_number, Nyha_class, Interventions_done, Interventions_recomended)
   VALUES ( '$Site_of_registration', '$chk', '$fullname', '$phonenumber1' , '$nextofkinphonenumber1', '$phonenumber2', '$gender', '$age', '$otherdiagnosis', '$Attach_echo_report', '$dateofregistathospital', '$chk1', '$chk2', '$echoef', '$pulmonaryhypertension', '$chk3 ', '$todaysdate', '$chk4', '$othersdrugspecify', '$region', '$specificvillage', '$adressclosest', '$cardnumber', '$uniquerhdnumber', '$housenumber', '$nyhaclass', '$chk5', '$chk6')";
   $run = mysqli_query($conn, $query);

if($run){
    echo "Data inserted";
}





?>