<html lang="en">
<head>
<title>Estethmar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Goggles a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/login_overlay.css" rel='stylesheet' type='text/css' />
	<link href="css/style6.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/shop.css" type="text/css" />
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">

</head>
<body>
    <form method="post">
        Name <input type="text" name="txtname" class="form-control"/>
        Parent ID <select name="suser">
        <?php
                include_once "user.php";
                $cust=new user();
                $rs=$cust->GetAll();
                while($row=mysqli_fetch_assoc($rs))
                {
        ?>
            <option value="<?php echo($row["id"]); ?>"> <?php echo($row["name"]); ?> </option>

            <?php } ?>
        </select>
<input type="submit" name="btn" />
<?php
if(isset($_POST["btn"]))
{
    echo($_POST["suser"]);
}
?>


    </form>
</body>
</html>




<!-- 
//file_exists($target_file)
 mapkay=AIzaSyD1NmWaeI0YlTz7AS6T2b_1BUtk5ITyvQI 
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPRHlz0U09KfAzHJto32cCxWcSM150AKc&callback=initMap"></script>
ABC@123456
 email password 





$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = "yourmobileapp2017@gmail.com";                     // SMTP username
    $mail->Password   = "ABCD@123456";                               // SMTP password
    $mail->SMTPSecure = "TLS";         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above


 <img src="user/<?php echo($_SESSION["id"]) ?>.jpg" width="200px" height="200px"/> </td> </tr> -->

-->
