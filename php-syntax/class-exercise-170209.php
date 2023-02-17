<?php
		function isPrime($num) {
			// Trường hợp đặc biệt
			if ($num == 2 || $num == 3) {
				return true;
			}
			// Trường hợp không phải số nguyên tố
			if ($num == 1 || $num % 2 == 0 || $num % 3 == 0) {
				return false;
			}
			// Kiểm tra các số từ 5 đến căn bậc hai của $num
			for ($i = 5; $i * $i <= $num; $i += 6) {
				if ($num % $i == 0 || $num % ($i + 2) == 0) {
					return false;
				}
			}
			// Nếu không có số nào chia hết cho $num thì đó là số nguyên tố
			return true;
		}

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$n = $_POST["n"];
			echo "<h2>Các số nguyên tố từ 0 đến $n:</h2>";
			for ($i = 2; $i <= $n; $i++) {
				if (isPrime($i)) {
					echo "$i ";
				}
			}
		}
	?>