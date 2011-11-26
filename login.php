<?php
include ("php/auth.php");
if ($auth)
{
$username=$_COOKIE['user'];
echo '<meta HTTP-EQUIV="REFRESH" content="0; url='.$username.'/uploadpage.php">';
}
if (!($auth))
{
include("layout/indexheader.php");   
include("layout/loginnavtop.php");  
include("layout/mainwraptop.php");  
/////////////////////////////////
include("php/login.php");
////////////////////////////////
include("layout/mainwrapbottom.php");
include("layout/footer.php"); 
}

?>