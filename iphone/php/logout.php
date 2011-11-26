<?php
// set the expiration date to one hour ago
setcookie("user", "", time()-3600);
setcookie("password", "", time()-3600);
echo "<font face='Verdana' size='2' color=green>You have successfully been logged out.</font>";	 	
echo '<meta HTTP-EQUIV="REFRESH" content="1; url=index.php">';
?>
