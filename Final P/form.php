<!DOCTYPE html>

<html>
<?php 
ob_start();
session_start();
$_SESSION['user'] = "username";
?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="scripts.js"></script>

<link rel="stylesheet" href="style.css">

<title>Patient Registration system</title>
<style>
    .column {
        flex: 33.33%;
        margin: 5px;
        text-align: center;
    }
    .container {
        display: flex;
    }
</style>
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color:lightgray; color:blue">

<nav class="navbar navbar-inverse">
    <div style="background-color:darkblue;" class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" style="color:white;" href="http://localhost/Final P/index.php">INTAKE FORM</a>
        </div>
        <a href="http://localhost/Final P/logout.php"  class="btn btn-default navbar-btn btn-lg">Log out</a>  
    </div>
</nav>
<form name="Intake_form" action="add_record.php" method= "POST" enctype="multipart/form-data">
    <div class="container">
  <div class="column">

     <div class="col-xs-10">
         <label for="fullname">Full Name:</label>
          <input type="text" name="Fullname" class="form-control" id="Fullname">
    </div>
</br>
    <div class="col-xs-8">
            <label for="echoforvhd">Site of registration:</label>
            <select style="color:blue" class="form-control input-sm" name="Site_of_registration" id="Site_of_registration">
                <option>Tikur Anbessa</option>
                <option>Ayder</option>
                <option>St paul</option>
                <option>St peter</option>
                <option>Hawassa</option>
                <option>Bahr dar</option>
                <option>Jimma</option>
                <option>Harar</option>
                <option>CCE</option>
                <option>2MH</option>
              </select>
</div>
</br>
    <div class="col-xs-9">
         <label for="phonenumber1">1st Telephone Number:</label>
          <input type="tel" name="Phone_number1" class="form-control" id="Phone_number1">
    </div>
    </br>
    <div class="col-xs-9">
         <label for="nextofkinphonenumber1">Next of Kin 1st tel num:</label>
          <input type="tel" name="Next_of_kin_phone_number1" class="form-control" id="Next_of_kin_phone_number1">
    </div>
    </br>
    <div class="col-xs-10">
         <label for="phonenumber2">2nd Telephone Number:</label>
          <input type="tel" name="Phone_number2" class="form-control" id="Phone_number2">
    </div>
    </br>
    <div class="col-xs-10">
