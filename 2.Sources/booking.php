<?php
include "controller/connection.php";
include_once "config/core.php"; 
include_once "config/database.php";
include_once "objects/booking.php";
include_once "libs/php/utils.php";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />  
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Booking Royal-Hotel</title>
	<!-- Bootstrap Styles-->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="css/fontawesome.min.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="css/booking.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="index.php"><i class="fa fa-home"></i> Home</a>
                    </li>
                    
					</ul>

            </div>

        </nav>
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            RESERVATION <small></small><hr>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <div class="row">
                
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-body">
						<form name="form" method="post">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type='text' name='firstname' class='form-control' required value="<?php echo isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname'], ENT_QUOTES) : "";  ?>" />
                                
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type='text' name='lastname' class='form-control' required value="<?php echo isset($_POST['lastname']) ? htmlspecialchars($_POST['lastname'], ENT_QUOTES) : "";  ?>" />
                                        
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type='text' name='phone_number' class='form-control' required value="<?php echo isset($_POST['phone_number']) ? htmlspecialchars($_POST['phone_number'], ENT_QUOTES) : "";  ?>" />
                                
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type='email' name='email' class='form-control' required value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES) : "";  ?>" />
                                
                            </div>
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-body">
								<div class="form-group">
                                    <label>Type Of Room *</label>
                                    <select name="ten_lp"  class="form-control" required>
                                        <option value selected ></option>
                                        <option value="Deluxe Room">DELUXE ROOM</option>
                                        <option value="Vip Room">VIP ROOM</option>
                                        <option value="Double Room">DOUBLE ROOM</option>
                                        <option value="Single Room">SINGLE ROOM</option>
                                    </select>
                              </div>
							  <div class="form-group">
                                    <label>No.of Rooms *</label>
                                    <select name="so_p" class="form-control" required>
                                        <option value selected ></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                              </div>
							  <div class="form-group">  
                                    <label>Check-In</label>
                                    <input type='date' name='check_in' class='form-control' required value="<?php echo isset($_POST['check_in']) ? htmlspecialchars($_POST['check_in'], ENT_QUOTES) : "";  ?>" />
                                    
                               </div>
							   <div class="form-group">
                                    <label>Check-Out</label>
                                    <input type='date' name='check_out' class='form-control' required value="<?php echo isset($_POST['check_out']) ? htmlspecialchars($_POST['check_out'], ENT_QUOTES) : "";  ?>" />
                                    
                               </div>
                       </div>
                        
                    </div>
                </div>
				
				
                <div class="col-md-12 col-sm-12">
                    <div class="well"><hr>  
						<input type="submit" name="submit" class="btn btn-primary">
						<?php
                            if($_POST){
    
                                // get database connection
                                $database = new Database();
                                $db = $database->getConnection();
                            
                                // initialize objects
                                $book = new Booking($db);
                                $utils = new Utils();
                            
                                // set book email to detect if it already exists
                                $book->email=$_POST['email'];
                            
                                // check if email already exists

                                $book->firstname=$_POST['firstname'];
                                $book->lastname=$_POST['lastname'];
                                $book->ten_lp=$_POST['ten_lp'];
                                $book->so_p=$_POST['so_p'];
                                $book->check_in=$_POST['check_in'];
                                $book->check_out=$_POST['check_out'];
                                $book->phone_number=$_POST['phone_number'];
                                $book->statusBooking=0;
                                if($book->create()){
                                    // send confimation email
                                    $send_to_email=$_POST['email'];
                                    $body="Hi {$send_to_email}.<br /><br />";
                                    $body.="
                                        Congratulations on your successful booking: {$home_url}login.php";
                                    $subject="Verification Email";
                                
                                    if($utils->sendEmailViaPhpMail($send_to_email, $subject, $body)){
                                        echo "<div class='alert alert-success'>
                                            Congratulations on your successful booking.
                                        </div>";
                                    }
                                
                                    else{
                                        echo "<div class='alert alert-danger'>
                                            Not Found.
                                        </div>";
                                    }
                                
                                    // empty posted values
                                    $_POST=array();
                                
                                }else{
                                    echo "<div class='alert alert-danger' role='alert'>Unable to booking. Please try again.</div>";
                                }
                                
                            }
						?>
						</form>
							
                    </div>
                </div>
            </div>
                </div>
					</div>
            </div>
        </div>
    <script src="js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="js/booking.js"></script>
    
   
</body>
</html>
