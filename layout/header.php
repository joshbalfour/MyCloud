<!DOCTYPE html>
<html>
<head>
	<title>My Cloud</title>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />	
	<link rel="stylesheet" type="text/css" href="../css/layout.css" media="screen" />
	<style media="screen" type="text/css">
	
	h1 
	{
	width: 50%;
	padding:0px 26%;	
	}
	
	</style>
</head>
<body>
<div id="header">

	<!--[if IE 7]>
	<div><p align="right"><a href="../account/account.php"><img src="../images/myaccount.png" alt="My Account" /></a>  <a href="http://beakybal4.co.uk/upload/logout.php"><img src="../images/logout.png" alt="Logout" /></a></p></div>
	<![endif]-->
	
	<!--[if !(IE 7)]>
	<div style="margin-top: -15px"><p align="right"><a href="../account/account.php"><img src="../images/myaccount.png" alt="My Account" /></a>  <a href="http://beakybal4.co.uk/upload/logout.php"><img src="../images/logout.png" alt="Logout" /></a></p></div>
	<![endif]-->
	
<?php 
$msie = strpos($_SERVER["HTTP_USER_AGENT"], 'MSIE') ? true : false; 
$firefox = strpos($_SERVER["HTTP_USER_AGENT"], 'Firefox') ? true : false;
$safari = strpos($_SERVER["HTTP_USER_AGENT"], 'Safari') ? true : false;
$chrome = strpos($_SERVER["HTTP_USER_AGENT"], 'Chrome') ? true : false;

if (!($msie))   
{
echo '<div style="margin-top: -15px"><p align="right"><a href="../account/account.php"><img src="../images/myaccount.png" alt="My Account" /></a>  <a href="http://beakybal4.co.uk/upload/logout.php"><img src="../images/logout.png" alt="Logout" /></a></p></div>';
}

?>


		
	<h1 align="center"><img src="../images/mycloudlogo.png" alt="My Cloud" /></h1>
	
