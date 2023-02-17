<?php
	if (isset($_POST['rows'])) {
		$rows = intval($_POST['rows']);
		if ($rows > 0) {
			echo "<table border='1'>";
			for ($i = 0; $i < $rows; $i++) {
				echo "<tr>";
				for ($j = 0; $j <= $i; $j++) {
					if ($j == 0 || $j == $i) {
						$value = 1;
					} else {
						$value = $tri[$i-1][$j-1] + $tri[$i-1][$j];
					}
					echo "<td>".$value."</td>";
					$tri[$i][$j] = $value;
				}
				echo "</tr>";
			}
			echo "</table>";
		} else {
			echo "Vui lòng nhập một số nguyên dương.";
		}
	}
	?>