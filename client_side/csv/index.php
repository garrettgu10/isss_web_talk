
<!DOCTYPE HTML>
<html>
<head>
<title>
Create a new account!
</title>
<script>
function validateForm() {
	if(document.forms["register"]["username"].value === 'admin'){
		alert("Your username cannot be 'admin'!");
		return false;
	}
	return true;
}
</script>
<body>
<h1>Make a new account!</h1>
<form action="register.php" name="register" onsubmit="return validateForm()" method="post">
<label for="username">Username: </label><br>
<input type="text" name="username" id="username"></input><br>
<label for="password">Password: </label><br>
<input type="password" id="password"></input><br>
<p>Note: Your username cannot be "admin"</p>
<input type="submit"></input>
</form>
</body>
</html>

