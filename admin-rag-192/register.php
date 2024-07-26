<?php
include 'common-header.php';
// Include config file
require_once "config.php"; 
// Define variables and initialize with empty values
if (isset($_SESSION['username'])){
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = ""; 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT `id` FROM `users` WHERE `username` = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO `users` (`username`, `password`) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = $password; // Creates a password hash
            
            // Attempt to execute the prepared statement
           if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                // header("location: index.php");
               $statusMsg="New User added Successfully";

            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($conn);

}
?>
 <div id="page-wrapper" >
            <div id="page-inner">
                <?php if(!empty($statusMsg)){ ?>
                    <div class="alert alert-success"><?php echo $statusMsg; ?></div>
                <?php } ?>
                <div class="row">
                    <div class="col-lg-12">
                     <h2>Register New Admin User</h2>   
                    </div>
                </div> 
        
       
        <form id="admin-sign-up" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
               <div class="form-header">
            		<a href="#">राम अवतार गुप्त प्रतिभा पुरस्कार 2020</a>   
                    <h2 class="step-heading">Sign Up</h2> 
                    <p>Please fill this form to create an account.</p>        		
            	</div>                
            <div class="form-row <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
			<div class="form-group">
                <label>Username</label>				
                <input type="text" name="username" class="form-control" >
                <span class="help-block"><?php echo $username_err; ?></span>
				</div>
            </div>    
            <div class="form-row <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
			<div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
			</div>	
            </div>
            <div class="form-row <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
			<div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
			</div>	
            </div>
            <div class="form-row">
                <input type="submit" class="button btn btn-danger btn-sm" value="Submit">
                <input type="reset" class="button btn btn-danger btn-sm" value="Reset">
            </div>         
        </form>
        </div>
        </div>
<?php
include('common-footer.php');
}
else{
	
	// Redirect user to welcome page
    header("location: index.php");
}	
?> 