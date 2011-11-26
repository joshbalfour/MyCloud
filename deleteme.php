<?php
include("../variables.php");
//open connection
 if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  } 

  
  
//Select Database
mysql_select_db("balfour", $con);  

// Create table
$sql="CREATE TABLE FILES(
         id int(11) NOT NULL AUTO_INCREMENT,
		 name text,
         url text,
         size text,
         type text,
         user text,
         PRIMARY KEY (id)
                  
       ) AUTO_INCREMENT=2 " ;



//Drop Table
$sql3="DROP TABLE FILES";


//Insert data
$sql4="INSERT INTO FILES (name, url, size, type) VALUES ('$name','$url','$size','$type')";




if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "Successful :)";



//close connection
mysql_close($con);

?>



