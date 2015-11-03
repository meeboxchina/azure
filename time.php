<?php
	echo date("Y-m-d H:i-s",time());
	echo $_SERVER["REMOTE_ADDR"];
	echo $_SERVER["HTTP_CLIENT_IP"];
	echo $_SERVER["HTTP_X_FORWARDED_FOR"];	
?>
