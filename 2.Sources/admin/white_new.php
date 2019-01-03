<?php
// core configuration
include_once "../config/core.php";
 
// set page title
$page_title = "New Post";
 
// include login checker
include_once "login_checker.php";
 
// include classes
include_once '../config/database.php';
include_once '../objects/post.php';
 
// include page header HTML
include_once "layout_head.php";
 
echo "<div class='col-md-12'>";
    // if form was posted
    if($_POST){
    
        // get database connection
        $database = new Database();
        $db = $database->getConnection();
    
        // initialize objects
        $post = new Post($db);
    
        // check if ten_p already exists
        if( $post->nameExists()){
            $post->id_news=$_POST['id_news'];
            $post->content=$_POST['content'];
            $post->images=$_POST['images'];
            // create the post
            if($title->create()){
                echo "<div class='alert alert-success' role='alert'> Post new complete! </div>";
                // empty posted values
                $_POST=array();
            
            }else{
                echo "<div class='alert alert-danger' role='alert'>Unable to post new. Please try again.</div>";
            }
        }
    }
    ?>
 
<form action='white_new.php' method='post' id='post_new'>
		<table  class='table-responsive'>
			<tr>
				<td colspan="2"><h3>New Post</h3></td>
			</tr>	
			<tr>
				<td nowrap="nowrap">Post title :</td>
				<td><input type='text' name='title' required value="<?php echo isset($_POST['title']) ? htmlspecialchars($_POST['title'], ENT_QUOTES) : "";  ?>" /></td>
			</tr>
			<tr>
				<td nowrap="nowrap">Content :</td>
				<td><textarea name="content"  rows="10" cols="150"  required value="<?php echo isset($_POST['content']) ? htmlspecialchars($_POST['content'], ENT_QUOTES) : "";  ?>" ></textarea></td>
            </tr>
            <tr>
				<td nowrap="nowrap">Files :</td>
				<td><input type="file" value="Chose file"name="images"  required value="<?php echo isset($_POST['images']) ? htmlspecialchars($_POST['images'], ENT_QUOTES) : "";  ?>" ></td>
            </tr>
            <td colspan="2" align="center">
                    <button type="submit" class="btn btn-primary" name="btn_submit">
                       UPLOAD
                    </button>
                </td>
 
		</table>
		
    </form>
 <?php

// include page footer HTML
include_once "layout_foot.php";
?>
