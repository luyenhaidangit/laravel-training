<!DOCTYPE html>
<html>
<head>
	<title>Tính tiền điện</title>
</head>
<body>
	<h1>Tính tiền điện</h1>
	<form method="post" action="">
		<label for="name">Tên chủ hộ:</label>
		<input type="text" id="name" name="name" required><br>
		<label for="old">Chỉ số điện cũ:</label>
		<input type="number" id="old" name="old" required><br>
		<label for="new">Chỉ số điện mới:</label>
		<input type="number" id="new" name="new" required><br>
		<label for="price">Đơn giá điện:</label>
		<input type="number" id="price" name="price" value="2000"><br>
		<input type="submit" value="Tính">
	</form>
	<?php
		// Kiểm tra xem người dùng đã gửi dữ liệu chưa
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Lấy giá trị từ người dùng
			$name = $_POST["name"];
			$old = $_POST["old"];
			$new = $_POST["new"];
			$price = $_POST["price"];

			// Tính số tiền điện
			$electricity = $new - $old;
			$total = $electricity * $price;

			// Hiển thị kết quả
			echo "<p>Tên chủ hộ: " . $name . "</p>";
			echo "<p>Số điện tiêu thụ: " . $electricity . "</p>";
			echo "<p>Số tiền phải thanh toán: " . $total . "</p>";
		}
	?>
</body>
</html>
