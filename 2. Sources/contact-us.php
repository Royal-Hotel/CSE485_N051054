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
    <link rel="stylesheet" href="AXY-Contact-Us.css" />
    <link rel="stylesheet" href="AXY-Contact-Us1.css" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div>
        <div>
            <div class="jumbotron-contact jumbotron-contact-sm">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-lg-12">
                            <h1 class="h1">Contact us<small>Feel free to contact us</small></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="well well-sm">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"><label for="name">Name</label><input type="text" class="form-control" id="name" placeholder="Enter name" required="required" /></div>
                                        <div class="form-group"><label for="email">Email Address</label>
                                            <div class="input-group"><span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span><input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                                        </div>
                                        <div class="form-group"><label for="subject">Subject</label><select id="subject" name="subject" class="form-control" required="required"><option value="na" selected>Choose One:</option><option value="service">General Customer Service</option><option value="suggestions">Suggestions</option><option value="product">Product Support</option></select></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><label for="name">Message</label><textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required" placeholder="Message"></textarea></div>
                                    </div>
                                    <div class="col-md-12"><button type="submit" class="btn btn-primary pull-right" id="btnContactUs">Send Message</button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <form>
                            <legend><span class="glyphicon glyphicon-globe"></span>Our office</legend><address><strong>Twitter, Inc.</strong><br />795 Folsom Ave, Suite 600<br />San Francisco, CA 94107<br /><abbr title="Phone">P:</abbr>(123) 456-7890</address><address><strong>Full Name</strong><br /><a href="mailto:#">first.last@example.com</a></address></form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>