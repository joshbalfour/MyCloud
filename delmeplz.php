<?php
$con = mysql_connect("localhost", "joshbalfour", "beaky1");
$username=$_POST['username'];

//open connection
 if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  } 

  
  
//Select Database
mysql_select_db("balfour", $con);  

  	$sql="insert into USERS(username) values('$username')";
		
	if (!mysql_query($sql,$con))
	  {
	  die("Database Problem, please contact Site admin");
	  }
echo "<font face='Verdana' size='2' color=green>Welcome, You have successfully signed up</font> <p><a href 'http://beakybal4.co.uk/upload/login.php' >Go log in</a></p>";
		


mysql_close($con);
?>