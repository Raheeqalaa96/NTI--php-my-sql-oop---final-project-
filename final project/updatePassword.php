<?php
session_start();
include_once "headerBefor.php";
?>
<center>
<div class="container m-auto logo-w3layouts">
<div class="login p-5 bg-dark   w-50">
<form method="post">



                    <div class="form-group">
					<label class="mb-2">Verfication Code</label>
					<input type="text" name="txtcode" class="form-control "placeholder="Verfication Code" required=""/><small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div>
				<div class="form-group">
					<label class="mb-2">Password</label>
					<input type="password" class="form-control" name="txtpass" placeholder="New Password" required=""/>
	</div>
                <div class="form-group">
					<label class="mb-2">Confirm New Password</label>
					<input type="password"class="form-control" name="txtconfirm" placeholder="Confirm New Password" required=""/>
	</div>


    <button class="btn btn-primary submit mb-4"    name="btnupdate"  > <a href="register.php"> Update Password</a></button>
<?php
if(isset($_POST["btnupdate"]))
{
        include_once "Customer.php";
        $cust=new user();
        if($_SESSION["code"]==$_POST["txtcode"])
        {
          if($_POST["txtpass"]==$_POST["txtconfirm"]){
              $cust->setpassword($_POST["txtpass"]);
                  $ms=$cust->UpdatePW();
                  echo("<br/><div class='alert alert-success'> Your Password Has been Updated </div>");
          }
          else
          echo("<br/><div class='alert alert-danger'>Confirm must be match password , Try Again </div>");
        }
        else
        echo("<br/><div class='alert alert-danger'> Invaild Code , Try Again </div>");
    }
?>
 

</form>
			</div>
            </div>
			</center>
 
<?php
include_once "footer.php";

?>