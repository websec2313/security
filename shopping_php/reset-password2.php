<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, otherwise redirect to login page
//if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
  //  header("location: index.php");
    //exit;
//}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$new_password = $confirm_password = $username=$oldpassword="";
$new_password_err = $confirm_password_err = $username_err=$oldpassword_err="";


 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    
    // validate username
    
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    // validate old password
    if(empty(trim($_POST["oldpassword"]))){
        $oldpassword_err = "Please enter your old password.";
    } else{
        $oldpassword = trim($_POST["oldpassword"]);
    }
    
 
    // Validate new password
    
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter the new password.";     
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Password must have atleast 6 characters.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm the password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
        
    // Check input errors before updating the database
    if(empty($new_password_err) && empty($confirm_password_err) && empty($username_err) && empty($oldpassword_err))
    {
        $sql1="SELECT id,username,password from users where username = ?";
        if($stmt = mysqli_prepare($link, $sql1))
        {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            // Set parameters
            $param_username = trim($_POST["username"]);
            if(mysqli_stmt_execute($stmt)){

                // Store result
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) != 1){
                    $username_err = "Wrong username.";
                } else{
                    mysqli_stmt_bind_result($stmt, $id, $username,$hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($oldpassword, $hashed_password)){
                            session_start();
                            
                            // Store data in session variables
                            //$_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                        
                            
                            // Prepare an update statement
                            $sql = "UPDATE users SET password = ? WHERE id = ?";
        
                            if($stmt = mysqli_prepare($link, $sql))
                            {
                                 // Bind variables to the prepared statement as parameters
                                 mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);
            
                                 // Set parameters
                                 $param_password = password_hash($new_password, PASSWORD_DEFAULT);
                                 $param_id = $_SESSION["id"];
                            }
                            
            
                                  // Attempt to execute the prepared statement
                                  if(mysqli_stmt_execute($stmt)){
                                  // Password updated successfully. Destroy the session, and redirect to login page
                                  session_destroy();
                                  header("location: index.php");
                                 exit();
                                   } else{
                                        echo "Oops! Something went wrong. Please try again later.";
                                      }
                                    }
                                    else{
                                        $oldpassword_err ="Your oldpassword is not matched";
                                    }
                                }
                            }
                        } 
                                      // Close statement
            mysqli_stmt_close($stmt);
        }

    }           

        // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
    <div style="display: flex;justify-content: center;align-items: center;min-height: 100vh;">
     <div class="wrapper">
        <h2>Reset Password</h2>
        <p>Please fill out this form to reset your password.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
        <div class="form-group">
                <label>User name</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group">
                <label>Old password</label>
                <input type="password" name="oldpassword" class="form-control <?php echo (!empty($oldpassword_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $oldpassword; ?>">
                <span class="invalid-feedback"><?php echo $oldpassword_err; ?></span>
            </div>

            <div class="form-group">
                <label>New Password</label>
                <input type="password" name="new_password" class="form-control <?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $new_password; ?>">
                <span class="invalid-feedback"><?php echo $new_password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a class="btn btn-link ml-2" href="welcome.php">Cancel</a>
            </div>
        </form>
      </div>  
    </div>  
</body>
</html>