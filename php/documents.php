<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="../css/core.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script type="text/javascript" src="../js/functions.js"></script>
<script type="text/javascript">
      function loadIframe(url) {
        if(url === null) url = $('#url').val();
        $('#iframe').attr('src', 'proxy.php?url=' + url + '&embedded=true');
        return false;
      }
    </script>
</head>
<body>
<div id="wr">

<?php
include("../php/config.php");
//open connection
 if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  } 
// select table
mysql_select_db("balfour", $con);


// Collects data from "files" table for the current user and all application files 
 $data = mysql_query("SELECT * FROM FILES WHERE user='$username' and type LIKE 'application/%' and  type not LIKE 'application/x-%'  ") 
 or die(mysql_error()); 

//creates array from $data and displays each entry
 while($info = mysql_fetch_array( $data )) 
	 {
	 $url=$info['url'];
	 $name=$info['name'];
	 $rawurl=rawurlencode($url);
	 Print '<br/>';
	 Print $name;
	 Print '<div class="trigger open"><a href="#">Open '.$name.'</a></div>
			<div class="cnt">';
	 Print '<div><iframe id="iframe" src="../php/proxy.php?url='.$url.'&embedded=true" width="600" height="780" style="border: none;"></iframe></div>';
	 Print '</div><div class="cl">&nbsp;</div>';
	 } 

//close connection
mysql_close($con);
?>

</div>
</body>
</html>

