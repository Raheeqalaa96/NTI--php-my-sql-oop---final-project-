<?php
include_once "headerBefor.php";
?>
  
 
  
<!-- //breadcrumbs -->
<!-- register -->
	<div class="">
        <form method="post">
		<div class="container">
            <center> <h2>Register Page</h2></center>
            <center>

      

         <table class="table table-border table-striped" style="width:80%">
         <tr><td colspan="2">
         <?php
           if(isset($_POST["btnregister"]))
           {
//$reg="";
 $x=1;
            $reg="/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";
            if($x==1)
            {
               include_once "user.php";
               $cust=new user();
               $cust->setname($_POST["txtname"]);
              // $cust->setbudget($_POST["txtaddress"]);
               $cust->setemail($_POST["txtemail"]);
               $cust->setpassword($_POST["txtpass"]);
               $cust->setphone($_POST["txtphone"]);
               $cust->setcountry($_POST["txtcountry"]);
              // $cust->setcity($_POST["txtcity"]);
               $cust->settype($_POST["rdtype"]);
              

               $ms=$cust->Add();
               if($ms=="ok")
               {
                   echo("<div class='alert alert-success'> Your Account has been created </div>");
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
       </td></tr>
             <tr> <td> Full name </td>
             <td><input type="text" class="form-control" required name="txtname"/></td></tr>
             <tr> <td> Password </td>
             <td><input type="password" class="form-control" required name="txtpass"/></td></tr>
             <tr> <td> Phone </td>
             <td><input type="text" class="form-control" required name="txtphone"/></td></tr>
             <tr> <td> Email </td>
             <td><input type="email" class="form-control" required name="txtemail"/></td></tr>
             <!-- <tr> <td> Country </td>
             <td> 
             <select mbsc-dropdown data-input-style="box" id="demo-country-filter-desktop" name="scountry"></select> -->
             </td></tr>
             <tr> <td> country </td>
             <td><input type="text" class="form-control" required name="txtcountry"/></td></tr>
             <tr> <td> Type </td>
             <td><input type="radio"   required name="rdtype" value="Mostathmer" style="margin:10px"/>Mostathmer 
             <input type="radio"  required name="rdtype" value="seller" style="margin:10px"/>seller
            </td></tr>
            <!-- <tr> <td> Address </td>
             <td><input type="text" class="form-control" required name="txtaddress"/></td></tr> -->
             <tr> <td> <input type="checkbox" required name="checkaggree"/> </td>
             <td> I Agree your terms & Condaitions</td></tr>
             <tr> 
             <td colspan="2" style="text-align:center"><input type="submit" class="btn btn-success" style="width:35%" required name="btnregister" /></td></tr>
</table>

</center>
</div>
</div> 


<!-- dropdown nav -->
<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //dropdown nav -->
  <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->

	<script src="js/bootstrap.js"></script>
	<!-- js file -->
<?php
include_once "Footer.php";
?>