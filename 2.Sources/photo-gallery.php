<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Photo Gallery | Royal Hotel</title>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <link href="./fonts/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="Footer-Basic.css" />
    <link rel="stylesheet" type="text/css" href="aos.css"/>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="stylesheet" type="text/css" href="css/lightbox.min.css"/>
    <script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
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
        <!-- content -->
<div class="content-photo">
    <div class="comtainer-photo">
        <div class="row">
            <div class="ten">
                <h1 style="text-align:center; font-size: 50px;">Royal Luxury Hotel</h1> 
            </div>
            <hr>
            <h1 style="font-size: 27px;" >Rooms & Suite</h1>
            <hr>
            <div class="gallery">
                <a href="images/room1.png" data-lightbox="mygallery"><img src="images/room1.png"></a>
                <a href="images/room2.png" data-lightbox="mygallery"><img src="images/room2.png"></a>
                <a href="images/room3.png" data-lightbox="mygallery"><img src="images/room3.png"></a>
                <a href="images/room4.png" data-lightbox="mygallery"><img src="images/room4.png"></a>
                <a href="images/room5.png" data-lightbox="mygallery"><img src="images/room5.png"></a>
                <a href="images/room6.png" data-lightbox="mygallery"><img src="images/room6.png"></a>
                <a href="images/room7.png" data-lightbox="mygallery"><img src="images/room7.png"></a>
                <a href="images/room8.png" data-lightbox="mygallery"><img src="images/room8.png"></a>
                <a href="images/room9.png" data-lightbox="mygallery"><img src="images/room9.png"></a>
                <a href="images/room10.png" data-lightbox="mygallery"><img src="images/room10.png"></a>
                <a href="images/room11.png" data-lightbox="mygallery"><img src="images/room11.png"></a>
                <a href="images/room12.png" data-lightbox="mygallery"><img src="images/room12.png"></a>
                <a href="images/room13.png" data-lightbox="mygallery"><img src="images/room13.png"></a>
                <a href="images/room14.png" data-lightbox="mygallery"><img src="images/room14.png"></a>
                <a href="images/room15.png" data-lightbox="mygallery"><img src="images/room15.png"></a>
                <a href="images/room16.png" data-lightbox="mygallery"><img src="images/room16.png"></a>
                <a href="images/room17.png" data-lightbox="mygallery"><img src="images/room17.png"></a>
                <a href="images/room18.png" data-lightbox="mygallery"><img src="images/room18.png"></a>
                <hr>
            <h1  style="font-size: 27px;">Lounge & Public Area</h1>
            <hr>
                <a href="images/Lounge_01.png" data-lightbox="mygallery"><img src="images/Lounge_01.png"></a>
                <a href="images/Lounge_02.png" data-lightbox="mygallery"><img src="images/Lounge_02.png"></a>
                <a href="images/Lounge_03.png" data-lightbox="mygallery"><img src="images/Lounge_03.png"></a>
                <a href="images/Lounge_04.png" data-lightbox="mygallery"><img src="images/Lounge_04.png"></a>
                <a href="images/Lounge_07.png" data-lightbox="mygallery"><img src="images/Lounge_07.png"></a>
                <hr>
            <h1  style="font-size: 27px;">Burdock</h1>
            <hr>
                <a href="images/bar_02.png" data-lightbox="mygallery"><img src="images/bar_02.png"></a>
                <a href="images/bar_02.png" data-lightbox="mygallery"><img src="images/bar_03.png"></a>
                <a href="images/bar_02.png" data-lightbox="mygallery"><img src="images/bar_04.png"></a>
                <a href="images/bar_02.png" data-lightbox="mygallery"><img src="images/bar_05.png"></a>
                <a href="images/bar_02.png" data-lightbox="mygallery"><img src="images/bar_09.png"></a>
                <a href="images/bar_02.png" data-lightbox="mygallery"><img src="images/bar_12.png"></a>
                <a href="images/bar_02.png" data-lightbox="mygallery"><img src="images/bar_14.png"></a>
                <a href="images/mon1.png" data-lightbox="mygallery"><img src="images/mon1.png"></a>
                <a href="images/mon2.png" data-lightbox="mygallery"><img src="images/mon2.png"></a>
                <a href="images/mon3.png" data-lightbox="mygallery"><img src="images/mon3.png"></a>
                <a href="images/mon4.png" data-lightbox="mygallery"><img src="images/mon4.png"></a>
                <a href="images/mon5.png" data-lightbox="mygallery"><img src="images/mon5.png"></a>
                <a href="images/mon6.png" data-lightbox="mygallery"><img src="images/mon6.png"></a>
                <a href="images/mon7.png" data-lightbox="mygallery"><img src="images/mon7.png"></a>
                <a href="images/mon8.png" data-lightbox="mygallery"><img src="images/mon8.png"></a>
                <a href="images/mon9.png" data-lightbox="mygallery"><img src="images/mon9.png"></a>
                <a href="images/mon10.png" data-lightbox="mygallery"><img src="images/mon10.png"></a>
                <a href="images/mon11.png" data-lightbox="mygallery"><img src="images/mon11.png"></a>
                <a href="images/mon12.png" data-lightbox="mygallery"><img src="images/mon12.png"></a>
                <a href="images/mon13.png" data-lightbox="mygallery"><img src="images/mon13.png"></a>
                <a href="images/mon14.png" data-lightbox="mygallery"><img src="images/mon14.png"></a>
                <a href="images/mon15.png" data-lightbox="mygallery"><img src="images/mon15.png"></a>
                <a href="images/mon16.png" data-lightbox="mygallery"><img src="images/mon16.png"></a>
                <a href="images/mon17.png" data-lightbox="mygallery"><img src="images/mon17.png"></a>
                <a href="images/mon18.png" data-lightbox="mygallery"><img src="images/mon18.png"></a>
                <a href="images/mon19.png" data-lightbox="mygallery"><img src="images/mon19.png"></a>
                <a href="images/mon20.png" data-lightbox="mygallery"><img src="images/mon20.png"></a>
                <a href="images/mon21.png" data-lightbox="mygallery"><img src="images/mon21.png"></a>
                <a href="images/mon22.png" data-lightbox="mygallery"><img src="images/mon22.png"></a>
                <a href="images/mon23.png" data-lightbox="mygallery"><img src="images/mon23.png"></a>
                <a href="images/mon24.png" data-lightbox="mygallery"><img src="images/mon24.png"></a>
                <a href="images/mon25.png" data-lightbox="mygallery"><img src="images/mon25.png"></a>
                <a href="images/mon26.png" data-lightbox="mygallery"><img src="images/mon26.png"></a>
                <a href="images/mon27.png" data-lightbox="mygallery"><img src="images/mon27.png"></a>
                <a href="images/mon28.png" data-lightbox="mygallery"><img src="images/mon28.png"></a>
                <a href="images/mon29.png" data-lightbox="mygallery"><img src="images/mon29.png"></a>
                <a href="images/mon30.png" data-lightbox="mygallery"><img src="images/mon30.png"></a>
                <a href="images/mon31.png" data-lightbox="mygallery"><img src="images/mon31.png"></a>
                <a href="images/mon32.png" data-lightbox="mygallery"><img src="images/mon32.png"></a>
                <a href="images/sanh1.png" data-lightbox="mygallery"><img src="images/sanh1.png"></a>
                <a href="images/sanh2.png" data-lightbox="mygallery"><img src="images/sanh2.png"></a>
                <a href="images/sanh3.png" data-lightbox="mygallery"><img src="images/sanh3.png"></a>
                <a href="images/sanh4.png" data-lightbox="mygallery"><img src="images/sanh4.png"></a>
                <a href="images/sanh5.png" data-lightbox="mygallery"><img src="images/sanh5.png"></a>
                <a href="images/sanh6.png" data-lightbox="mygallery"><img src="images/sanh6.png"></a>
                <a href="images/sanh7.png" data-lightbox="mygallery"><img src="images/sanh7.png"></a>
                <a href="images/sanh8.png" data-lightbox="mygallery"><img src="images/sanh8.png"></a>
                <a href="images/sanh9.png" data-lightbox="mygallery"><img src="images/sanh9.png"></a>
                <a href="images/sanh10.png" data-lightbox="mygallery"><img src="images/sanh10.png"></a>
                <a href="images/sanh11.png" data-lightbox="mygallery"><img src="images/sanh11.png"></a>
                <a href="images/sanh12.png" data-lightbox="mygallery"><img src="images/sanh12.png"></a>
                <hr>
            <h1  style="font-size: 27px;">Aviary</h1>
            <hr>
                <a href="images/sky1.png" data-lightbox="mygallery"><img src="images/sky1.png"></a>
                <a href="images/sky2.png" data-lightbox="mygallery"><img src="images/sky2.png"></a>
                <a href="images/sky3.png" data-lightbox="mygallery"><img src="images/sky3.png"></a>
                <a href="images/sky4.png" data-lightbox="mygallery"><img src="images/sky4.png"></a>
                <a href="images/sky5.png" data-lightbox="mygallery"><img src="images/sky5.png"></a>
                <a href="images/sky6.png" data-lightbox="mygallery"><img src="images/sky6.png"></a>
                <a href="images/skybar1.png" data-lightbox="mygallery"><img src="images/skybar1.png"></a>
                <hr>
            <h1  style="font-size: 27px;">Wellness Center</h1>
            <hr>
                <a href="images/beboi1.png" data-lightbox="mygallery"><img src="images/beboi1.png"></a>
                <a href="images/beboi2.png" data-lightbox="mygallery"><img src="images/beboi2.png"></a>
                <a href="images/beboi1.png" data-lightbox="mygallery"><img src="images/beboi1.png"></a>
                <a href="images/spa1.png" data-lightbox="mygallery"><img src="images/spa1.png"></a>
                <a href="images/spa.png" data-lightbox="mygallery"><img src="images/spa.png"></a>
                <a href="images/gym.png" data-lightbox="mygallery"><img src="images/gym.png"></a>
                <hr>
            </div>
        </div>
    </div>
</div>

        <!-- footer -->
        <div class="footer-basic">
            <footer>
                <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
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
        <script>
          $(document).ready(function(){
            $('.menu').click(function(){
                $('.main-nav').toggleClass('active');
            });
          });
        </script>
        
        <!-- end -->
    </body>
    </html>    