<!DOCTYPE html>
<html lang="en">
<?php 
ob_start();
session_start();
$_SESSION['user'] = "username";
?>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Tikur Anbassa</title>
    <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">


</head>

<body style="background-color:lightgray;">

    <!-- ======= Header ======= -->
    <section id="topbar" class="topbar d-flex align-items-center">
    <nav class="navbar navbar-inverse">
    <div style="background-color:darkkhaki;" class="container-fluid">
        
                <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:Tikuranbassa@gmail.com">Tikuranbassa@gmail.com</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>P.no +2519 </span></i>

            </div>
        </div>
    </div>
    </nav>
    </section><!-- End Top Bar -->

    <header id="header" class="header d-flex align-items-center">

        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="index.php" class="logo d-flex align-items-center">

                <h1>Tikur anbassa<span> Hospital</span></h1>

            </a>
            <nav id="navbar" class="navbar">
                    <a href="form.php"><button style="font: bold 14px Arial;">Intake form</button></a>
            </nav><!-- .navbar -->

        </div>
    </header>
</br>
</br>
    <section id="record" class="record">
    <a href="view.php"><button style="font: bold 14px Arial;">View all records</button></a>
</br>
</br>


    <form action="find_record.php" method = "POST">
    <label type="informative" style=" font-size: 20px;
        font-weight: 700;
        color: blue;">Find record</label>
                <div class="form-group" style="padding-left: 10%; width: 100%;">
                    <input type="text" class="form-control" name="card_number" id="card_number" placeholder="Card number #" required style="height: 40px;border-radius: 10px;font-size: 15px;" />
                    <div class="validation"></div>
                </div>
    </br>
    </br>
    </br>
                <div class="form-group" style="padding-left: 10%;">
                    <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Full name" required style="height: 40px;border-radius: 10px;font-size: 15px;" />
                    <div class="validation"></div>
                </div>
    </br>
    </br>
                <div class="form-group" style="padding-left: 10%;">
                <input type="submit" value="Submit" class="btn btn-success">
    </div>
    </form>
   

</section>
<div class="column right">
    <div class="col-md-2 col-md-offset-2">
    <a href="http://localhost/Final P/logout.php"  class="btn btn-default navbar-btn btn-lg">Log out</a>  
    </div>
    </div>

    </body>
</html>