<?php
if(isset($_POST["username"])) {
	setcookie("username", $_POST["username"], time()+60*60*24*30);
	$_COOKIE["username"] = $_POST["username"];
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Ticket system</title>
</head>
<body>
<?php
if(!isset($_COOKIE["username"])) {
?>
<h1>Register!</h1>
<form method="POST">
<label for="username">Create a username: </label><br>
<input type="text" name="username"></input>
<input type="submit"></input>
</form>
<?php
}else{
?>
<p>//TODO: implement the actual website</p>
<h1>Leave a ticket!</h1>
<?php
	if(isset($_POST["content"])) {
		$tickets_file = fopen("admin/tickets.txt", "a") or die("can't open file");
		$text = "<b>".$_COOKIE["username"].": </b>".$_POST["content"]."<br>";
		fwrite($tickets_file, $text);
		fclose($tickets_file);
	}

?>
<form method="POST">
<label for="content">What problem are you having? </label><br>
<input type="text" name="content"></input>
<input type="submit"></input>
</form>
<br>
<?php
function checkAdmin($user) {
	$admins = file("admin/admins.txt");
	foreach ($admins as $admin) {
		if($user == trim($admin)) {
			return true;
		}
	}
	return false;
}
if(!checkAdmin($_COOKIE["username"])) {
?>
Send this link to an admin to get promoted to admin status: <a href="/tickets/admin/promote.php?username=<?php echo $_COOKIE["username"]; ?>">promote</a>
<?php
}else {
echo "You are an admin! The secret admins-only flag is: IceCreamSandwich";
}
?>
<?php
}
?>
</body>
</html>
