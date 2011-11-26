<body id="kitindex">
	
	<div id="header">
		<h1>Photos</h1>
		<a href="index.php" id="backButton" class="nav">Back</a>
		<a  href="javascript:window.location.href='logout.php'" class="nav Action">logout</a>
	</div>
	<br/>
	<ul>
<?php
include("../php/config.php");

function truncate($string, $length){
		    settype($string, 'string');
		    settype($length, 'integer');
		    for($a = 0; $a < $length AND $a < strlen($string); $a++){
		        $output .= $string[$a];
		    }
		    return($output);
		}	

//open connection

 if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  } 
//eat cookie (omnomnom)
$username=$_COOKIE['user'];
// select table
mysql_select_db("balfour", $con);


// Collects data from "files" table for the current user where the file type is an image
 $data = mysql_query("SELECT * FROM FILES WHERE user='$username' AND TYPE LIKE 'image/%' ") 
 or die(mysql_error()); 

//creates array from $data and displays each entry
 while($info = mysql_fetch_array( $data )) 
 {

 $filename=$info['name'];
 
 if (strlen($info['name'])>=27)
 {	
 	$filename=truncate($info['name'],27).'...';
 }
 $name=$info['name'];
 print "<li>";
 print "<a href=\"javascript:window.location.href='photoinfo.php?file=$name'\"  class=\"arrow\">".$filename."</a>"; 
 print "</li>";
 } 

//close connection
mysql_close($con);
?>