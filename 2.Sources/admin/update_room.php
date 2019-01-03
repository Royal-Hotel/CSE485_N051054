<?php
// core configuration
include_once "../config/core.php";
 
// set page title
$page_title = "Update Room";
 
// include login checker
include_once "login_checker.php";
 
// include classes
include_once '../config/database.php';
include_once '../objects/room.php';
 
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
        $room = new Room($db);
    
        // set room email to detect if it already exists
        $room->ten_p=$_POST['ten_p'];
    
        // check if email already exists
        if($room->nameExists()){
            $room->status=$_POST['status'];

            // create the room
            if($room->updateRoom()){
                echo "<div class='alert alert-success' role='alert'> Update room Complete! </div>";
           
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
    <form action='update_room.php' method='post' id='update_room'>
    
        <table class='table table-responsive'>

            <tr>
                <td class='width-30-percent'>Name</td>
                <td><input type='text' name='ten_p' class='form-control' required value="<?php echo isset($_POST['ten_p']) ? htmlspecialchars($_POST['ten_p'], ENT_QUOTES) : "";  ?>" /></td>
            </tr>
    
            <tr>
                <td>Status Room</td>
                <td><input type='text' name='status' class='form-control' required value="<?php echo isset($_POST['status']) ? htmlspecialchars($_POST['status'], ENT_QUOTES) : "";  ?>" /></td>
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