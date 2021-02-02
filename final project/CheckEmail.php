<?php
session_start();
include_once "headerBefor.php";


?>
<center>
<div class="container m-auto logo-w3layouts">
<div class="login p-5 bg-dark   w-50">
			<form action="#" method="post">
				<div class="form-group">
					<label class="mb-2">Email address</label>
					<input type="email" name="txtemail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div>
				
                
                <!-- <input type="submit" name="btncheck" class="btn btn-primary submit mb-4" value=" check your email"  placeholder=""> -->
				<button class="btn btn-primary submit mb-4"  name="btncheck">  check your email</a></button>
				
             
				<button class="btn btn-primary submit mb-4"> <a href="register.php"> create acount </a></button>
				
             
					<?php
use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\SMTP;
 use PHPMailer\PHPMailer\Exception;
 
 // Load Composer's autoloader
 require 'vendor/autoload.php';

 if(isset($_POST["btncheck"]))
 {
         include_once "user.php";
         $cust=new user();
          
         $cust->setemail($_POST["txtemail"]);
      
         $rs=$cust->GetByEmail();
         if($row=mysqli_fetch_assoc($rs))
         {
          
             $no=rand(1111,9999);
             $link="http://localhost:8080/nti%201/final%20project/updatepassword.php?id=".$row["id"];
            

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
   // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = "yourmobileapp2017@gmail.com";                     // SMTP username
    $mail->Password   = "ABCD@123456";                               // SMTP password
    $mail->SMTPSecure = "TLS";         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    //Recipients
    $mail->setFrom('yourmobileapp2017@gmail.com', 'Mailer');
    $mail->addAddress($_POST["txtemail"], 'Joe User');     // Add a recipient
    $mail->Subject = 'Forget Password';
    $mail->Body ="Dear : ".($row["name"])."\n Your Verfication Code is ".$no."\n Please Clike here To Update Password ".$link;
    $mail->send();
    echo 'Message has been sent';
       } 
     catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      }


           }
 }
 ?>
 

			</form>
			</div>
            </div>
            </center>
            


	<!-- js file -->
</body>

</html>