<?php
	echo date("Y-m-d H:i-s",time());
	echo "<br />";
	echo $_SERVER["REMOTE_ADDR"];
	echo "<br />";
	echo $_SERVER["HTTP_CLIENT_IP"];
	echo "<br />";
	echo $_SERVER["HTTP_X_FORWARDED_FOR"];	
?>
