<?php

if($_POST["username"] == "admin" && $_POST["password"] == "mercedes") {
	echo "You have admin privileges. Here's the secret flag: ChickenAvocadoWrap";
}else{
	header("HTTP/1.0 403 Unauthorized");
	echo "Authentication failed!";
}

?>
