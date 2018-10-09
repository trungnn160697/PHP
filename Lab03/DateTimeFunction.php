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
				$birthday1 = date("l, F d Y", strtotime($_POST['birthday1']));
				$name2 = $_POST['name2'];
				$birthday2 = date("l, F d Y", strtotime($_POST['birthday2']));
				echo "<br>Tên người thứ nhất: ".$name1." và ngày sinh là ".$birthday1;
				echo "<br>Tên người thứ hai: ".$name2." và ngày sinh là ".$birthday2;
				diffirendtDay($birthday1,$birthday2);
				diffirendAge($birthday1,$birthday2);
			}
		}

		function diffirendtDay($date1,$date2){
			
			$diff = abs(strtotime($date2) - strtotime($date1));
	  		$years = floor($diff / (365*60*60*24));
	 		$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
	  		$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
			echo "<br>Hai ngày cách nhau: ".$years . " năm, " . $months . " tháng, " . $days . " ngày";
		}

		function diffirendAge($date1,$date2){
			$diff = abs(strtotime($date2) - strtotime($date1));
	  		$years = floor($diff / (365*60*60*24));
			echo "<br>Hai người cách nhau: ".$years." tuổi";
		}
	?>
</body>
</html>