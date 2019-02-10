<!DOCTYPE HTML>
<html>
<head>

</head>
<body>
<h1>Very Secure User Information System</h1>
<form method="GET">
<label for="username">Query by username: </label><br>
<input name="username"></input><br>
<input type="submit">
</form>
<?php
if(isset($_GET["username"])) {
	$conn = new mysqli("localhost", "dbuser", "isss-sandbox-pass", "database");
	if($conn->connect_error) {
		die("connection failed: " . $conn->connect_error);
	}

	$query = "SELECT id, username, email FROM users WHERE username='".$_GET["username"]."'";
	$result = $conn->query($query);

	echo "<p>The query is: <b>$query</b></p>";

	if($result->num_rows > 0) {
		echo "<table><tr><th>id</th><th>username</th><th>email</th></tr>";
		while($row = $result->fetch_assoc()) {
			echo "<tr>";

			echo "<th>".$row["id"]."</th>";
			echo "<th>".$row["username"]."</th>";
			echo "<th>".$row["email"]."</th>";
			echo "</tr>";
		}
		echo "</table>";
	}else{
		echo "No users found";
	}
}
?>

</body>
</html>
