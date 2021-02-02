
																	include_once "projects.php";
																	$deptt=new projects();
																	$rss=$deptt->GetByid($row["project_id"]);
																	if($roww=mysqli_fetch_assoc($rss))
																	{
                                                                         $x=1;
																		$depttt=new projects();
																	    $rsss=$depttt->GetByUserID();
																	if(	$rowww=mysqli_fetch_assoc($rsss))
                                                                                      
                                                                          {   if($rowww["user_id"]==$_SESSION["id"])

                                                                          {