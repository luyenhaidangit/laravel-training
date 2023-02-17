<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $n = (int) $_POST['n'];
  $k = (int) $_POST['k'];

  // Tính giai thừa
  function giaiThua($x) {
    if ($x === 0) {
      return 1;
    }
    return $x * giaiThua($x - 1);
  }

  $chinhHop = giaiThua($n) / giaiThua($n - $k);

  echo "Chỉnh hợp chập $k của $n phần tử là: $chinhHop";
}
?>
