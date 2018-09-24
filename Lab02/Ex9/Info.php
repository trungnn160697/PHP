<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Info</title>
</head>
<body>
	<?php 
		$name = $_POST['name'];
		$class = $_POST['class'];
		$university = $_POST['university'];
		$gender = $_POST['gender'];
		$course = $_POST['course'];
		echo "<br>Hello, ".$name;
		echo "<br>You are studing at ".$class.", ".$university;
		echo "<br>Your select: ";
		echo "<br>1. Giới tính: ".$gender;
		echo "<br>2. Khóa học: ".$course;

	?>
</body>
</html>