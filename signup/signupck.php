<!doctype html>

<html>

<head>
<title>signup</title>
</head>

<body>
<?
include("../php/config.php");
include("../php/salts.php");
$username=$_POST['username'];
$password=$_POST['password'];
$password2=$_POST['password2'];
$email=$_POST['email'];
$adminnumber=$_POST['adminnumber'];
$passcrypt=md5(md5(md5($password).$passsalt));
$emailcrypt=md5(md5($email).$emailsalt);
$adminnumbercrypt=md5($adminnumber.$ansalt);


//open connection
 if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  } 

  
  
//Select Database
mysql_select_db("balfour", $con);  

$status = "OK";
$msg="";

// if username is less than 3 char then status is not ok
if(!isset($username) or strlen($username) <3)
{
$msg=$msg."User id should be =3 or more than 3 characters long<BR>";
$status= "NOTOK";
}					

$result=mysql_query("SELECT * from USERS where username='$username'");
$numrows=mysql_num_rows($result);
if($numrows >= 1)
{
$msg=$msg."username already exists. Please try another one<BR>";
$status= "NOTOK";
}					


if ( strlen($password) < 3 ){
$msg=$msg."Password must be more than 3 char legth<BR>";
$status= "NOTOK";}					

if ( $password <> $password2 ){
$msg=$msg."Both passwords are not matching<BR>";
$status= "NOTOK";}					


//if ($agree<>"yes") {
//$msg=$msg."You must agree to terms and conditions<BR>";
//$status= "NOTOK";}	

if($status<>"OK")
	{
	echo "<font face='Verdana' size='2' color=red>$msg</font><br><input type='button' value='Retry' onClick='history.go(-1)'>";
	}
	
	else
  { 
  	$oldmask = umask(0);
  	chdir("../"); 	
  	mkdir("$username",0777,$recursive = true);
  	mkdir("$username/files",0777,$recursive = true);
  	mkdir("$username/thumbnails",0777,$recursive = true);
  	chdir("$username"); 
  	copy("../master/documents.php","documents.php");
  	copy("../master/gallery.php","gallery.php");
  	copy("../master/player.php","player.php");
  	copy("../master/upload.php","upload.php");
  	copy("../master/uploadpage.php","uploadpage.php");
  	umask($oldmask);
  	
  	$sql="insert into USERS(username,password,email,adminnumber) values('$username','$passcrypt','$emailcrypt','$adminnumbercrypt')";
		
	if (!mysql_query($sql,$con))
	  {
	  die("Database Problem, please contact Site admin");
	  }
echo "<font face='Verdana' size='2' color=green>Welcome, You have successfully signed up</font> <p><a href 'http://beakybal4.co.uk/upload/login.php' >Go log in</a></p>";
		

}
mysql_close($con);
?>

</body>

</html>

