<!DOCTYPE HTML>
<html>
<head>
<script type="text/javascript" src="../js/lightbox.js"></script>
<link rel="stylesheet" type="text/css" 
media="screen" href="../css/gallery.css">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

<div class="gallery">
<?php

//open connection
include("../php/config.php");
 if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  } 

// select table
mysql_select_db("balfour", $con);

// Collects data from "posts" table 
 $data = mysql_query("SELECT * FROM FILES WHERE user='$username' AND TYPE LIKE 'image/%' ") 
 or die(mysql_error()); 

//creates array from $data and displays each entry
 while($info = mysql_fetch_array( $data )) 
 {
  Print "<div class='image'>";
  Print "<a href='".$info['url']."' rel='lightbox' title='".$info['name']."'>";
  Print "<img src='" .$info['url']. "' alt='" .$info['name']. "' height='200' width='200' align='center'/>";
  Print "<p align='center' style='color :#FFFFF'>".$info['name']."</p></a>";
  Print "</div>";
  
 } 

//close connection
mysql_close($con);

?>
</div>
