<?php
// core configuration
include_once "../config/core.php";
 
// set page title
$page_title = "Delete User";
 
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
            if($user->deleteUser()){
                echo "<div class='alert alert-success' role='alert'> Delete User Complete! </div>";
           
                // empty posted values
                $_POST=array();
            
            }else{
                echo "<div class='alert alert-danger' role='alert'>Unable to deleted because access_level = 'Admin'.</div>";
            }
        }
    
        else{
            echo "<div class='alert alert-danger'>";
                echo "The email you specified has not been registered. Please try again ";
            echo "</div>";
            
        }
    }
    ?>
    <form action='delete_user.php' method='post' id='delete_user'>
    
        <table class='table table-responsive'>

            <tr>
                <td>Email</td>
                <td><input type='email' name='email' class='form-control' required value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES) : "";  ?>" /></td>
            </tr>    
    
            <tr>
                <td></td>
                <td>
                    <button type="submit" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus"></span> Delete
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