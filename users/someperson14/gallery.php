<?php
$username=basename(dirname(__FILE__));
include ("../php/auth.php");
if ($auth)
{
include("../layout/header.php");   
include("../layout/images_navtop.php");  
include("../layout/mainwraptop.php");  
/////////////////////////////////
include("../php/gallery.php");
////////////////////////////////
include("../layout/mainwrapbottom.php");  
include("../layout/navside.php"); 
include("../layout/footer.php"); 
}
if (!($auth))
{
	echo '<meta HTTP-EQUIV="REFRESH" content="0; url=../login.php">';
}
?>