<?php
  $otp="";
  $otp_err="";
  #$python_error=$argv[1];
  putenv("OTPKEY=g2rd6774hw89l1lDhn");
  $otppass = getenv('OTPKEY');

  if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty(trim($_POST["otp"]))){
        $otp_err = "Please enter passkey.";
    }
    else{
       $otp= trim($_POST["otp"]);
      }


    if(empty($otp_err)){
        
        if($otp==$otppass){
            $command = escapeshellcmd(command: "python otppage.py");
            exec($command);
            header("location: unlock.html");
            
          
        }else{
             $login_err = "Access Denied,please enter the correct passkey";
          }
    }else{
         $login_err = "oops!something went wrong";
     
        }
    
 
  }
  
  
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>Login form</title>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet">
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
    <div class="wrapper">
      
        <h1>VERIFICATION</h1>
       <div class="form-control"> 
        <br>
        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>
       </div>
       <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          
        
            <div class="input-box">
                
                <input  type="text" name="otp" placeholder="Enter passkey"  class="form-control <?php echo (!empty($otp_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $otp; ?>">
                <span class="invalid-feedback"><?php echo $otp_err; ?></span>
                <i class="bx bxs-user"></i>
            </div>    
            <input type="submit" class="btn" value="Enter" name="Enter">
       </form>
    </div>
</body>
</html>           
