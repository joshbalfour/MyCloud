<div id="account">

<?php
include("../php/config.php");

//open connection
 if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  } 

//Select Database
mysql_select_db("balfour", $con);  

//search table and create array
$stuff = mysql_query("SELECT * FROM USERS where username='$username'") 
or die(mysql_error()); 
$information = mysql_fetch_array( $stuff );

//collect info from array
$pwd=$information['password'];
$email=$information['email'];
$adminnumber=$information['adminnumber'];

//create form
echo '
<br/>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="changedetails.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3"><strong>Change account info</strong></td>
</tr>
<tr>
<td colspan="3">leave any field you dont want changed blank.</td>
</tr>
<tr>
<td></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="password" type="password" id="password"></td>
</tr>
<tr>
<td>email</td>
<td>:</td>
<td><input name="email" type="text" id="email"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="change"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
';



//close connection
mysql_close($con);
?>

</div>