<label>   
Gender :  
</label>
      <label><input type="radio" name="Gender" value="M">Male</label>
      <label><input type="radio" name="Gender" value="F">Female</label>
    </div>
    </br>
    <div class="col-xs-10"><label> - Age</label>
    <input type="number" class="col-xs-4" name="Age" id="Age">
  </div> 
  </br>
  <div class="col-xs-10">
                        <div class="icon-boxes position-relative">
                        <input type="button" style="background-color: darkblue;
  border-radius: 25%;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;" onclick="clickMe()" value="Diagnosis" required>
                        
                    
                            <div class="container position-relative">
                                <div class="row row-cols-2 gy-4 mt-5" style="align-items: center;">
                                    <div class="diagnosis" id="diagnosis" style="font-size: 12px; display:none;">

                                    <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="diagnosis[]" value="CRVHD"><label for="CRVHD">CRVHD</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->

                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="diagnosis[]" value="Dege VHD"><label for="Dege VHD">Dege VHD</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->

                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="diagnosis[]" value="MVP"><label for="MVP">MVP</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->

                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="diagnosis[]" value="Bicuspid AV"><label for="Bicuspid Av">Bicuspid AV</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->
                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="diagnosis[]" value="MV cleft"><label for="MV cleft">MV cleft</label>
                                            </div>
                                        </div>
                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="diagnosis[]" value="HHD"><label for="HHD">HHD</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->

                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="diagnosis[]" value="Ansina"><label for="Ansina">Ansina</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->

                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="diagnosis[]" value="Post MI"><label for="Post MI">Post MI</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->

                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="diagnosis[]" value="Isch Cardio"><label for="Isch Cardio">Isch Cardio</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->
                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="diagnosis[]" value="DCMP"><label for="DCMP">DCMP</label>
                                            </div>
                                        </div>
                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="diagnosis[]" value="HCMP"><label for="HCMP">HCMP</label>
                                            </div>
                                        </div>
                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="diagnosis[]" value="Res CMP"><label for="Res CMP">Res CMP</label>
                                            </div>
                                        </div>
                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="diagnosis[]" value="Cor Pulomonale"><label for="Cor Pulomonale">Cor Pulomonale</label>
                                            </div>
                                        </div>
                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="diagnosis[]" value="Prim Pul HTN"><label for="Prim Pul HTN">Prim Pul HTN</label>
                                            </div>
                                        </div>
                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="diagnosis[]" value="ASD"><label for="ASD">ASD</label>
                                            </div>
                                        </div>
                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="diagnosis[]" value="VSD"><label for="VSD">VSD</label>
                                            </div>
                                        </div>
                                        <input type="button" value="ok"  onClick='clickMe()' required>
                                        <input type="reset" value="cancel">
                                        </div>

                                </div>
                            </div> 
         <script>
                function clickMe() {
                    var text = document.getElementById("diagnosis");
                    if (!text.style.display) {
                        text.style.display = "none";
                    }
                    if (text.style.display === "none") {
                        text.style.display = "block";
                    } else {
                        text.style.display = "none";
                    }
                }
            </script>
                        </div>

                    </div>
                    </br>
                    <div class="col-xs-10">
         <label for="otherdiagnosis">other diagnosis:</label>
          <input type="text" name="Other_diagnosis" class="form-control" id="Other_diagnosis" required>
    </div>
    </br>
    <div style="col-xs-10">
                    <label for="Attach_echo_report">Attach echo report</label> 
                    <input type="file" name="Attach_echo_report" id="Attach_echo_report">
                </div>
                </br>
  </div>  
            
  <div class="column">

    <div class="col-xs-10">
         <label for="todaysdate">Todays date:</label>
          <input type="date" style="color:blue" name="Todays_date" class="form-control" id="Todays_date" required>
    </div>
    </br>
    <div class="col-xs-8">
          <label for="dateofregistathospital">Date of Regist at hospital:</label>
          <input type="date" style="color:blue" name="Date_of_regist_at_hospital" class="form-control" id="Date_of_regist_at_hospital">
    </div>
    </br>
            <div class="col-xs-10">
                        <div class="icon-boxes position-relative">
                        <input type="button" style="background-color: darkblue;
  border-radius: 25%;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;" onclick="clickMe1()" value="Echo for VHD">
            
                        
                    </button>
                            <div class="container position-relative">
                                <div class="row row-cols-2 gy-4 mt-5" style="align-items: center;">
                                    <div class="Echo_for_vhd" id="echoforvhd" style="font-size: 12px; display:none;">

                                    <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="echo_for_vhd[]" value="MR Severe"><label for="MR Severe">MR Severe</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->

                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="echo_for_vhd[]" value="MR Moderate"><label for="MR Moderate">MR Moderate</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->

                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="echo_for_vhd[]" value="MR Mild"><label for="MR Mild">MR Mild</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->

                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="echo_for_vhd[]" value="MS very Severe"><label for="MS very Severe">MS very Severe</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->
                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="echo_for_vhd[]" value="MS Severe"><label for="MS Severe">MS Severe</label>
                                            </div>
                                        </div>
                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="echo_for_vhd[]" value="MS Mild"><label for="MS Mild">MS Mild</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->

                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="echo_for_vhd[]" value="AR Severe"><label for="AR Severe">AR Severe</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->

                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="echo_for_vhd[]" value="AR Moderate"><label for="AR Moderate">AR Moderate</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->

                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="echo_for_vhd[]" value="AR Mild"><label for="AR Mild">AR Mild</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->
                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="echo_for_vhd[]" value="AS Severe"><label for="AS Severe">AS Severe</label>
                                            </div>
                                        </div>
                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="echo_for_vhd[]" value="AS Moderate"><label for="AS Moderate">AS Moderate</label>
                                            </div>
                                        </div>
                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="echo_for_vhd[]" value="AS Mild"><label for="AS Mild">AS Mild</label>
                                            </div>
                                        </div>
                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="echo_for_vhd[]" value="TR Severe"><label for="TR Severe">TR Severe</label>
                                            </div>
                                        </div>
                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="echo_for_vhd[]" value="TR Moderate"><label for="TR Moderate">TR Moderate</label>
                                            </div>
                                        </div>
                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="echo_for_vhd[]" value="TR Mild"><label for="TR Mild">TR Mild</label>
                                            </div>
                                        </div>
                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="echo_for_vhd[]" value="TS Severe"><label for="TS Severe">TS Severe</label>
                                            </div>
                                        </div>
                                        <input type="button" value="ok"  onClick='clickMe1()'>
                                        <input type="reset" value="cancel">
                                        </div>
                                    </div>
                                    </div> 
         <script>
                function clickMe1() {
                    var text = document.getElementById("echoforvhd");
                    if (!text.style.display) {
                        text.style.display = "none";
                    }
                    if (text.style.display === "none") {
                        text.style.display = "block";
                      } else {
                        text.style.display = "none";
                        opacity: 1;

                    }
                }
            </script>
           
                        </div>

                    </div>
                    </br>
                    <div class="col-xs-10">
                        <div class="icon-boxes position-relative">
            <input type="button" style="background-color: darkblue;
  border-radius: 25%;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;" onclick="clickMe2()" value="Echo for conclusion">                        
                    
                            <div class="container position-relative">
                                <div class="row row-cols-2 gy-4 mt-5" style="align-items: center;">
                                    <div class="Echo_for_conclusion" id="echoforconclusion" style="font-size: 12px; display:none;">

                                    <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="echo_for_conclusion[]" value="CRVHD"><label for="CRVHD">CRVHD</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->

                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="echo_for_conclusion[]" value="Ischemic Heart Disease"><label for="Ischemic Heart Disease">Ischemic Heart Disease</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->

                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="echo_for_conclusion[]" value="Degenarative Valvular Disease"><label for="Degenarative Valvular Disease">Degenarative Valvular Disease</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->

                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="echo_for_conclusion[]" value="Concentric LVH"><label for="Concentric LVH">Concentric LVH</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->
                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="echo_for_conclusion[]" value="Diastolic Dysfunction"><label for="Diastolic Dysfunction">Diastolic Dysfunction</label>
                                            </div>
                                        </div>
                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="echo_for_conclusion[]" value="DCMP with systolic dysfunction"><label for="DCMP with systolic dysfunction">DCMP with systolic dysfunction</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->

                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="echo_for_conclusion[]" value="Pericardia effusion"><label for="Pericardia effusion">Pericardia effusion</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->

                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="echo_for_conclusion[]" value="Congential Heart Disease(specific)"><label for="Congential Heart Disease(specific)">Congential Heart Disease(specific)</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->

                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="echo_for_conclusion[]" value="Cor pulomonale"><label for="Cor pulomonale">Cor pulomonale</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->
                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="echo_for_conclusion[]" value="Pulmonary Hypertension"><label for="Pulmonary Hypertension">Pulmonary Hypertension</label>
                                            </div>
                                        </div>
                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="echo_for_conclusion[]" value="Other(specify)"><label for="Other(specify)">Other(specify)</label>
                                            </div>
                                        </div>
                                        <input type="button" value="ok"  onClick='clickMe2()'>
                                        <input type="reset" value="cancel">
                                        </div>
                                </div>
                            </div> 
         <script>
                function clickMe2() {
                    var text = document.getElementById("echoforconclusion");
                    if (!text.style.display) {
                        text.style.display = "none";
                    }
                    if (text.style.display === "none") {
                        text.style.display = "block";
                    } else {
                        text.style.display = "none";
                    }
                }
            </script>
                        </div>

                    </div>
                    </br>
