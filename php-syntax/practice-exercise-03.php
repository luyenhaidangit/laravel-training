<!DOCTYPE html>
<html>
<head>
	<title>Tính cạnh huyền tam giác vuông</title>
</head>
<body>
	<h1>Tính cạnh huyền tam giác vuông</h1>
	<form method="post" action="">
		<label for="sideA">Cạnh A:</label>
		<input type="number" id="sideA" name="sideA" min="0" required><br>
		<label for="sideB">Cạnh B:</label>
		<input type="number" id="sideB" name="sideB" min="0" required><br>
		<input type="submit" value="Tính">
	</form>
	<?php
		// Kiểm tra xem người dùng đã gửi dữ liệu chưa
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Lấy giá trị từ người dùng
			$sideA = $_POST["sideA"];
			$sideB = $_POST["sideB"];

			// Kiểm tra giá trị nhập vào
			if ($sideA < 0 || $sideB < 0) {
				echo "<p>Vui lòng nhập giá trị không âm.</p>";
				exit();
			}

			// Tính cạnh huyền và hiển thị kết quả
			$hypo = sqrt($sideA * $sideA + $sideB * $sideB);
			echo "<p>Cạnh huyền của tam giác vuông có cạnh A = " . $sideA . " và cạnh B = " . $sideB . " là " . $hypo . "</p>";
		}
	?>
</body>
</html>
