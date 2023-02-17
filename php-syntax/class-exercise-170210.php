<?php
		// Lấy giá trị N từ form HTML
		$n = $_POST['n'];

		// Tính và in ra các số Fibonacci
		$prev = 0;
		$current = 1;
		$next = $prev + $current;
		while ($next <= $n) {
			echo $next . " ";
			$prev = $current;
			$current = $next;
			$next = $prev + $current;
		}
	?>