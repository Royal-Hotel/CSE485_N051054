<?php
// core configuration
include_once "../config/core.php";
 
// set page title
$page_title = "Update User";
 
// include login checker
include_once "login_checker.php";
 
// include classes
include_once '../config/database.php';
include_once '../objects/user.php';
 
// include page header HTML
include_once "layout_head.php";
 
echo "<div class='col-md-12'>";
 
    // registration form HTML will be here
    // code when form was submitted will be here
    // if form was posted
    if($_POST){
    
        // get database connection
        $database = new Database();
        $db = $database->getConnection();
    
        // initialize objects
        $user = new User($db);
    
        // set user email to detect if it already exists
        $user->email=$_POST['email'];
    
        // check if email already exists
        if($user->emailExists()){
            $user->firstname=$_POST['firstname'];
            $user->lastname=$_POST['lastname'];
            $user->contact_number=$_POST['contact_number'];
            $user->address=$_POST['address'];
            $user->password=$_POST['password'];
            $user->access_level=$_POST['access_level'];
            // access code for email verification

            // create the user
            if(mysql_num_rows($query>0)){
                $array=mysql_fetch_array($query);
                echo "<div class='alert alert-success' role='alert'> Update User Complete! </div>";
           
                // empty posted values
                $_POST=array();
            
            }else{
                echo "<div class='alert alert-danger' role='alert'>Unable to update. Please try again.</div>";
            }
        }
    
        else{
            echo "<div class='alert alert-danger'>";
                echo "The email you specified has not been registered. Please try again ";
            echo "</div>";
            
        }
    }
    ?>
    <form action='update_user.php' method='post' id='update_user'>
    
        <table class='table table-responsive'>

            <tr>
                <td>Email</td>
                <td><input type='email' name='email' class='form-control' required value="<?php $array['email']; ?>" /></td>
            </tr>    
    
            <tr>
                <td class='width-30-percent'>Firstname</td>
                <td><input type='text' name='firstname' class='form-control' required value="<?php echo isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname'], ENT_QUOTES) : "";  ?>" /></td>
            </tr>
    
            <tr>
                <td>Lastname</td>
                <td><input type='text' name='lastname' class='form-control' required value="<?php echo isset($_POST['lastname']) ? htmlspecialchars($_POST['lastname'], ENT_QUOTES) : "";  ?>" /></td>
            </tr>
    
            <tr>
                <td>Contact Number</td>
                <td><input type='text' name='contact_number' class='form-control' required value="<?php echo isset($_POST['contact_number']) ? htmlspecialchars($_POST['contact_number'], ENT_QUOTES) : "";  ?>" /></td>
            </tr>
    
            <tr>
                <td>Address</td>
                <td><textarea name='address' class='form-control' required><?php echo isset($_POST['address']) ? htmlspecialchars($_POST['address'], ENT_QUOTES) : "";  ?></textarea></td>
            </tr>

            <tr>
                <td>Access Level</td>
                <td><input type='text' name='access_level' class='form-control' required value="<?php echo isset($_POST['access_level']) ? htmlspecialchars($_POST['access_level'], ENT_QUOTES) : "";  ?>" /></td>
            </tr>
    
            <tr>
                <td>Password</td>
                <td><input type='password' name='password' class='form-control' required id='passwordInput'></td>
            </tr>
    
            <tr>
                <td></td>
                <td>
                    <button type="submit" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus"></span> Update
                    </button>
                </td>
            </tr>
    
        </table>
    </form>
    <?php
 
echo "</div>";
 
// include page footer HTML
include_once "layout_foot.php";
?>