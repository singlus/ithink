<?php
session_start();
        
        include("connection.php");
        include("functions.php");
        
        $user_data = check_login($con);
?>


<!doctype html>
<html lang="en">


<!--HEAD--> 
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="asset/logo.png" />
    <link href='asset/Irish_Grover/IrishGrover-Regular.ttf' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Jacques Francois' rel='stylesheet'>
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
                <a class="nav-link active" aria-current="page" href="home.php" style="color: aliceblue; font-weight: bold;" >Home</a>
              </li>
              <li class="nav-item" style="margin-left: 6%;">
                <a class="nav-link" href="about.php" style="color: aliceblue; font-weight: bold;">About</a>
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
    <div class="container" style="width: 50%; float: left; margin-top: 10%; padding-left: 10%;">
        <img src="asset/robot.png" alt="" class="img-fluid" alt="Responsive image">
    </div>
    

    <div class="container" style="width: 50%; float: right; margin-top: 10%; padding-right: 16%; padding-left: 2%;">
        <p class="h1" style="color: #6F99DD;
        text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        font-family: Inter;
        font-size: 48px;
        font-style: normal;
        font-weight: 700; font-size: clamp(20px, 8vw, 40px);">Increases Logical Thinking <br><span>with Coding</span></p>
        <p class="h5" style="color: #6F99DD;
        font-family: Inter;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: 40px; /* 250% */
        margin-top: 10%">Having logical thinking skills encourages beginners to think for themselves, to question assumptions, to develop their own theories, and to test their theories against known facts. These thinking skills are transferable to all situations.</p>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>