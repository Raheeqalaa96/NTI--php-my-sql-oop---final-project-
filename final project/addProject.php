<?php
ob_start();
session_start();
if (isset($_SESSION["id"])) {
    include_once "headerAfter.php";
} else {
    include_once "index.php";
}
?>




<link rel="stylesheet" href="css/mobiscroll.javascript.min.css">
<script src="js/mobiscroll.javascript.min.js"></script>

<!-- //breadcrumbs -->
<!-- register -->
<div class="register">
    <form method="post" enctype="multipart/form-data">
        <div class="container   text-center">
            <h2 class="logo-w3layouts">Add New Project </h2>
            <center>



                <table class="table table-border table-striped" style="width:80%">
                    <?php
                    if (isset($_POST["btnupdate"])) {
                      

                        include_once "projects.php";
                        $cust = new projects();
                        $cust->setprojectName($_POST["txtname"]);
                        $_SESSION["img"]=$_POST["txtname"];
                        $cust->setbudget($_POST["txtbudget"]);
                        $cust->setfeasibility_plan($_POST["txtplan"]);
                        $cust->setexecution_time($_POST["txtTime"]);
                        $cust->setprofet_value($_POST["value"]);
                        $cust->settypeOfBeneficiariess($_POST["type"]);
                        $cust->setdiscription($_POST["disc"]);
                        $cust->setcategory_id($_POST["Category"]);
                        $cust->setuserid($_SESSION["id"]);
                        $cust->setstates("Null");
                        $rs = $cust->Add();
                        if ($rs == "ok") {
                            $custt = new projects();
                        $ms = $custt->GetByName($_SESSION["img"]);

                
                            if ($row = mysqli_fetch_assoc($ms)) {
                                $dir = "projects/";
                                $image = $_FILES['fileupload']['name'];
                                $temp_name = $_FILES['fileupload']['tmp_name'];

                                //$size = filesize($temp_name);
                                //echo($size);
                                $img = $row["project_id"];
                                if ($image != "") {
                                    $fdir = $dir . $img . ".jpg";
                                    move_uploaded_file($temp_name, $fdir);
                                }
                                

                                // echo ("<script> window.open('index.php', '_self')</script>");
                                //echo("<div class='alert alert-success'> Your Account has been Updated </div>");
                            }
                




                            echo ("<div class='alert alert-success'> Your project has been Added".$cust->getprojectID()." </div> ");
                        
                        } else if (strpos($rs, "project_name")) {
                            echo ("<div class='alert alert-warning'>This name Is Used</div>");
                        } else {
                            echo ("<div class='alert alert-danger'>$rs</div>");
                        }
                        


                        
                    }


                    ?>
                    
                    <tr>
                        <td> Project name </td>
                        <td><input type="text" class="form-control" value="" required name="txtname" /></td>
                    </tr>
                    <tr>
                        <td> Feasilbility plan </td>
                        <td><input type="text" class="form-control" value="" required name="txtplan" /></td>
                    </tr>
                    <tr>
                        <td> Budget </td>
                        <td><input type="text" class="form-control" value="" required name="txtbudget" /></td>
                    </tr>
                    <tr>
                        <td> execution time </td>
                        <td><input type="text" class="form-control" value= ""required name="txtTime" /></td>
                    </tr>
                    <tr>
                        <td> Profit value </td>
                        <td>
                            <input type="text" class="form-control" value="" required name="value" />
                        </td>
                    </tr>
                    <tr>
                        <td> Type of Beneficiaries</td>
                        <td>
                            <input type="text" required name="type" value="" style="margin:10px" />
                        </td>
                    </tr>
                    <tr>
                        <td> Category name</td>
                        <td>


                            <select name="Category">



                                <!-- <div class="col-md-4 media-list span4 text-left"> -->


                                <?php
                                include_once "category.php";
                                $dept = new category();
                                $rrs = $dept->GetAll();
                                while ($row = mysqli_fetch_assoc($rrs)) {
                                ?>
                                    <option value="<?php echo ($row["category_id"]);?>"><?php echo ($row["category_name"]);  ?></option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td> discription</td>
                        <td>
                            <input type="text" required name="disc" value="" style="margin:10px" />
                        </td>
                    </tr>




                    <tr>
                        <td> Upload Image Profile </td>
                        <td><input type="file" class="form-control"  required name="fileupload" /></td>
                    </tr>



                    <tr>
                        <td colspan="2" style="text-align:center"><a href="index.php"><input type="submit" class="btn btn-success" style="width:35%" value="Add new Project" name="btnupdate" /></a></td>
                    </tr>



                </table>

            </center>
        </div>
</div>









<?php
include_once "footer.php";
?>



<!-- 

                        include_once "projects.php";
                        $custt = new projects();
                        $ms = $custt->GetByName($_SESSION["img"]);

                
                            if ($row = mysqli_fetch_assoc($ms)) {
                                $dir = "project/";
                                $image = $_FILES['fileupload']['name'];
                                $temp_name = $_FILES['fileupload']['tmp_name'];

                                //$size = filesize($temp_name);
                                //echo($size);
                                $img = $row["project_id"];
                                if ($image != "") {
                                    $fdir = $dir . $img . ".jpg";
                                    move_uploaded_file($temp_name, $fdir);
                                }

                                echo ("<script> window.open('index.php', '_self')</script>");
                                //echo("<div class='alert alert-success'> Your Account has been Updated </div>");
                            } -->