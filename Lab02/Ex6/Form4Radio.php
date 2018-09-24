<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Receiving input</title>
</head>
<body>
	<h2>Thank you: Got your input</h2>
	<?php 
		$email = $_POST["email"];
		$contact = $_POST["contact"];
		echo "<br>Your email address is ".$email;
		echo "<br>Contact preference is ".$contact;
	?>
</body>
</html>