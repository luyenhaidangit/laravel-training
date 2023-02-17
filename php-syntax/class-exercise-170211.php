<?php
function isPerfectNumber($num)
{
    $sum = 0;
    for ($i = 1; $i <= $num/2; $i++) {
        if ($num % $i == 0) {
            $sum += $i;
        }
    }
    if ($sum == $num) {
        return true;
    } else {
        return false;
    }
}

if(isset($_POST['submit'])) {
    $n = (int)$_POST['n'];

    echo "Các số hoàn hảo trong khoảng từ 0 đến $n là:<br>";

    for ($i = 1; $i <= $n; $i++) {
        if (isPerfectNumber($i)) {
            echo $i . "<br>";
        }
    }
}
?>