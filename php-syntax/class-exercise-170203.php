<?php
		$a = $_POST["a"];
		$b = $_POST["b"];
		$c = $_POST["c"];
		$a1 = $_POST["a1"];
		$b1 = $_POST["b1"];
		$c1 = $_POST["c1"];
		$d = $a*$b1 - $a1*$b;
		$dx = $c*$b1 - $c1*$b;
		$dy = $a*$c1 - $a1*$c;
		if ($d == 0) {
			if ($dx + $dy == 0) {
				echo "Infinite solutions";
			} else {
				echo "No solution";
			}
		} else {
			$x = $dx / $d;
			$y = $dy / $d;
			echo "x = $x, y = $y";
		}
	?>