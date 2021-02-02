<?php
 ob_start();
 session_start();
if(isset($_SESSION["id"]))
{
	include_once "headerAfter.php";
}
else
{
	include_once "index.php";		 
}
?>
   <center> <div class=" container "   >
   <div class="row  col-md-6 logo-w3layouts text-center">
   <center>

    <h1>Profile Page </h1>
	<table class="table table-border table-striped" style="margin:25px;width:100%" >
	
    <?php
        include_once "user.php";
        $cust=new user();
        $rs=$cust->GetByID();
		if($row=mysqli_fetch_assoc($rs))
		{
	?>
	
	<tr><td colspan="2"  style="text-align:center">
	<?php	if( file_exists("user/".$_SESSION["id"].".jpg")){

?>
   <img src="user/<?php echo($_SESSION["id"]) ?>.jpg" width="200px" height="200px"/> </td> </tr> 
 
<?php
	}
else{
	
	?>
<img src='user/user.jpg' width='200px' height='200px'/> </td> </tr>

<?php  }?>


 <tr><td>Full Name </td><td> <?php echo($row["name"]); ?> </td></tr>
 <tr><td>Phone </td><td> <?php echo($row["phone"]); ?>  </td></tr>
 <tr><td>Email </td><td> <?php echo($row["email"]); ?>  </td></tr>
 <tr><td>Country </td><td> <?php echo($row["country"]); ?>  </td></tr>
 <tr><td>Type </td><td> <?php echo($row["type"]); ?>  </td></tr>
 <tr><td>budget </td><td>  <?php echo($row["badget"]); ?>  </td></tr>  
                                              
 <tr><td colspan="2" style="text-align:left"> <a href="updateprofile.php" class="btn btn-info" >Update My Profile</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <a href="addProject.php?dno=<?php echo($row[$_SESSION["id"]]);  ?>"  class="btn btn-info" >Add Project</a> </td></tr>
 <tr><td colspan="2" style="text-align:left"> <a href="showRequest.php"  class="btn btn-info" >Show My Requests</a>  </td></tr>
 <tr><td colspan="2" style="text-align:right"> <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn  btn-danger" >Delete My Account</a>  </td></tr>
<?php  } ?>

</table>
</center>
</div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-center">Unsubscribe User</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form  method="post">
						 
						<div class="form-group alert alert-danger">
						Are you sure delete your accoount ? 
							
						</div>
						<div class="right-w3l">
							<input type="submit" style="width:200px" class="btn btn-danger" value="Yes" name="btnyes">
							<a href="MyProfile.php" style="width:200px;height:45px"  class="btn btn-success">
							No </a>
						</div>
						 

						<?php
					 
						 
								if(isset($_POST["btnyes"]))
								{
							
									include_once "user.php";
									$cust=new user();
									 $msg=$cust->Delete();
									 if($msg=="ok")
										{
											$dir="user/";
											$img=$_SESSION['id'];
											$fdir= $dir.$img.".jpg";
											unlink($fdir);
											include_once "logout.php";		 
										}
										else
										   echo("<div class='alert alert-danger'> ".$msg."</div>");		
								}

							?>
					</form>
				</div>
			</div>
		</div>

		</center>


<?php
include_once "footer.php";

?>