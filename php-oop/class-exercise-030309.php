<!DOCTYPE html>
<html>
<head>
	<title>Tìm kiếm sản phẩm</title>
</head>
<body>
	<h2>Tìm kiếm sản phẩm</h2>
	<form method="GET" action="">
		<input type="text" name="search" placeholder="Nhập từ khóa tìm kiếm">
		<button type="submit">Tìm kiếm</button>
	</form>
	<br>
	<?php
	if(isset($_GET['search'])) {
		$search_query = $_GET['search'];
		$file = "class-exercise-030309.txt";
		$handle = fopen($file, "r");
		if ($handle) {
			$i = 0;
			echo "<h2>Kết quả tìm kiếm cho: $search_query</h2>";
			echo "<ul>";
			while (($line = fgets($handle)) !== false) {
				$line_arr = explode("#", $line);
				if (strpos($line_arr[0], $search_query) !== false) {
					echo "<li>";
					echo "<img src='" . $line_arr[1] . "' alt='" . $line_arr[0] . "' style='max-width: 200px;'>";
					echo "<br>";
					echo "<strong>" . $line_arr[0] . "</strong>";
					echo "<br>";
					echo "<span>" . $line_arr[2] . " đồng</span>";
					echo "<br>";
					echo "<p>" . $line_arr[3] . "</p>";
					echo "</li>";
					$i++;
				}
			}
			if ($i == 0) {
				echo "<p>Không tìm thấy sản phẩm nào phù hợp với từ khóa tìm kiếm</p>";
			}
			echo "</ul>";
			fclose($handle);
		} else {
			echo "<p>Có lỗi xảy ra khi đọc file sản phẩm</p>";
		}
	}
	?>
</body>
</html>
