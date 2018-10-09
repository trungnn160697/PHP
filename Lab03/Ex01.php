<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chuyển đổi</title>

</head>
<body>
	
	<form action="" method="post" id="form">
		Chọn: <input type="radio" name="check" value="1"><span>Độ sang radian</span><input type="radio" name="check" value="2"><span>Radian sang độ</span><br>
		<span>Nhập</span>
		<input type="text" name="nhap">

		<button type="submit" class="btn btn-primary" name="submit">Submit</button>
		<button type="restart" class="btn btn-danger">Restart</button>
	</form>

	<?php
		if(isset($_POST['submit'])){
			if(isset($_POST['nhap'])&&isset($_POST['check'])){
				$check = $_POST['check'];
				if($check == 1){
					echo "Kết quả chuyển từ độ sang radian là: ".($_POST['nhap']*3.14/180);
				}
				if($check == 2){
					echo "Kết quả chuyển từ radian sang độ là: ".($_POST['nhap']*180/3.14);
				}
			}
			
		}
	?>

</body>
</html>