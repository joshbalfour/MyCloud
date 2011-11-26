<body id="kitindex">
	
	<div id="header">
		<h1>File info</h1>
		<a  href="javascript:window.location.href='media.php'" id="backButton" class="nav">Back</a>
		<a  href="javascript:window.location.href='logout.php'" class="nav Action">logout</a>
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
$type=str_replace('.','',(substr($info['name'],-4)));
$size=$info['size'];


 		  if ($size >= 1000000000) {
                $filesize=round(($size / 1000000000),2).' GB';
            };
            
          if ($size >= 1000000)
             {
                $filesize=round(($size / 1000000),2).' MB';
            }
            
         else 
         { 
            $filesize=round(($size / 1000),2).' KB';
         }
;

 Print '<div align="center"> <audio src="'.$info['url'].'" controls preload="auto" autobuffer></audio> </div>';
 Print '<h1>Name</h1>';
 print '<ul class="data">';
 print "<li>";
 print $filename; 
 print "</li>";
 print "</ul>";
 Print '<h1>Type</h1>';
 Print '<ul class="data">';
 print "<li>";
 print $type." file"; 
 print "</li>";
 print "</ul>";
 Print '<h1>Size</h1>';
 Print '<ul class="data">';
 print "<li>";
 print $filesize; 
 print "</li>";
 print "</ul>";
 print "<br/>";
 print "<ul>"; 
 print "<li>";
 print "<a href='" .$info['url']. "' align='center'>Download</a>"; 
 print "</li>";
 print "</ul>";
 

//close connection
mysql_close($con);



?>