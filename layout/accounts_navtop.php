<?php 
$usernme=$_COOKIE['user'];
echo'
	<ul>
		<li><a href="../'.$usernme.'/uploadpage.php">File Manager</a></li>
		<li><a href="../'.$usernme.'/gallery.php">Images</a></li>
		<li><a href="../'.$usernme.'/player.php">Media Player</a></li>
		<li><a href="../'.$usernme.'/documents.php">Documents</a></li>
	</ul>
</div>
';
?>