<?php
function tohop($n, $k) {
    if ($k == 0 || $n == $k) {
        return 1;
    } else {
        return tohop($n - 1, $k - 1) + tohop($n - 1, $k);
    }
}

if (isset($_POST['submit1'])) {
    $n = $_POST['n'];
    $k = $_POST['k'];
    $result = tohop($n, $k);
    echo "Tổ hợp chập $k của $n là: $result";
}
?>