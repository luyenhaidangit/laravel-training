<?php
$x = '';
$a = '';
$b = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = $_POST['a'];
    $b = $_POST['b'];

    if (!is_numeric($a) || !is_numeric($b)) {
        $error = 'Vui lòng nhập vào hai số';
    } elseif ($a == 0) {
        $error = 'Phương trình có dạng "0x + b = 0". Vui lòng nhập giá trị khác 0 cho a';
    } else {
        $x = -$b / $a;
    }
}
?>

<?php if (!empty($error)): ?>
    <p><?php echo $error; ?></p>
<?php elseif ($x !== ''): ?>
    <p>Kết quả: x = <?php echo $x; ?></p>
<?php endif; ?>
