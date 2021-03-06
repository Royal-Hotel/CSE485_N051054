<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Royal Hotel</title>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <link href="./fonts/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="Footer-Basic.css" />
    <link rel="stylesheet" href="aos.css">
    <link rel="stylesheet" href="style.css">
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
                    <li><a href="#">NEWS & EVENT</a></li>
                    <li><a href="contact-us.php">CONTACT US</a></li>
                    <a href="booking.php"><button  id="btn-booking"><b>BOOK A ROOMS</b></button></a>
                </ul>
                <div class="handle">
                    <b class="menu">MENU</b>
                </div>
          </div>
        </div>    
    </div>   
<!-- php show danh sanh loai phong trong database -->
<div id="qwe">
    <style>
        #qwe{ height: 120px;}
    </style>
</div>
<div class="room-me">

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "royal_hotel";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password,$database);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        ?>
        <?php
            $res = mysqli_query($conn,"SELECT * FROM loaiphong");
            echo "<table>";
            while($row=mysqli_fetch_array($res))
            {
                echo "<tr>";
                echo "<td>"; ?> <img id="show-room-me"style="padding:20px;"src="<?php echo $row["img"]; ?>" height="500" witdh="500"> <?php echo "</td>";
                echo "<td>"; echo $row["ten_lp"]; echo "    giá   "; echo $row["gia_lp"]; echo " <a href='booking.php'><button>BOOK NOW </button></a>"; echo "</td>";
                echo "</tr>";
            }
            echo "</table>";
            $conn->close();
        ?>
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
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="aos.js"></script>
        <script>
          $(document).ready(function(){
            $('.menu').click(function(){
                $('.main-nav').toggleClass('active');
            });
          });
        </script>
        <script>
            AOS.init({
                offset: 200,
                duration: 2000,
            });
        </script>

<!-- end -->
</body>
</html>    