<div class="col-xs-8">
         <label for="echoef">Echo EF:</label>
          <input type="text" name="Echo_ef" class="form-control" id="Echo_ef">
    </div>
    </br>
    <div class="col-xs-8">
            <label for="pulmonaryhypertension">Pulmonary Hypertension:</label>
            <select style="color:blue" class="form-control input-sm" name="Pulmonary_hypertension" id="Pulmonary_hypertension">
                <option>Severe</option>
                <option>Moderate</option>
                <option>Mild</option>
                <option>Not given</option>
              </select>
</div>
</br>
<div class="col-xs-10">
                        <div class="icon-boxes position-relative">
            <input type="button" style="background-color: darkblue;
  border-radius: 25%;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;" onclick="clickMe3()" value="Echo for CHD">                        
                    
                            <div class="container position-relative">
                                <div class="row row-cols-2 gy-4 mt-5" style="align-items: center;">
                                    <div class="Echo_for_chd" id="echoforchd" style="font-size: 12px; display:none;">

                                    <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="echo_for_chd[]" value="VSD"><label for="VSD">VSD</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->

                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="echo_for_chd[]" value="ASD"><label for="ASD">ASD</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->

                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="echo_for_chd[]" value="PDA"><label for="PDA">PDA</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->

                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="echo_for_chd[]" value="TOF"><label for="TOF">TOF</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->
                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="echo_for_chd[]" value="AV cushion defect"><label for="AV cushion defect">AV cushion defect</label>
                                            </div>
                                        </div>
                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="echo_for_chd[]" value="MVP"><label for="MVP">MVP</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->

                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="echo_for_chd[]" value="Bicuspid Aortic Valve"><label for="Bicuspid Aortic Valve">Bicuspid Aortic Valve</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->

                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="echo_for_chd[]" value="COA"><label for="COA">COA</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->

                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="echo_for_chd[]" value="Ebstein Anomaly"><label for="Ebstein Anomaly">Ebstein Anomaly</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->
                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="echo_for_chd[]" value="Hypoplastic Chamber"><label for="Hypoplastic Chamber">Hypoplastic Chamber</label>
                                            </div>
                                        </div>
                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="echo_for_chd[]" value="Aorto Pulmonary Window"><label for="Aorto Pulmonary Window">Aorto Pulmonary Window</label>
                                            </div>
                                        </div>
                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="echo_for_chd[]" value="Aortic Aneurism"><label for="Aortic Aneurism">Aortic Aneurism</label>
                                            </div>
                                        </div>
                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="echo_for_chd[]" value="Valve attresia"><label for="Valve attresia">Valve attresia</label>
                                            </div>
                                        </div>
                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="echo_for_chd[]" value="Other"><label for="Other">Other</label>
                                            </div>
                                        </div>
                                        <input type="button" value="ok"  onClick='clickMe3()'>
                                        <input type="reset" value="cancel">
                                        </div>
                                </div>
                            </div> 
         <script>
                function clickMe3() {
                    var text = document.getElementById("echoforchd");
                    if (!text.style.display) {
                        text.style.display = "none";
                    }
                    if (text.style.display === "none") {
                        text.style.display = "block";
                    } else {
                        text.style.display = "none";
                    }
                }
            </script>
                        </div>

                    </div>
                    </br>
                    <div class="col-xs-10">
                        <div class="icon-boxes position-relative">
            <input type="button" style="background-color: darkblue;
  border-radius: 25%;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;" onclick="clickMe4()" value="Medications">                        
                    
                            <div class="container position-relative">
                                <div class="row row-cols-2 gy-4 mt-5" style="align-items: center;">
                                    <div class="Medications" id="medications" style="font-size: 12px; display:none;">

                                    <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="medications[]" value="Diuretics"><label for="Diuretics">Diuretics</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->

                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="medications[]" value="Digoxin"><label for="Digoxin">Digoxin</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->

                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="medications[]" value="Benz pencillin"><label for="Benz pencillin">Benz pencillin</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->

                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="medications[]" value="Warfarin"><label for="Warfarin">Warfarin</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->
                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="medications[]" value="Asprin"><label for="Asprin">Asprin</label>
                                            </div>
                                        </div>
                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="medications[]" value="ACE inhibitors"><label for="ACE inhibitors">ACE inhibitors</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->

                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="medications[]" value="B blocker"><label for="B blocker">B blocker</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->

                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="medications[]" value="ARBS"><label for="ARBS">ARBS</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->

                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="medications[]" value="Statin"><label for="Statin">Statin</label>
                                            </div>
                                        </div>
                                        <input type="button" value="ok"  onClick='clickMe4()'>
                                        <input type="reset" value="cancel">
                                        </div>
                                </div>
                            </div> 
         <script>
                function clickMe4() {
                    var text = document.getElementById("medications");
                    if (!text.style.display) {
                        text.style.display = "none";
                    }
                    if (text.style.display === "none") {
                        text.style.display = "block";
                    } else {
                        text.style.display = "none";
                    }
                }
            </script>
                        </div>

                    </div>
                    </br>

