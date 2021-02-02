<?php
 ob_start();
 session_start();
if(isset($_SESSION["id"]))
{
	include_once "headerAfter.php";
}
else{
	include_once "index.php";}
?>




 
<link rel="stylesheet" href="css/mobiscroll.javascript.min.css">
    <script src="js/mobiscroll.javascript.min.js"></script>

<!-- //breadcrumbs -->
<!-- register -->
	<div class="register">
        <form method="post" enctype="multipart/form-data">
		<div class="container   text-center">
            <h2  class="logo-w3layouts" >Update Profile Page</h2>
            <center>

      

         <table class="table table-border table-striped" style="width:80%">
       
         <?php
           if(isset($_POST["btnupdate"]))
           {
$x=1;
            $reg="/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";
            if($x==1)
            {
               include_once "user.php";
               $cust=new user();
               $cust->setname($_POST["txtname"]);
               $cust->setpassword($_POST["txtpass"]);
               $cust->setphone($_POST["txtphone"]);
               $cust->setemail($_POST["txtemail"]);
               $cust->setcountry($_POST["scountry"]);
            
               $cust->settype($_POST["rdgender"]);
               

               $ms=$cust->Update();
               if($ms=="ok")
               {

                $dir="user/";
                $image=$_FILES['fileupload']['name'];              
                $temp_name=$_FILES['fileupload']['tmp_name'];
            
                //$size = filesize($temp_name);
                //echo($size);
                $img=$_SESSION["id"];
                if($image!="")
                {
                    $fdir= $dir.$img.".jpg";
                    move_uploaded_file($temp_name, $fdir);
                }

                   echo("<script> window.open('MyProfile.php', '_self')</script>");	
                   //echo("<div class='alert alert-success'> Your Account has been Updated </div>");
               }
               else if(strpos($ms,"Phone"))
               {
                echo("<div class='alert alert-warning'>This Phone Is Used</div>");
               }
               else if(strpos($ms,"Email"))
               {
                echo("<div class='alert alert-warning'>This Email Is Used</div>");
               }
               else{
                   echo("<div class='alert alert-danger'>$ms</div>");
               }
               }
               else
               {echo("<div class='alert alert-warning'>This Password Is Weak , Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character</div>");

               }
           }
       ?>
       <?php
        include_once "user.php";
        $cust=new user();
        $rs=$cust->GetByID();
        if($row=mysqli_fetch_assoc($rs))
		{
    ?>
      
       
             <tr> <td> Full name </td>
             <td><input type="text" class="form-control" value="<?php echo($row["name"]); ?>" required name="txtname"/></td></tr>
             <tr> <td> Password </td>
             <td><input type="password" class="form-control" value="<?php echo($row["password"]); ?>" required name="txtpass"/></td></tr>
             <tr> <td> Phone </td>
             <td><input type="text" class="form-control" value="<?php echo($row["phone"]); ?>" required name="txtphone"/></td></tr>
             <tr> <td> Email </td>
             <td><input type="email" class="form-control" value="<?php echo($row["email"]); ?>" required name="txtemail"/></td></tr>
             <tr> <td> Country </td>
             <td> 
             <input type="text" class="form-control" value="<?php echo($row["country"]); ?>" required name="scountry"/>
             </td></tr>
              <tr> <td> Type </td>
             <td>
             <input type="radio"   required name="rdgender" <?php if($row["type"]=="Mostathmer") echo("Checked"); ?> value="Mostathmer" style="margin:10px"/>Mostathmer 
             <input type="radio"  required name="rdgender" <?php if($row["type"]=="seller") echo("Checked"); ?>  value="seller" style="margin:10px"/>seller
            </td></tr>
               
             <tr> <td> Upload Image Profile </td>
             <td><input type="file" class="form-control"  name="fileupload"/></td></tr>
           

             <tr> 
             <td colspan="2" style="text-align:center"><input type="submit" class="btn btn-success" style="width:35%" value="Update My Profile" name="btnupdate" /></td></tr>


        <?php } ?>
</table>

</center>
</div>
</div> 





<?php
include_once "footer.php";

?>