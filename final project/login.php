<?php

// session_start();


?>
<div class="overlay-login text-left">
	<button type="button" class="overlay-close1">
		<i class="fa fa-times" aria-hidden="true"></i>
	</button>
	<div class="wrap">
		<h5 class="text-center mb-4">Login Now</h5>
		<div class="login p-5 bg-dark mx-auto mw-100">
			<form action="#" method="post">
				<div class="form-group">
					<label class="mb-2">Email address</label>
					<input type="email" name="txtuser" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div>
				<div class="form-group">
					<label class="mb-2">Password</label>
					<input type="password" name="txtpass" class="form-control" id="exampleInputPassword1" placeholder="">
				</div>
				<div class="form-check mb-2">
					<input type="checkbox" name="chkrem" class="form-check-input" id="exampleCheck1">
					<label class="form-check-label" for="exampleCheck1">login Me</label>
					
				</div>
				<a href ="CheckEmail.php"  style="color:aliceblue">  forgget password...<a>
					<br>
					<br>
				<button type="submit" class="btn btn-primary submit mb-4" name="btnlogin">Sign In</button>
				<button class="btn btn-primary submit mb-4"> <a href="register.php"> create acount </a></button>
				<button class="btn btn-primary submit mb-4"> <a href="register.php"> log out </a></button>





				<?php

				if (isset($_COOKIE['usercookie'])) {
					echo ("index.php");
				}

				if (isset($_POST["btnlogin"])) {
					include_once "user.php";
					$cust = new user();
					$cust->setphone($_POST["txtuser"]);
					$cust->setemail($_POST["txtuser"]);
					$cust->setpassword($_POST["txtpass"]);
					$rs = $cust->Login();
					if ($row = mysqli_fetch_assoc($rs)) {
						$_SESSION["id"] = $row["id"];
						$_SESSION["cname"] = $row["name"];
						if (isset($_POST["chkrem"])) {
							setcookie("usercookie", $_POST["txtuser"], time() + 60 * 60 * 24 * 365); //login me// file name--data--expire date
						}
						echo ("<script> window.open('index.php', '_self')</script>");
					} else {
						echo ("<br/><div class='alert alert-danger'> Invaild Data login </div>");
					}
				}
				?>









			</form>
		</div>
		<!---->
	</div>
</div>