<div class="col-xs-8">
         <label for="othersdrugspecify">Other drugs(specify):</label>
          <input type="text" name="Others_drug_specify" class="form-control" id="Others_drug_specify">
    </div>
            </br>
            </br>
            <input type="reset" class="btn btn-warning" value="Clear all">

  </div>
  <div class="column">
  <div class="col-xs-20">
            <label for="medications">Region:</label>
            <select style="color:blue" class="form-control input-sm" name="Region" id="Region">
                <option>Tigray</option>
                <option>Afar</option>
                <option>Oromiya</option>
                <option>Somali</option>
                <option>SNNPR</option>
                <option>Sidama</option>
                <option>Benshangul</option>
                <option>Gambela</option>
                <option>Harari</option>
              </select>
</div>
</br>
<div class="col-xs-20">
         <label for="Specific_village">Specific village:</label>
          <input type="text" name="Specific_village" class="form-control" id="Specific_village">
    </div>
    </br>
    <div class="col-xs-20">
         <label for="Adress_closest">Address 2(closest):</label>
          <textarea rows="5" cols="5" name="Adress_closest" class="form-control" id="Adress_closest"></textarea>
    </div>
    </br>
    <div class="col-xs-20">
         <label for="Card_number">Card Number:</label>
          <input type="number" name="Card_number" class="form-control" id="Card_number">
    </div>
    </br>
    <div class="col-xs-20">
         <label for="Unique_rhd_number">Unique RHD Number:</label>
          <input type="number" name="Unique_rhd_number" class="form-control" id="Unique_rhd_number">
    </div>
    </br>
    <div class="col-xs-20">
         <label for="House_number">House Number:</label>
          <input type="number" name="House_number" class="form-control" id="House_number">
    </div>
    </br>

          <div class="col-xs-16">
            <label for="medications">NYHA Class:</label>
            <select style="color:blue" class="form-control input-sm" name="Nyha_class" id="Nyha_class">
                <option>I</option>
                <option>II</option>
                <option>III</option>
                <option>IV</option>
              </select>
