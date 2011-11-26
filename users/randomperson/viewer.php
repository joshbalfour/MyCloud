<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<h1>File Viewer</h1>
<table border="1">
<th>File Type</th>
<th>File Name</th>
<th>Size</th>
<th>Download</th>

<?php
include("../php/config.php");
//open connection

 if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  } 
$username=basename(dirname(__FILE__));   
// select table
mysql_select_db("balfour", $con);


// Collects data from "posts" table 
 $data = mysql_query("SELECT * FROM FILES WHERE user='$username'") 
 or die(mysql_error()); 

//creates array from $data and displays each entry
 while($info = mysql_fetch_array( $data )) 
 {
 $type=str_replace('/','',$info['type']); 
 print "<tr>";
 Print "<td><img src='../icons/" .$type. ".png'/></td>";
 Print "<td>" .$info['name']. "</td>";
 Print "<td>" .$info['size']. "</td>";
 Print "<td><a href='" .$info['url']. "'>Download</a></td>";
 
 print "<tr>";
 } 

//close connection
mysql_close($con);
?>

</table>
</body>
</html>
