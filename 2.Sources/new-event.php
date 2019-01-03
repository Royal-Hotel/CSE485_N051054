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
                    <li><a href="new-event.php">NEWS & EVENT</a></li>
                    <li><a href="contact-us.php">CONTACT US</a></li>
                    <a href="booking.php"><button  id="btn-booking"><b>BOOK A ROOMS</b></button></a>
              </ul>
              <div class="handle">
                <b class="menu">MENU</b></div>
          </div>
        </div>    
    </div>
    <!-- page news - event -->
    
    <div class="container-1">

		<style type="text/css">
            .container-1{
                padding-top:120px;
                width: 100%;
                height:auto;
            }
			body {
				margin:0;
				padding:0;
				font-family: Sans-Serif;
			}
			
			header {
				background: #ccc;
				height: 100px;
			}
			
			header h1 {
                font-family:Sans-Serif;
				margin: 0;
				padding-top: 15px;
			}
			
			main {
				padding-bottom: 10010px;
				margin-bottom: -10000px;
				float: left;
				width: 100%;
			}
			
			nav {
				padding-bottom: 10010px;
				margin-bottom: -10000px;
				float: left;
				width: 230px;
				margin-left: -230px;
				background: #eee;
			}

			#wrapper {
				overflow: hidden;
			}
						
			#content {
				margin-right: 50px; /* Same as 'nav' width */
			}
			
			.innertube {
				margin: 15px; /* Padding for content */
				margin-top: 0;
				padding: 20px;
				font-size:18px;
			}
		
			p {
				padding-top: 10px;
				color: #555;
			}
		</style>
	<header>
        
		<div class="innertube">
			<h1 style="padding-left: 100px;">New Hot Of Royal Hotel</h1>
		</div>
	</header>
		
	<div id="wrapper">
	
		<main>
			<div id="content">
				<div class="innertube">
                    <div class="container">
					<h1 style="padding: 0 10px;">Meetings & conferencesg</h1>
                    <p style="padding:20px;">Meetings happen all the time; conferences come and go, but you remember the ones that made change happen. 
                        It’s about more than the keynote speaker. It’s about an environment that stimulates and inspires. Food that fuels innovative thinking. 
                        And technology that delivers audio-visual excellence, every time. A superbly central location helps, too. ROO (return on objectives) might be the new ROI, 
                        but at the Montcalm it’s always been our objective to understand yours, so that together we can make it worth meeting, and make meeting a pleasure. 
                        So if you’re looking for a versatile venue for up to 300 in the heart of the city with bespoke service as standard, look no further. </p>
                    <img  src="images/meeting_01.png"><hr>
                    </div>
                    <div class="container">
					<h1 style="padding:10px;">Private dining</h1>
					<p style="padding:20px;">The smart wooden floors, the striking bronze and copper detailing, the plush silvery grey banquettes - arriving at Montcalm Royal London House-City 
                        of London makes just the right impression and sets the scene for a private lunch or dinner to remember. The finest food is the season's best, 
                        sourced with care from trusted suppliers, served with perfectly paired wines. And our talented team will dress the table to your liking, because, 
                        like you, we've an eye for detail. So whether it's an intimate affair for eight or you're entertaining eighty, you’re in good hands. </p>
                        <img src="images/meeting_02.png"><hr>
                        </div>
                        <div class="container">
					<h1 style="padding:10px;">Exhibitions & tradeshows</h1>
					<p style="padding:20px;" >Upscale exhibition space in a City of London location isn't the easiest thing to find, until now. Royal London House brings 
                        state-of-the-art exhibition and trade show space to the heart of the city, within minutes of Liverpool Street and Moorgate stations. 
                        With easy access to the space itself, expert technical support and buzzing bars and restaurants on site, it's an exciting new option for London 
                        exhibitions.</p>
                        <img width="1050px" src="images/meeting_03.png"><hr>
                        </div>
                        <div class="container">   
					<h1 style="padding:10px;">Weddings</h1>
					<p style="padding:20px;">For couples with an eye for the original and a preference for urban chic over country-house cliché, Montcalm Royal London House-City of London certainly 
                        cuts a dash in a superbly central location. Through an imposing arched entrance on a smart city square, enter a world of understated elegance and allow our
                         dedicated team to make your big day unforgettable. With exquisite detail everywhere, from white onyx stone and silvery grey velvet upholstery to Herringbone Parquet 
                         flooring, it’s a suitably stylish setting for hosting up to 300 guests. Choose a mouthwatering menu to match your theme,
                         or opt to create your own in collaboration with our chefs.</p>
                         <img width="1050px" src="images/meeting_04.png"><hr>
				</div>
			</div>
		</main>
	
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