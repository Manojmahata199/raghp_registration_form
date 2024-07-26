<?php
ob_start();
// Initialize the session

include('header.php'); 
// Check if the user is already logged in, if yes then redirect him to welcome page
// if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
//     header("Location:dashboard.php");
//     exit;
// } 
// Include config file


include "config.php"; 
// Define variables and initialize with empty values

$username = $password = "";
$username_err = $password_err = ""; 
// Processing form data when form is submitted
if(isset($_POST['submit'])){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT * FROM `users` WHERE `username`='$username' and `password`='$password'";
        
      
        
        if($stmt = mysqli_query($conn, $sql)){
           
                
            // Check if username exists, if yes then verify password
            if(mysqli_num_rows($stmt) >= 1){                    
               
                if($res=mysqli_fetch_array($stmt)){
                    
                   // print_r($res);
                    // session_start();
                    
                    
                    // Store data in session variables
                       $_SESSION["loggedin"] = true;
                       $_SESSION["id"] = $res['id'];
                       $_SESSION["username"] = $username;
                       $_SESSION["user_type"] =$res['user_type']; 
                      
                      
                   
                   
            
                    header('location:dashboard.php?action=inbox&success=2');
                   
                   
                   ob_end_clean();
                }else{
                     // Display an error message if password is not valid
                   $password_err = "The password you entered was not valid.";
                  
                }
            
            } else{
                // Display an error message if username doesn't exist
                 $username_err = "No account found with that username & Password!!! ";
            }
        } else{
             echo "Oops! Something went wrong. Please try again later.";
            
        }
        
    }
    
}

?> 

              
           <form  method="post">
               <div class="form-header">
            		<a href="#">राम अवतार गुप्त प्रतिभा पुरस्कार 2020</a>   
                    <h2 class="step-heading">RAG ADMIN LOGIN</h2>         		
            	</div>            	
                <div class="form-row <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <div class="form-group">
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
                </div>
               </div>    
            <div class="form-row <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <div class="form-group">
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
                </div>
            </div>
            <div class="form-row" style="marging-top:20px; margin-bottom: 10px;">
                <input type="submit" name="submit" class="button btn btn-danger btn-lg" value="Login">
            </div>      
          
        </form>
<?php
include('footer.php');


?> 