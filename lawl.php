<?php error_reporting(0); $released=false; if ($_GET['lawl']=='heh') {$released=true;} ?>

<?php if ($released) { ?>
<?php
$browser = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
if ($browser == true)  {  
?>

<head>
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta names="apple-mobile-web-app-status-bar-style" content="none" />
<title>herpinya</title>
<style>
*{border: 0; margin: 0;}
</style>
</head>
<img src="bg.png" alt="bg" width="100%" height="100%" onclick="document.getElementById('herpinya').play()"/>
<audio id="herpinya" preload loop>
   <source src="herpinya.mp3">
</audio>
<?php } else {?>
<title>Herpinya</title>
<center>
<h1>Please visit herpinya.com on your iDevice to run herpinya!</h1>
</center>

<?php }?>





<center>
<h1>:3</h1>
</center>
<?php } ?>