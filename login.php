<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
        $email = $_POST['email'];
        $password = $_POST['password'];

		if(!empty($email) && !empty($password) && !is_numeric($email))
		{

			//read from database
			$query = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: home.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>

<!doctype html>
<html lang="en">

<!--HEAD--> 
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href='asset/Irish_Grover/IrishGrover-Regular.ttf' rel='stylesheet'>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="asset/logo.png" />
    <link href='https://fonts.googleapis.com/css?family=Jacques Francois' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
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
    <div class="container" style="width: 600px; float: left; margin-top: 8%; padding-left: 7%; margin-bottom: 10%;">
        <img src="asset/loginrobot.png" alt="" class="img-fluid" alt="Responsive image" style="height: 600px;">
    </div>
    

    <div class="container" style="width:55%; float: right; margin-top: 8%; margin-bottom: 10%;">

        <form style="border-radius: 24px;
        border-radius: 24px;
        background: #FFF;
        box-shadow: 0px 72px 80px -48px #223A28, 0px 4px 4px 0px rgba(0, 0, 0, 0.25), 0px 4px 4px 0px rgba(0, 0, 0, 0.25), 0px 4px 4px 0px rgba(0, 0, 0, 0.25);;
        
        width: 600px;
        height: 600px;
        " method="post">
            <div class="form-group" style="padding-left: 50px;
            padding-right: 50px; padding-top: 20px;">
                <img src="asset/logo.png" class="img-fluid" alt="Responsive image" style="margin-left: 80%; height: 70px; width: 70px; margin-top: 10px;">
                <br>
                <p class="h1" style="color: #43AEFB;
                font-family: Inter;
                font-size: 52px;
                font-style: normal;
                font-weight: 400;
                line-height: 100%;"> Log In</p>
                <p class="h3" style="color: #3D79CC; font-family: Inter; font-size: 22px; font-style: normal; font-weight: 600; line-height: 150%;">A Game Based Learning for Beginners.</p>
                <p class="h4" style="color: #3D79CC;
                font-family: Inter;
                font-size: 18px;
                font-style: normal;
                font-weight: 400;
                line-height: 100%; /* 18px */">Welcome Back, Please login to your account</p>
                <label for="exampleInputEmail1" style="color: #000;

                font-family: Inter;
                font-size: 16px;
                font-style: normal;
                font-weight: 600;
                line-height: 100%;">Email</label>
              <input type="email"  name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" style="border-radius: 8px;
              border: 1px solid #43AEFB;background: #FFF;">
              
            </div>
            <div class="form-group" style="padding-left: 50px;
            padding-right: 50px; padding-top: 20px;">
              <label for="exampleInputPassword1" style="color: #355B3E;
              font-family: Inter;
              font-size: 16px;
              font-style: normal;
              font-weight: 600;
              line-height: 100%; /* 16px */">Password</label>
              <input type="password"  name="password" class="form-control" id="password" placeholder="Password" style="border-radius: 8px;
              border: 1px solid #43AEFB;
              background: #FFF;">
            </div>
            <div class="form-check" style="padding-left: 50px;
            padding-right: 50px;">
            <p><a class="link-underline-opacity-0" href="#" style="float: right; color: #43AEFB;
                text-align: right;
                font-family: Inter;
                font-size: 16px;
                font-style: normal;
                font-weight: 400;
                
                ">Forgot Password?</a></p>
              <input type="checkbox" class="form-check-input" id="exampleCheck1" style="margin-left: 1px;">
              <label class="form-check-label" for="exampleCheck1" style="margin-left: 8px; color: #43AEFB;
              font-family: Inter;
              font-size: 16px;
              font-style: normal;
              font-weight: 400;
              " >Remember me</label>
              
              <br>
        
            </div>
            <div class="form-group" style="padding-left: 50px; display: flex; padding-right: 50px;
            align-items: flex-start;
            gap: 24px;
            align-self: stretch; padding-top: 20px;">
            <button type="submit" class="btn btn-primary" style="width: 50%; float: left; border-radius: 8px;
            background: #43AEFB; color: #FFF; ">Login</button>
            <a class="btn btn-outline-primary" href="signup.php" role="button" style="width: 50%; float: right;border-radius: 8px;
            ">Sign Up</a>
            </div>
          </form>
        
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>