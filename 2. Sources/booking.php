<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booking | Royal Hotel</title>
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

<!-- BOOKING -->
        <div class="gdlr-page-title-wrapper">
            <div class="gdlr-page-title-overlay"></div>
            <div class="gdlr-page-title-container container">
                <h1 class="gdlr-page-title">Booking</h1>
            </div>
        </div>
        <!-- is search -->
        <div class="content-wrapper">
            <div class="gdlr-content">

                <div class="with-sidebar-wrapper">
                    <div class="with-sidebar-container container gdlr-class-no-sidebar">
                        <div class="with-sidebar-left twelve columns">
                            <div class="with-sidebar-content twelve columns">
                                <div class="gdlr-item gdlr-item-start-content" id="gdlr-single-booking-content" data-ajax="https://demo.goodlayers.com/hotelmaster/wp-admin/admin-ajax.php">

                                    <form class="gdlr-reservation-bar" data-action="gdlr_hotel_booking">
                                        <div class="gdlr-reservation-bar-title">Your Reservation</div>
                                        <div class="gdlr-reservation-bar-summary-form" ></div>
                                        <div class="gdlr-reservation-bar-room-form" ></div>
                                        <div class="gdlr-reservation-bar-date-form">
                                            <div class="gdlr-reservation-field gdlr-resv-datepicker"><span class="gdlr-reservation-field-title">Check In</span>
                                                <div class="gdlr-datepicker-wrapper">
                                                    <input type="text" id="gdlr-check-in" class="gdlr-datepicker" autocomplete="off" data-dfm="d M yy" data-block="[&quot;2018-02-14&quot;,&quot;2018-02-15&quot;]" value="2018-05-03">
                                                    <input type="hidden" class="gdlr-datepicker-alt" name="gdlr-check-in" autocomplete="off" value="2018-05-03">
                                                </div>
                                            </div>
                                            <div class="gdlr-reservation-field gdlr-resv-combobox "><span class="gdlr-reservation-field-title">Night</span>
                                                <div class="gdlr-combobox-wrapper">
                                                    <select name="gdlr-night" id="gdlr-night">
                                                        <option value="1" selected="">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                            <div class="gdlr-reservation-field gdlr-resv-datepicker"><span class="gdlr-reservation-field-title">Check Out</span>
                                                <div class="gdlr-datepicker-wrapper">
                                                    <input type="text" id="gdlr-check-out" class="gdlr-datepicker" autocomplete="off" data-min-night="1" data-dfm="d M yy" data-block="[&quot;2018-02-14&quot;,&quot;2018-02-15&quot;]" value="2018-05-04">
                                                    <input type="hidden" class="gdlr-datepicker-alt" name="gdlr-check-out" autocomplete="off" value="2018-05-04">
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                            <div class="gdlr-reservation-field gdlr-resv-combobox gdlr-reservation-bar-room-number"><span class="gdlr-reservation-field-title">Rooms</span>
                                                <div class="gdlr-combobox-wrapper">
                                                    <select name="gdlr-room-number" id="gdlr-room-number">
                                                        <option value="1" selected="">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                            <div class="gdlr-reservation-people-amount-wrapper" id="gdlr-reservation-people-amount-wrapper">
                                                <div class="gdlr-reservation-people-amount">
                                                    <div class="gdlr-reservation-people-title">Room <span>1</span></div>
                                                    <div class="gdlr-reservation-field gdlr-resv-combobox "><span class="gdlr-reservation-field-title">Adults</span>
                                                        <div class="gdlr-combobox-wrapper">
                                                            <select name="gdlr-adult-number[]">
                                                                <option value="1">1</option>
                                                                <option value="2" selected="">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="gdlr-reservation-field gdlr-resv-combobox "><span class="gdlr-reservation-field-title">Children</span>
                                                        <div class="gdlr-combobox-wrapper">
                                                            <select name="gdlr-children-number[]">
                                                                <option value="0">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="clear"></div><a id="gdlr-reservation-bar-button" class="gdlr-reservation-bar-button gdlr-button with-border" href="#">Check Availability</a>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="gdlr-reservation-bar-service-form" id="gdlr-reservation-bar-service-form"></div>
                                    </form>
                                    <div class="gdlr-booking-content">
                                        <div class="gdlr-booking-process-bar" id="gdlr-booking-process-bar" data-state="1">
                                            <div data-process="1" class="gdlr-booking-process gdlr-active">1. Choose Date</div>
                                            <div data-process="2" class="gdlr-booking-process ">2. Choose Room</div>
                                            <div data-process="3" class="gdlr-booking-process ">3. Make a Reservation</div>
                                            <div data-process="4" class="gdlr-booking-process ">4. Confirmation</div>
                                        </div>
                                        <div class="gdlr-booking-content-wrapper">
                                            <div class="gdlr-booking-content-inner" id="gdlr-booking-content-inner">
                                                <div class="gdlr-datepicker-range-wrapper">
                                                    <div class="gdlr-datepicker-range" id="gdlr-datepicker-range" data-dfm="d M yy" data-block="[&quot;2018-02-14&quot;,&quot;2018-02-15&quot;]"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>

                            <div class="clear"></div>
                        </div>

                        <div class="clear"></div>
                    </div>
                </div>

            </div>
            <!-- gdlr-content -->
            <div class="clear"></div>
        </div>
        <!-- content wrapper -->
    </div>
    <!-- body-wrapper -->

    <script type='text/javascript' src='js\jquery\jquery.js'></script>
    <script type='text/javascript' src='js\jquery\jquery-migrate.min.js'></script>
    <script type='text/javascript' src='js\jquery\ui\core.min.js'></script>
    <script type='text/javascript' src='js\jquery\ui\datepicker.min.js'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var objectL10n = {
            "closeText": "Done",
            "currentText": "Today",
            "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            "monthStatus": "Show a different month",
            "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
            "firstDay": "1"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='plugins\gdlr-hostel\gdlr-hotel.js'></script>
    <script type='text/javascript' src='plugins\superfish\js\superfish.js'></script>
    <script type='text/javascript' src='js\hoverIntent.min.js'></script>
    <script type='text/javascript' src='plugins\dl-menu\modernizr.custom.js'></script>
    <script type='text/javascript' src='plugins\dl-menu\jquery.dlmenu.js'></script>
    <script type='text/javascript' src='js\jquery.easing.js'></script>
    <script type='text/javascript' src='js\jquery.transit.min.js'></script>
    <script type='text/javascript' src='plugins\fancybox\jquery.fancybox.pack.js'></script>
    <script type='text/javascript' src='plugins\fancybox\helpers\jquery.fancybox-media.js'></script>
    <script type='text/javascript' src='plugins\fancybox\helpers\jquery.fancybox-thumbs.js'></script>
    <script type='text/javascript' src='plugins\flexslider\jquery.flexslider.js'></script>
    <script type='text/javascript' src='js\jquery.isotope.min.js'></script>
    <script type='text/javascript' src='js\gdlr-script.js'></script>
    <script type='text/javascript' src='plugins\gdlr-portfolio\gdlr-portfolio-script.js'></script>
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
