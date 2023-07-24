<?php include('./createconn.php'); 
ob_start();
session_start();
?>

<html>
    <head>
        <title>Login</title>
        <style>
            body{
               margin: 0;
               padding: 0;
               font-family: sans-serif;
background-color: darkblue;            }
            .error {
                    color: #f50707;
               } 
            .box{

                position: absolute;
                top:50%;
                left:50%;
                transform: translate(-50%,-50%);
                width: 300px;
                background: rgba(255, 255, 255, 0.5);
                text-align: center;
                padding: 20px;
                box-shadow: 0px 0px 22px 1px #000;
            }
            .box h1{
                border-bottom:3px solid black;
                display: inline-block;
                text-transform: uppercase;
                color: tomato;

            }
            .box input[type="text"],.box input[type="password"]
            {
                
              
                outline: none;
                border: 2px  solid #ff3600 ;
                text-align: center;
                padding: 15px 10px;
                display: block;
                margin: 10px auto;
                border-radius: 24px;
                width: 210px;
                transform: 025;
                


            }
            .box input[type="text"]:focus,.box input[type="password"]:focus 
            {
                width: 270px;
                border-color: lightblue;
            }
            .box input[type="submit"]
            {
                display: block;
                margin: 20px auto;
                border: 2px solid lightblue;
                background: none;
                outline: none;
                padding: 2px 2px;
                border-radius: 24px;
                color:lightblue;
            }
            .box input[type="submit"]:hover
            {
                background-color: red;
                color:#000;
            }

         </style>
      
    </head>

    <body >
        
        <div >
            <h1 class="text-center"></h1>
            <br><br>

           
        

            <!-- Login Form Starts HEre -->
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" class="box">
                <?php
                 if(isset($_SESSION['register']))
                 {
                     echo $_SESSION['register'];
                     unset($_SESSION['register']);
                 }
                ?>
                <h1>Login</h1> 
               
           
            <input type="text" name="username" placeholder="Enter Username" ><br><br>

        
            <input type="password" name="password" placeholder="Enter Password" ><br><br>
            <?php
              if(isset($_SESSION['login']))
              {
                  echo $_SESSION['login'];
                  unset($_SESSION['login']);
              }
              if(isset($_SESSION['no-login-message']))
              {
                  echo $_SESSION['no-login-message'];
                  unset($_SESSION['no-login-message']);
              }
              
              ?>
              

            <input type="submit" name="submit" value="Login" >
           
            </form>
            <!-- Login Form Ends HEre -->

            
        </div>

    </body>
</html>

<?php 

    //CHeck whether the Submit Button is Clicked or NOt
    if(isset($_POST['submit']))
    {
        //Process for Login
        //1. Get the Data from Login form
        $username ="";
        $password="";

        $username = htmlspecialchars($_POST['username']);
        // $_POST['username'];
        // htmlspecialchars($username);
        //md5 used to encreption purpose
        $password = $_POST['password'];

        //2. SQL to check whether the user with username and password exists or not
        $sql = "SELECT * FROM adminn WHERE username='$username' AND password='$password'";
       // SELECT * FROM tbl_admin WHERE username='admin'#' AND password='$password'";
      mysqli_select_db($conn, "Patient");
        //3. Execute the Query
        $res = mysqli_query($conn, $sql);

        //4. COunt rows to check whether the user exists or not
        $count = mysqli_num_rows($res);
        define('SITEURL', 'http:///localhost/Final P/');
      
       if($username==""|| $password=="")

        {
            if($username=="" )
            {
                $_SESSION['login'] = "<div class='error text-center'>please insert username and password</div>";
                //REdirect to HOme Page/Dashboard
                header('location:'.SITEURL.'login.php'); 

            }
            elseif($password=="")
            {
                $_SESSION['login'] = "<div class='error text-center'>please insert password</div>";
                //REdirect to HOme Page/Dashboard
                header('location:'.SITEURL.'login.php'); 

            }
            else {
                $_SESSION['login'] = "<div class='error text-center'>please insert username and password</div>";
                //REdirect to HOme Page/Dashboard
                header('location:'.SITEURL.'login.php'); 

            }
            

           
        }

       else if($count==1)
        {
            //User AVailable and Login Success
            $_SESSION['valid'] = true;
            $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
            $_SESSION['user'] = $username; //TO check whether the user is logged in or not and logout will unset it

            //REdirect to HOme Page/Dashboard// the page you want to go
            header('location:'.SITEURL.'index.php');
        }
        
        else
        {
            //User not Available and Login FAil
            $_SESSION['login'] = "<div class='error text-center'>Username or Password did not match.</div>";
            //REdirect to HOme Page/Dashboard
            header('location:'.SITEURL.'login.php');
        }


    }

?>