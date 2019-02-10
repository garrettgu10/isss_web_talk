<?php
if($_COOKIE["isadmin"] == "yeah you're an admin") {
	$admins = file("admins.txt");
	foreach($admins as $admin) {
		if($_GET["username"] == trim($admin)) {
			die("You are already an admin");
		}
	}
	$admins_file = fopen("admins.txt", "a") or die("can't open file");
	$text = $_GET["username"]."\n";
	fwrite($admins_file, $text);
	fclose($admins_file);
	echo "promotion successful for user ".$_GET["username"];
}else{
	echo "You're not an admin, you are unauthorized to do this";
}
?>
