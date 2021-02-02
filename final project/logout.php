<?php
session_start();
   session_destroy();
   setcookie("usercookie","",time()-1);
  include_once"index.php";	
?>