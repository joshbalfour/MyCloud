<?php
include ("../php/auth.php");


include("layout/indextemplatetop.php");  
/////////////////////////////////
if ($auth)
{
include("php/documents.php");
}

if (!($auth))
{
include("php/homepage.php");

}
////////////////////////////////
include("layout/templatebottom.php");


?>