<?php
header("X-XSS-Protection: 0");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>You are being redirected</title>
</head>
<body>
<a href="<?php echo $_GET["url"]; ?>">Click here</a>
</body>
</html>
