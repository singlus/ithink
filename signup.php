
<?php
session_start();
        
        include("connection.php");
        include("functions.php");     
        
        
        

        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            //something was posted
          $F_name = $_POST["F_name"];
          $L_name = $_POST["L_name"];
          $email = $_POST['email'];
          $password = $_POST['password'];

          if(!empty($F_name)&& !empty($L_name) && !empty($email) && !empty($password) && !is_numeric($email))
          {
                //save to database
                $user_id = random_num(20);
                $query = "insert into users (user_id,F_name,L_name,email,password) values ('$user_id','$F_name','$L_name','$email','$password')";

                mysqli_query($con, $query);

                header("Location: login.php");
                die();
          }else
          {
            echo "Please enter some valid information";
          }
        }
?>

<!doctype html>
<html lang="en">

<!--HEAD--> 
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>
    <link href='asset/Irish_Grover/IrishGrover-Regular.ttf' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Jacques Francois' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Mogra' rel='stylesheet'>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="asset/logo.png" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Irish+Grover&display=swap');
        body{
            background-image: url(asset/bg.png);
            background-repeat: no-repeat;
            background-size: auto;
           
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="asset/logo.png" alt="" style="width: 100px; height: 100px;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item" style="margin-left: 6%;">
            <a class="nav-link active" aria-current="page" href="index.php" style="color: aliceblue; font-weight: bold;" >Home</a>
          </li>
          <li class="nav-item" style="margin-left: 6%;">
            <a class="nav-link" href="about.html" style="color: aliceblue; font-weight: bold;">About</a>
          </li>     
          <li class="nav-item" style="margin-left: 6%;">
            <a class="nav-link" href="#" style="color: aliceblue; font-weight: bold;">Tutorials</a>
          </li>
          <li class="nav-item" style="margin-left: 6%;">
            <a class="nav-link" href="#" style="color: aliceblue; font-weight: bold;">Projects</a>
          </li>
          <li class="nav-item" style="margin-left: 6%;">
            <a class="nav-link" href="module.php" style="color: aliceblue; font-weight: bold;">Modules</a>
          </li>
          
        </ul>
       
        
      </div>
    </div>
  </nav>

  <!--BODY--> 
  <body>
    <div class="container-fluid">

        <div class="row">
            
          <div class="col-sm" style="display: flex; justify-content: center; align-items: center; ">
            <img src="asset/loginrobot.png" class="img-fluid" alt="Responsive image" style=" height: 600px; width: 400px; margin-left: 140px;">
          </div>

          <div class="col-sm" style="display: flex; justify-content: center; align-items: center; ">
            <img src="asset/signuplogo.png" class="img-fluid mx-auto" alt="Responsive image" style=" height: 820px; width: 200px; margin-left: 140px;">
          </div>

          <div class="col-sm" style="display: flex; justify-content: center; align-items: center; ">
            <form style="width: 478px;
            height: 462px;
           margin-right: 200px;
           " method="post">
                <div class="row">
                    <p class="h1" style="text-align: center; color: #43AEFB;font-family: Inter;font-size: 56px;font-style: normal;font-weight: 400;line-height: normal;">Sign Up</p>
                  <div class="form-group col-md-6">
                    <label for="inputfirstname">First Name</label>
                    <input type="text" class="form-control" id="F_name" name="F_name" placeholder="First Name">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputLastname">Last name</label>
                    <input type="text" class="form-control" id="L_name" name="L_name" placeholder="Last Name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="inputPassword">Password</label>
                  <input type="password" class="form-control" id="password"  name="password" placeholder="Password">
                </div>
                <div class="form-group" style="display: flex; justify-content: center; align-items: center; margin-top: 30px;">
                <input id="button" value="Create Account" type="submit"  style="width: 229px;
                height: 46px;
                flex-shrink: 0;
                color: #FFF;font-family: Mogra;font-size: 16px;font-style: normal;font-weight: 400;line-height: 22px;" class="btn btn-primary"></input>
               
                </div>

                <p class="h5" style="text-align: center; margin-top: 21px; color: rgba(0, 0, 0, 0.70);font-family: JejuHallasan;font-size: 16px;font-style: normal;font-weight: 400;line-height: 22px; /* 137.5% */letter-spacing: 0.48px;"> Already a Member? <span><a href="login.php" style="color: #43AEFB;
                    font-family: JejuHallasan;
                    font-size: 16px;
                    font-style: normal;
                    font-weight: 400;
                    line-height: 22px;
                    letter-spacing: 0.48px">Log in</a></span></p>
              </form>
          </div>
        </div>
      </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>