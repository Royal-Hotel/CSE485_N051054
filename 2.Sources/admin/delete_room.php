<?php
// core configuration
include_once "../config/core.php";
 
// set page title
$page_title = "Delete Room";
 
// include login checker
include_once "login_checker.php";
 
// include classes
include_once '../config/database.php';
include_once '../objects/room.php';
 
// include page header HTML
include_once "layout_head.php";
 
echo "<div class='col-md-12'>";

    if($_POST){
    
        // get database connection
        $database = new Database();
        $db = $database->getConnection();
    
        // initialize objects
        $room = new Room($db);
    
        // set user room to detect if it already exists
        $room->ten_p=$_POST['ten_p'];
    
        // check if room already exists
        if($room->nameExists()){

            if($room->deleteRoom()){
                echo "<div class='alert alert-success' role='alert'> Delete Room Complete! </div>";
           
                // empty posted values
                $_POST=array();
            
            }else{
                echo "<div class='alert alert-danger' role='alert'>Unable to deleted because access_level = 'Admin'.</div>";
            }
        }
    
        else{
            echo "<div class='alert alert-danger'>";
                echo "The room you specified has not been registered. Please try again ";
            echo "</div>";
            
        }
    }
    ?>
    <form action='delete_room.php' method='post' id='delete_room'>
    
        <table class='table table-responsive'>

            <tr>
                <td>Name of Room</td>
                <td><input type='text' name='ten_p' class='form-control' required value="<?php echo isset($_POST['ten_p']) ? htmlspecialchars($_POST['ten_p'], ENT_QUOTES) : "";  ?>" /></td>
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