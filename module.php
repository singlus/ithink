<?php
session_start();
        
        include("connection.php");
        include("functions.php");
        
        $user_data = check_login($con);
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Module</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="asset/logo.png" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Irish+Grover&display=swap');
            body{
                background-image: url(asset/bg.png);
                background-repeat: no-repeat;
                background-size: auto;
               
            }
        </style>
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end" id="sidebar-wrapper" style="background: #022443; color: aliceblue;">
                <div class="sidebar-heading border-bottom bg-cyan" style="background: #022443;"><img src="asset/logo.png" alt="" style="height: 60px; width: 60px; margin-right: 10px;"><p class="h4" style="float: right; margin-top: 15px; margin-right: 45px; color: aliceblue;">IThink</p></div>
                <div class="list-group list-group-flush" style="background: #022443; color: aliceblue;">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="home.php" style="background: #022443; color: aliceblue;"><img src="asset/star.png" alt="" class="img-fluid" style="height: 60px; width: 60px;">Home</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#" style="background: #022443; color: aliceblue;"><img src="asset/star.png" alt="" class="img-fluid" style="height: 60px; width: 60px;">Leaderboards</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="module.php" style="background: #022443; color: aliceblue;"><img src="asset/star.png" alt="" class="img-fluid" style="height: 60px; width: 60px;">Modules</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#" style="background: #022443; color: aliceblue;"><img src="asset/star.png" alt="" class="img-fluid" style="height: 60px; width: 60px;">Progress</a>
                   
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light  border-bottom" style="background: #7590B8;">
                    <div class="container-fluid">
                        <div class="navbar-collapse" id="navbarSupportedContent">
                            <p class="h2" style="color:aliceblue; margin-left:20px;">Topics</p>
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="asset/person.png" alt="" style="height: 60px; width: 60px;"></a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#!">Profile</a>
                                        <a class="dropdown-item" href="#!">Settings</a>
                                        <a class="dropdown-item" href="logout.php">Log out</a>
    
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid">
                        
                        <div class="row" style="margin-top: 30px;">
                          <div class="col-sm d-flex justify-content-center">
                           <a  class="btn" href="intro1.php"><img src="asset/introduction.png" alt="" class="img-fluid" ></a > 
                          </div>
                          <div class="col-sm d-flex justify-content-center" >
                            <a class="btn" href="#"><img src="asset/ifelse.png" alt="" class="img-fluid" ></a> 
                          </div>
                          <div class="col-sm d-flex justify-content-center" >
                            <a  class="btn" href="#"><img src="asset/var.png" alt="" class="img-fluid" ></a > 
                          </div>
                        </div>

                        <div class="row" style="margin-top: 30px;">
                            <div class="col-sm d-flex justify-content-center">
                             <a  class="btn" href="#"><img src="asset/functions.png" alt="" class="img-fluid" ></a > 
                            </div>
                            <div class="col-sm d-flex justify-content-center" >
                              <a  class="btn" href="#"><img src="asset/for.png" alt="" class="img-fluid" ></a > 
                            </div>
                            <div class="col-sm d-flex justify-content-center" >
                              <a  class="btn" href="#"><img src="asset/user.png" alt="" class="img-fluid" ></a > 
                            </div>
                          </div>




                     
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
