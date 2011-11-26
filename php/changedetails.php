<div id=result" align="center">
<?php
include("../php/config.php");
include("../php/salts.php");
$username=$_COOKIE['user'];
$password=$_POST['password'];
$email=$_POST['email'];
$passcrypt=md5(md5(md5($password).$passsalt));
$emailcrypt=md5(md5($email).$emailsalt);


//open connection
 if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  } 

  
  
//Select Database
mysql_select_db("balfour", $con);  

$status = "OK";
$msg="";



if ( strlen($password) == 0 ){
$msg=$msg."Password not changed. <br/>";
$status= "OK";
$changepwd=false;}					

if ( strlen($password) > 0 ){
$msg=$msg."Password changed. <br/>";
$status= "OK";
$changepwd=true;}

if ( strlen($email) > 0 ){
$msg=$msg."Email address changed.<br/>";
$status= "OK";
$changeemail=true;}

if ( strlen($email) == 0 ){
$msg=$msg."Email address not changed.<br/>";
$status= "OK";
$changeemail=false;}

//if ($agree<>"yes") {
//$msg=$msg."You must agree to terms and conditions<BR>";
//$status= "NOTOK";}	

if (changepwd)
{  	
  	$sql="UPDATE USERS SET password='$passcrypt' WHERE username='$username'";			
  	
  	if (!mysql_query($sql,$con))
	  {
	  die("Database Problem, please contact Site admin");
	  }
	  
}

if (changeemail)
{  	
  	$sql2="UPDATE USERS SET email='$emailcrypt' WHERE username='$username'";			
  	
  	if (!mysql_query($sql2,$con))
	  {
	  die("Database Problem, please contact Site admin");
	  }
	  
}

echo "<font face='Verdana' size='2' color=green>$msg</font>";
		
mysql_close($con);
?>
</div>