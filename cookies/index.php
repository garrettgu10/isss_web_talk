<?php
if(!isset($_COOKIE["logged_in_user"])) {
	setcookie("logged_in_user", "pleb12");
	echo "You are currently logged in as: pleb12";
}else{
	echo "You are currently logged in as: ".$_COOKIE["logged_in_user"];
	if($_COOKIE["logged_in_user"] == "thelegend27") {
		echo "<br>Your secret flag is: WhoIsTheLegend27";
	}
}
