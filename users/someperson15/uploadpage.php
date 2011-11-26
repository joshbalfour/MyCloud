<?php
$username=basename(dirname(__FILE__));
include ("../../php/auth.php");
if ($auth)
{
include("../../layout/header.php");   
include("../../layout/navtop.php");  
include("../../layout/mainwraptop.php");  
/////////////////////////////////
include("../../php/uploadpage.php");
////////////////////////////////
include("../../layout/mainwrapbottom.php");  
include("../../layout/navside.php"); 
include("../../layout/footer.php"); 
}
if (!($auth))
{
	echo '<meta HTTP-EQUIV="REFRESH" content="0; url=../../login.php">';
}
?>