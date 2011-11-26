<?php
$x=1;

$username=$_POST["parameter"];
$password2=$_POST["parameter2"];

/// edit from here //

include("php/salts.php");
include("php/config.php");
$status="OK";
;
 if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  } 

  

mysql_select_db("balfour", $con);  
 


$result = mysql_query("SELECT * FROM USERS where username='$username'") 
or die(mysql_error()); 
$numrows=mysql_num_rows($result);
if(!($numrows >= 1))
	{
	$loginsucess=false;
	}
else
	{
		
		$passattempt=md5(md5(md5($password2).$passsalt));
		$info = mysql_fetch_array( $result );
		$pwhash=$info['password'];
		
	 	
		if (!($passattempt==$pwhash))
		{
			$loginsucess = false;
		}
		else
	 	{
	 		$loginsucess=true;
	 	}
	}



 if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  } 
 
mysql_select_db("balfour", $con);
if ($loginsucess){
 $x=0;
 $data = mysql_query("SELECT * FROM FILES WHERE user='$username'") 
 or die(mysql_error()); 
 $files=array();
 while($info = mysql_fetch_array( $data )) 
 {
 $files[$x]=array(
 $info['name'],
 $info['size'],
 $info['type'],
 $info['url']
 );
 $x++;

 } 

mysql_close($con);

$response=$files;

/// down to here, assigning the data to $response //





header("Content-type: text/plain");
echo epicparsehness($response);
}
else
{
	header('HTTP/1.0 403 Unauthorized');
}
?>

<?php 
function epicparsehness($array){
	////BAAAAANGARAAAAAAAAAAAAAAAAAANG WUBWUBWUBWUBWUBWUWBW
	// moving on.....swiftly :3
foreach ($array as $arrayofitems)
{
	
		foreach ($arrayofitems as $arrayitem)
		{		
			echo $arrayitem;
			echo '[itemfinisheh]';
	
		}

}

}
?>