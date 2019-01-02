<?php
// core configuration
include_once "../config/core.php";
 
// set page title
$page_title = "Add Room";
 
// include login checker
include_once "login_checker.php";
 
// include classes
include_once '../config/database.php';
include_once '../objects/room.php';
include_once "../libs/php/utils.php";
 
// include page header HTML
include_once "layout_head.php";
 
echo "<div class='col-md-12'>";
 
    // add room form HTML will be here
    // code when form was submitted will be here
    // if form was posted
    if($_POST){
    
        // get database connection
        $database = new Database();
        $db = $database->getConnection();
    
        // initialize objects
        $room = new Room($db);
    
        // check if ten_p already exists
        if($room->nameExists()){
            $room->id_p=$_POST['id_p'];
            $room->id_lp=$_POST['id_lp'];
            $room->id_ttp=$_POST['id_ttp'];
            // create the ten_p
            if($ten_p->create()){
                echo "<div class='alert alert-success' role='alert'> Create room complete! </div>";
                // empty posted values
                $_POST=array();
            
            }else{
                echo "<div class='alert alert-danger' role='alert'>Unable to Add room. Please try again.</div>";
            }
        }
    }
    ?>
    <form action='add_room.php' method='post' id='add_room'>
    
        <table class='table table-responsive'>
    
            <tr>
                <td class='width-30-percent'>Name Room</td>
                <td><input type='text' name='ten_p' class='form-control' required value="<?php echo isset($_POST['ten_p']) ? htmlspecialchars($_POST['ten_p'], ENT_QUOTES) : "";  ?>" /></td>
            </tr>
    
            <tr>
                <td>Kind Of Room</td>
                <td><input type='text' name='id_lp' class='form-control' required value="<?php echo isset($_POST['id_lp']) ? htmlspecialchars($_POST['id_lp'], ENT_QUOTES) : "";  ?>" /></td>
            </tr>
    
            <tr>
                <td>Room Status</td>
                <td><input type='text' name='id_ttp' class='form-control' required value="<?php echo isset($_POST['id_ttp']) ? htmlspecialchars($_POST['id_ttp'], ENT_QUOTES) : "";  ?>" /></td>
            </tr>
    
            <tr>
                <td></td>
                <td>
                    <button type="submit" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus"></span>Add Room
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