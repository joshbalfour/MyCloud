<!DOCTYPE html>
<head>
<title>Music Player</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script type="text/javascript" src="../js/jwplayer.js"></script>

	
	
</head>
<body>
<br/>
<div align="center">
<div id='mediaplayer'></div>

<script type="text/javascript">
  jwplayer('mediaplayer').setup({
    'flashplayer': '../js/player.swf',
    'id': 'playerID',
    'width': '720',
    'height': '800',
    'playlist.position': 'bottom',
    'playlist.size': '250',
    'playlist': [
           	
		<?php
		include("../php/config.php");
		//open connection
		 if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  } 
		// select table
		mysql_select_db("balfour", $con);


		// Collects data from "posts" table 
		 $data = mysql_query("SELECT * FROM FILES WHERE user='$username' AND type LIKE 'audio/%' OR user='$username' AND type LIKE 'video/%' ") 
		 or die(mysql_error()); 

		//creates array from $data and displays each entry
		 while($info = mysql_fetch_array( $data )) 
		 { 
		 Print "{ 'file': 'files/".$info['name']."', 'title': '".$info['name']."'},";
		 } 

		//close connection
		mysql_close($con);

		?>
		   ]
  });
</script>		
</div>			
</body>
</html>
