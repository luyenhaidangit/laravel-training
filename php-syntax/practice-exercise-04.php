<!DOCTYPE html>
<html>
<head>
	<title>Tìm số lớn hơn</title>
</head>
<body>
	<h1>Tìm số lớn hơn</h1>
	<form method="post" action="">
		<label for="number1">Số thứ nhất:</label>
		<input type="number" id="number1" name="number1" required><br>
		<label for="number2">Số thứ hai:</label>
		<input type="number" id="number2" name="number2" required><br>
		<input type="submit" value="Tính">
	</form>
	<?php
		// Kiểm tra xem người dùng đã gửi dữ liệu chưa
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Lấy giá trị từ người dùng
			$number1 = $_POST["number1"];
			$number2 = $_POST["number2"];

			// Tìm số lớn hơn hoặc báo hai số bằng nhau
			if ($number1 > $number2) {
				$largerNumber = $number1;
			} elseif ($number1 < $number2) {
				$largerNumber = $number2;
			} else {
				echo "<p>Hai số " . $number1 . " và " . $number2 . " bằng nhau.</p>";
				exit();
			}

			// Hiển thị kết quả
			echo "<p>Số lớn hơn trong hai số " . $number1 . " và " . $number2 . " là " . $largerNumber . "</p>";
		}
	?>
</body>
</html>
