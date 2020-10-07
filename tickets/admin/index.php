<!DOCTYPE HTML>
<html>
<head>
<title>admin portal</title>
<script>
function alert() {}
function prompt() {}
</script>
</head>
<?php
if($_GET["password"] == "isss-sandbox-pass") {
	setcookie("isadmin", "yeah you're an admin", time() + 60*60*24*30);
	?>
<body>
Here is a list of all the admins on the site:<br>
<pre>
<?php
readFile("admins.txt");
?>
</pre>
Here are the tickets that have been opened by the users:<br>
<?php
readFile("tickets.txt");
?>
</body>
<?php
}else{
?>
<body>
<form method="get">
<label for="password">Password: </label><br>
<input type="password" id="password" name="password"></input><br>
<input type="submit"></input>
</form>
</body>
<?php
}
?>
</html>
