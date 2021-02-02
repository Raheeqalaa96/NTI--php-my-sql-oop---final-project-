<?php
 ob_start();
 session_start();
if(isset($_SESSION["id"]))
{
	include_once "headerAfter.php";
}
else{
	include_once "index.php";
	//echo("<script> window.open('headerBefor', '_self')</script>");		 
}
?>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/login_overlay.css" rel='stylesheet' type='text/css' />
	<link href="css/style6.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/shop.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/checkout.css">
	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">

<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container">
			<div class="inner-sec-shop px-lg-4 px-3">
				<h3 class="tittle-w3layouts my-lg-4 mt-3">My Requests </h3>
				<div class="checkout-right">
					<h4>Your Requests Are :
						
					</h4>
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>SL No.</th>
								<th>Project Name</th>
								<th>date of request</th>
								<th>Mostathmer Name </th>
								<th>state</th>
								<th>Accept </th>
								
							</tr>
						</thead>
						<tbody>
						<?php                             	include_once "projects.php";
																include_once "request.php";
																
																$dept=new request();
																$rs=$dept->GetAll();
																$row=mysqli_fetch_assoc($rs);
																while($row=mysqli_fetch_assoc($rs))
																{$x=1;
																	// echo($row["id_request"]."@");
																
																	$proj=new projects();
																$rss=$proj->GetByid($row["project_id"]);
																// echo($row["id_request"]."@@@");
																if($roww=mysqli_fetch_assoc($rss))
															  
																{
																	
																	
																	// echo($row["id_request"]."%");
																	
																	if($roww["user id"]==$_SESSION["id"])
                                                              	{
																	//   echo($row["id_request"]."&");
?>
																			<tr class="rem1">
																				<td class="invert"><?php echo( $x) ?></td>
																				<td class="invert-image">
																					<a href="single.php?pro=<?php echo($roww["project_id"]);?>">
																					<?php echo($roww["project_name"]);?>	</a>
																				</td>
																				<td class="invert">
																				<?php echo($row["date"]);?>
																				</td>
																				<td class="invert">
																					
																					<?php
																					include_once "user.php";
																					$user=new user();
																					$userr=$user-> GetByIDD($row["user_id"]);
																					if($userrr=mysqli_fetch_assoc($userr))
																					{echo($userrr["name"]);}
																					?>
																			
																			
																			
																			
																			</td><form action="" method="post">
																			    <td class="invert"><?php echo($row["state"]);?></td>
																				<td class="invert"><input type="submit" value="accept" name="<?php echo($row["id_request"])?>"> </input></td>
																				
																			</tr>

															<?php  $x++; 
														}
														
													}
													// echo($row["id_request"]."#");
														
													if(isset($_POST[$row["id_request"]]))
													{ 
														$up=new request();
														$upp=$up->Updatestate($row["id_request"]);
														$del=new projects();
														$dell=$del->UpdateProjectByID($roww["project_id"]);
													}
													// echo($row["id_request"]."!");
									
														
														}
														
														
													
														?>


															

<input  type="submit"   name="refresh "class="btn btn-primary submit mb-4"> </input>            
<?php if(isset($_POST["refresh"]))
																	
														
														?>
															</form>
														

						</tbody>
					</table>
				</div>
				
					

			</div>

		</div>
	</section>

<?php 
	include_once "footer.php";

?>