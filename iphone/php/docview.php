<body id="kitindex">
	
	<div id="header">
		<h1>Document info</h1>
		<a href="javascript:window.location.href='documents.php'" id="backButton" class="nav">Back</a>
		<a href="javascript:window.location.href='logout.php'" class="nav Action">logout</a>
	</div>
	<br/>
	
<?php
include("../php/config.php");

$filename=$_GET["file"];
//open connection

 if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  } 
//eat cookie (omnomnom)
$username=$_COOKIE['user'];
// select table
mysql_select_db("balfour", $con);


// Collects data from "files" table for the current user
 $data = mysql_query("SELECT * FROM FILES WHERE user='$username' AND name='$filename'") 
 or die(mysql_error()); 

//creates array from $data and displays each entry
$info = mysql_fetch_array( $data );
print "<iframe src='" .$info['url']. "' width='100%' height='100%'></iframe>"; 

 

//close connection
mysql_close($con);



?>