<!DOCTYPE html>
<html>
<head>
	<title>Tính diện tích hình tròn</title>
</head>
<body>
	<h1>Tính diện tích hình tròn</h1>
	<form method="post" action="">
		<label for="radius">Nhập bán kính hình tròn:</label>
		<input type="number" id="radius" name="radius" required>
		<input type="submit" value="Tính">
	</form>
	<?php
		// Kiểm tra xem người dùng đã gửi dữ liệu chưa
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Lấy giá trị bán kính từ người dùng
			$radius = $_POST["radius"];

			// Tính diện tích hình tròn
			$area = pi() * pow($radius, 2);

			// Hiển thị kết quả
			echo "<p>Bán kính: " . $radius . "</p>";
			echo "<p>Diện tích: " . $area . "</p>";
		}
	?>
</body>
</html>
