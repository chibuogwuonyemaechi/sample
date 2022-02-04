<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Chibuogwu Onyemaechi">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Frimoth Technologies</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
    <link rel = "stylesheet" href="style.css"
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&display=swap" rel="stylesheet">
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <!-- Navbar start -->
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="index1.php"><img src="images/company-logo.jpg" width="125px">&nbsp;&nbsp;Frimoth Technologies</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a class="nav-link active" href="myaccount.php"><i class="fas fa-laptop mr-2"></i>Myaccount</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index1.php"><i class="fas fa-mobile-alt mr-2"></i>Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-th-list mr-2"></i>Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="checkout.php"><i class="fas fa-money-check-alt mr-2"></i>Checkout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart1.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Navbar end -->


 <!----------------------------Account-Page------------------------------->
    <div class="account-page">
     <div class="container">
        <div class="row">
         <div class="col-2">
            <img src="images/compt acc-1.png" width="100%">
            </div>
            
            <div class="col-2">
            <div class="form-container">
                <div class="form-btn">
                    <span onclick="login()">Login</span>
                    <span onclick="register()">Register</span>
                    <hr id="Indicator">
                </div>
                
                <form id=LoginForm action="userlogin.php" method="POST">
                    <input type="text" placeholder="Username" name="username">
                    <input type="password" placeholder="Password" name="password">
                    <button type="submit" class="btn">Login</button>
                    <a href="">Forgot password</a>
                </form>
                
               <form id=RegForm action="userlogin.php"  method="POST">
                    <input type="text" placeholder="Username" name="username">
                    <input type="email" placeholder="Email" name="email">
                    <input type="password" placeholder="Password" name="password">
                    <button type="submit" class="btn">Register</button>
                </form>   
            </div>
         </div>
        
        </div>
    
    </div>
    </div>      
    
     <!----------------------------------footer---------------------------------->
    <div class="footer">
      <div class="container">
          <div class="row">
            <div class="footer-col-1">
               <h3>Download Our App</h3>
                <p>Dowload App for Android and ios mobile phone</p>
                <div class="app-logo">
                    <img src="images/App-store-logo.png">
                    <img src="images/google-playstore-logo.jpg">
                </div>
              </div>
              <div class="footer-col-2">
               <img src="images/company-logo.jpg">
                <p>Driven by passion to always deliver your choicest and guaranteed computer accessories to your doorstep at a click </p>
              </div>
              <div class="footer-col-3">
               <h3>Useful Links</h3>
                <ul>
                    <li>Coupons</li>
                    <li>Blog Post</li>
                    <li>Return Policy</li>
                    <li>Join Affiliate</li>
                  </ul>
              </div>
                  <div class="footer-col-4">
               <h3>Follow Us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                    <li>Youtube</li>
                  </ul>
              </div>
          </div>
        <hr>
          <p class="copyright">Copyright 2021 - Chibuogwu Onyemaechi</p>
        </div>
    </div>
    
    
    <!------------------------------------Javascript for toggle menu----------------------------->
    <script>
         var MenuItems = document.getElementById("MenuItems");
        
        MenuItems.style.maxHeight = "0px";
        
        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px")
                {
                    MenuItems.style.maxHeight = "200px";
                }
            else
                {
                    MenuItems.style.maxHeight = "0px";
                }
        }
    </script>
    
    
    <!------------------------------------Javascript for toggle form----------------------------->
    <script>
      var LoginForm = document.getElementById("LoginForm");
      var RegForm = document.getElementById("RegForm");
      var Indicator = document.getElementById("Indicator");
        function register(){
            RegForm.style.transform = "translateX(0px)";
            LoginForm.style.transform = "translateX(0px)";
            Indicator.style.transform = "translateX(100px)";
        }
        function login(){
            RegForm.style.transform = "translateX(300px)";
            LoginForm.style.transform = "translateX(300px)";
            Indicator.style.transform = "translateX(0px)";
        }
        
    </script>
    
    
  </body>
</html>