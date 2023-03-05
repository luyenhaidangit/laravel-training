<!DOCTYPE html>
<html>
<head>
	<title>Tìm kiếm nhân viên</title>
</head>
<body>
	<h1>Tìm kiếm nhân viên</h1>
	<form method="get">
		<label>Từ khóa:</label>
		<input type="text" name="keyword">
		<input type="submit" value="Tìm kiếm">
	</form>
	<hr>
	<?php
	// Kiểm tra nếu người dùng đã submit form
	if (isset($_GET['keyword'])) {
		$keyword = $_GET['keyword'];
		$file = "employees.txt";
		$data = file_get_contents($file);

		// Tìm kiếm các nhân viên phù hợp với từ khóa
		$matches = array();
		preg_match_all("/(.*?)\n(.*?)\n(.*?)\n(.*?)\n(.*)?\n/s", $data, $matches, PREG_SET_ORDER);

		$results = array();
		foreach ($matches as $match) {
			// Kiểm tra nếu có chứa từ khóa
			if (stripos($match[0], $keyword) !== false) {
				// Lưu thông tin nhân viên vào mảng kết quả
				$result = array();
				$result['name'] = $match[1];
				$result['dob'] = $match[2];
				$result['hometown'] = $match[3];
				$result['office'] = $match[4];
				$result['position'] = $match[5];
				$results[] = $result;
			}
		}

		// Hiển thị kết quả tìm kiếm
		if (count($results) > 0) {
			echo "<p>Có " . count($results) . " nhân viên phù hợp với từ khóa '" . $keyword . "':</p>";
			echo "<ul>";
			foreach ($results as $result) {
				echo "<li>";
				echo "<strong>" . $result['name'] . "</strong><br>";
				echo "Ngày sinh: " . $result['dob'] . "<br>";
				echo "Quê quán: " . $result['hometown'] . "<br>";
				echo "Phòng làm việc: " . $result['office'] . "<br>";
				echo "Chức vụ: " . ($result['position'] ? $result['position'] : 'Chưa có') . "<br>";
				echo "</li>";
			}
			echo "</ul>";
		} else {
			echo "<p>Không tìm thấy nhân viên phù hợp với từ khóa '" . $keyword . "'</p>";
		}
	}
	?>
</body>
</html>