</div>
</br>
<div class="col-xs-10">
                        <div class="icon-boxes position-relative">
            <input type="button" style="background-color: darkblue;
  border-radius: 25%;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;" onclick="clickMe5()" value="Interventions done">                        
                    
                            <div class="container position-relative">
                                <div class="row row-cols-2 gy-4 mt-5" style="align-items: center;">
                                    <div class="Interventions_done" id="intdone" style="font-size: 12px; display:none;">

                                    <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="interventions_done[]" value="Medical Follow up"><label for="Medical Follow up">Medical Follow up</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->

                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="interventions_done[]" value="Valvotomy"><label for="Valvotomy">Valvotomy</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->

                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="interventions_done[]" value="Surgery"><label for="Surgery">Surgery</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->

                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="interventions_done[]" value="Pericardioectomy"><label for="Pericardioectomy">Pericardioectomy</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->
                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="interventions_done[]" value="Corona angio/PCI"><label for="Corona angio/PCI">Corona angio/PCI</label>
                                            </div>
                                        </div>
                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="interventions_done[]" value="PDA Ligatio"><label for="PDA Ligatio">PDA Ligatio</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->

                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="interventions_done[]" value="Device Closure"><label for="Device Closure">Device Closure</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->
                                        <input type="button" value="ok"  onClick='clickMe5()'>
                                        <input type="reset" value="cancel">
                                        </div>
                                </div>
                            </div> 
         <script>
                function clickMe5() {
                    var text = document.getElementById("intdone");
                    if (!text.style.display) {
                        text.style.display = "none";
                    }
                    if (text.style.display === "none") {
                        text.style.display = "block";
                    } else {
                        text.style.display = "none";
                    }
                }
            </script>
                        </div>

                    </div>
                    </br>
                    <div class="col-xs-10">
                        <div class="icon-boxes position-relative">
            <input type="button" style="background-color: darkblue;
  border-radius: 25%;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;" onclick="clickMe6()" value="Interventions recommended">                        
                    
                    <div class="container position-relative">
                                <div class="row row-cols-2 gy-4 mt-5" style="align-items: center;">
                                    <div class="Interventions_recommended" id="intrecommended" style="font-size: 12px; display:none;">

                                    <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="interventions_recommended[]" value="Medical Follow up"><label for="Medical Follow up">Medical Follow up</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->

                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="interventions_recommended[]" value="Valvotomy"><label for="Valvotomy">Valvotomy</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->

                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="interventions_recommended[]" value="Surgery"><label for="Surgery">Surgery</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->

                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="interventions_recommended[]" value="Pericardioectomy"><label for="Pericardioectomy">Pericardioectomy</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->
                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="interventions_recommended[]" value="Corona angio/PCI"><label for="Corona angio/PCI">Corona angio/PCI</label>
                                            </div>
                                        </div>
                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="interventions_recommended[]" value="PDA Ligatio"><label for="PDA Ligatio">PDA Ligatio</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->

                                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <input type="checkbox" name="interventions_recommended[]" value="Device Closure"><label for="Device Closure">Device Closure</label>
                                            </div>
                                        </div>
                                        <!--End Icon Box -->
                                        
                                        <input type="button" value="ok"  onClick='clickMe6()'>
                                        <input type="reset" value="cancel">
                                        </div>
                                </div>
                            </div> 
         <script>
                function clickMe6() {
                    var text = document.getElementById("intrecommended");
                    if (!text.style.display) {
                        text.style.display = "none";
                    }
                    if (text.style.display === "none") {
                        text.style.display = "block";
                    } else {
                        text.style.display = "none";
                    }
                }
            </script>
                        </div>

                    </div>
</br>
</br>
</br>
<input type="submit" style="color:blue" value="Submit" class="btn btn-success">
</div>
    </div>       
</form> 
</body>
  
</html>
