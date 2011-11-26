<?php
include ("../php/auth.php");
if ($auth)
{
$username=$_COOKIE['user'];
include("../layout/accountsheader.php");   
include("../layout/accounts_navtop.php");  
include("../layout/mainwraptop.php");  
/////////////////////////////////
include("../php/changedetails.php");
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