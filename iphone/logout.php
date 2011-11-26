<?php
include ("../php/auth.php");


include("layout/indextemplatetop.php");  
/////////////////////////////////
if ($auth)
{
include("php/logout.php");
}

if (!($auth))
{
include("php/index.php");

}
////////////////////////////////
include("layout/templatebottom.php");


?>