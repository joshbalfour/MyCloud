<?php
include("../php/salts.php");
include("../php/config.php");
// Create table
//$sql="CREATE TABLE USERS(
//         id int(11) NOT NULL AUTO_INCREMENT,
//		 username text,
//		 password text,
//		 adminnumber text,
//		 email text,
//         PRIMARY KEY (id)
//                  
//       ) AUTO_INCREMENT=2 " ;



//Drop Table
//$sql3="DROP TABLE USERS";


//Insert data
//$sql4="INSERT INTO USERS (username, password, adminnumber, email) VALUES ('$username','$pass','$adminnumber','$email')";
$username=$_COOKIE['user'];
$password=$_COOKIE['password'];
//open connection
 if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  } 

  
  
//Select Database
mysql_select_db("balfour", $con);  
 


$result = mysql_query("SELECT * FROM USERS where username='$username'") 
or die(mysql_error()); 
$numrows=mysql_num_rows($result);
if(!($numrows >= 1))
	{
	$auth=false;	
	}
else
	{
		
		$info = mysql_fetch_array( $result );
		$pwhash=$info['password'];
		if (!($password==$pwhash))
		{
		$auth=false;
		}
		else
	 	{
	 	$auth=true;
	 	}
	}


//close connection
mysql_close($con);

?>
