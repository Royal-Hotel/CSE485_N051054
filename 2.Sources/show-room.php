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

<!-- style -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="Footer-Basic.css" />
    <link rel="stylesheet" href="aos.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="room.css">
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
                <a href="#"><button type="button" id="btnlogin" >Login</button></a>
                <a href="#"><button type="button" id="btnregister">Register</button></a>
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

 <!-- rooms & rates -->
 	<div class="room"><hr>
				<h2 style="font-size:40px; text-align:center">Rooms And Rates</h2><hr>
				<div class="priceing-table-main">
					<div class="col-md-3 price-grid ">
						<div class="price-block agile">
							<div class="price-gd-top">
							<img src="images/room1.png" alt="" class="img-responsive" />
								<h4>Deluxe Room</h4>
							</div>
							<div class="price-gd-bottom">
								<div class="price-list">
										<ul>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									</ul>
							</div>
							<!-- <div class="price-selet"> -->
								<h3><span>$</span>300</h3>
								<a href="booking.php"><button>Book Now<button></a>
							</div>
						</div>
					</div>
				</div>
					<div class="col-md-3 price-grid lost">
						<div class="price-block agile">
							<div class="price-gd-top">
							<img src="images/room5.png" alt=" " class="img-responsive" />
								<h4>Vip Room</h4>
							</div>
							<div class="price-gd-bottom">
								<div class="price-list">
									<ul>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									</ul>
								</div>
								<div class="price-selet">
									<h3><span>$</span>250</h3>
									<a href="booking.php"><button>Book Now<button></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 price-grid wthree lost">
						<div class="price-block agile">
							<div class="price-gd-top ">
								<img src="images/room3.png" alt=" " class="img-responsive" />
								<h4>Double Room</h4>
							</div>
							<div class="price-gd-bottom">
								<div class="price-list">
									<ul>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
										<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
										<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									</ul>
								</div>
								<div class="price-selet">
									<h3><span>$</span>200</h3>
									<a href="booking.php"><button>Book Now<button></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 price-grid wthree lost">
							<div class="price-block agile">
								<div class="price-gd-top ">
									<img src="images/room7.png" alt=" " class="img-responsive" />
									<h4>Single Room</h4>
								</div>
								<div class="price-gd-bottom">
									<div class="price-list">
										<ul>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
										</ul>
									</div>
									<div class="price-selet">
										<h3><span>$</span>100</h3>
										<a href="booking.php"><button>Book Now<button></a>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"> 

						</div>
						<hr>	

			</div>
	 <!--// rooms & rates -->
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