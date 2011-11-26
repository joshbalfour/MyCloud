<?php
include ("../php/auth.php");


include("layout/indextemplatetop.php");  
/////////////////////////////////
if ($auth)
{
include("php/files.php");
}

if (!($auth))
{
include("php/homepage.php");

}
////////////////////////////////
include("layout/templatebottom.php");


?>