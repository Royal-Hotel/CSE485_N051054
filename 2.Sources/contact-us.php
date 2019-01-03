<?php
    include "config/database.php";
    include "controller/connection.php";
    include "objects/contact.php";

    $database = new Database();
    $db = $database->getConnection();

    $contact = new Contact($db);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacs Us | Royal Hotel</title>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <link href="./fonts/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"/> -->
    <link rel="stylesheet" href="Footer-Basic.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <!-- header -->
    <div class="header-me">
        <div class="row-me">
            <div class="logo">
                <a href="index.php">
                    <img src="images/logo.png" alt="logo">
                </a>
            </div>
           <!-- login -->
            <div class="login-me">
                <?php
                    include_once "config/core.php";
                    include_once "login_checker.php";
                    $access_denied = false; 
                ?>
                <?php
            // check if users / customer was logged in
            // if user was logged in, show "Edit Profile", "Orders" and "Logout" options
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true && $_SESSION['access_level']=='Customer'){
                ?>
                <a href="login1.php"><button type="button" id="btnlogin"><?php echo $_SESSION['firstname']; ?></button></a>
                </a>
                <?php
                    }       
                    // if user was not logged in, show the "login" and "register" options
                    else{
                ?>
                <a href="login1.php"><button type="button" id="btnlogin">Login</button></a>
                <a href="register.php"><button type="button" id="btnregister">Register</button></a>
                <?php
                    }
                ?>
            </div>
            <!-- menu -->
            <div class="drop-menu ">
                <ul class="main-nav">
                    <li><a href="show-room.php">ROOMS</a></li>
                    <li><a href="photo-gallery.php">PHOTO GALLERY</a></li>
                    <li><a href="new-event.php">NEWS & EVENT</a></li>
                    <li><a href="contact-us.php">CONTACT US</a></li>
                    <a href="booking.php"><button  id="btn-booking"><b>BOOK A ROOMS</b></button></a>
              </ul>
              <div class="handle">
                <b class="menu">MENU</b></div>
          </div>
        </div>    
    </div>

    <!-- start form -->

    <div class="container">
        <h1 class="text-center">Contact Us</h1>

        <form class="contact-form" action="user_process.php" method="POST" name="contact">
                <input class="form-control" type="text" name="name" placeholder=" Type Your Username">
                <i class="fa fa-user fa-fw"></i>

                <input class="form-control" type="email" name="email" placeholder=" Your Email">
                <i class="fa fa-envelope fa-fw"></i>

                <textarea class="form-control" name="message" rows="5" placeholder=" Your Message!"></textarea>
                <input class="btn btn-success btn-block"type="submit" value="Send Message">
        </form>
    </div>
    <!-- end form --> 

    <!-- footer -->
    <div class="footer-basic">
            <footer>
                <div class="social">
                    <a href="#"><i class="icon ion-social-instagram"></i></a>
                    <a href="#"><i class="icon ion-social-snapchat"></i></a>
                    <a href="#"><i class="icon ion-social-twitter"></i></a>
                    <a href="#"><i class="icon ion-social-facebook"></i></a>
                </div>
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
                <p class="copyright">Company One Member © 2018</p>
            </footer>
        </div>

<!-- java script menu-->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script>
          $(document).ready(function(){
            $('.menu').click(function(){
                $('.main-nav').toggleClass('active');
            });
          });
        </script> 
</body>
</html>