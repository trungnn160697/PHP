<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DateTimeFunciton</title>
</head>
<body>
	<form action="" method="post">
		<p>Người thứ nhất</p>
		Tên: <input type="text" name="name1">
		Ngày sinh: <input type="date" name="birthday1">
		<p>Người thứ hai</p>
		Tên: <input type="text" name="name2">
		Ngày sinh: <input type="date" name="birthday2">
		<br><br><br>
		<button type="submit" class="btn btn-primary" name="submit">Submit</button>
		<button type="restart" class="btn btn-danger">Restart</button>
	</form>
	<?php 
		if(isset($_POST['submit'])){
			if(isset($_POST['name1'])&&isset($_POST['birthday1'])&&isset($_POST['name2'])&&isset($_POST['birthday2'])){
				$name1 = $_POST['name1'];
				$birthday1 = date("d/m/Y", strtotime($_POST['birthday1']));
				$name2 = $_POST['name2'];
				$birthday2 = date("I : d/m/Y", strtotime($_POST['birthday2']));
			}
		}
	?>
</body>
</html>