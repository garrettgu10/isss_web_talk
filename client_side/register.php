<?php

if($_POST["username"] == "admin") {
	echo "You have admin privileges. Here's the secret flag: NotAFlag";
}else{
	echo "You have registered, but you are not an admin!";
}

?>
