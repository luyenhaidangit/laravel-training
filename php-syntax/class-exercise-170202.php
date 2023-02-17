<?php

// Nhập giá trị a, b, c
$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST["c"];

// Tính delta
$delta = $b * $b - 4 * $a * $c;

// Kiểm tra và tính nghiệm
if ($delta < 0) {
  echo "Phương trình vô nghiệm";
} else if ($delta == 0) {
  $x = (-$b) / (2 * $a);
  echo "Phương trình có nghiệm kép x = " . $x;
} else {
  $x1 = (-$b + sqrt($delta)) / (2 * $a);
  $x2 = (-$b - sqrt($delta)) / (2 * $a);
  echo "Phương trình có hai nghiệm phân biệt:<br>";
  echo "x1 = " . $x1 . "<br>";
  echo "x2 = " . $x2;
}

?>
