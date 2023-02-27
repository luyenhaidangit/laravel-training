<!DOCTYPE html>
<html>

<head>
    <title>Giải phương trình bậc 1</title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="p-4">
    Giải phương trình bậc 2
    <br/>
    <?php
// Đầu tiên, mở file và đọc nội dung vào một mảng.
// Trong đoạn code này, file có tên là "equations.txt" và được đặt trong cùng thư mục với file chứa code.

$file = fopen("class-exercise-270202.txt", "r") or die("Không thể mở file!");
$content = array();
while (!feof($file)) {
    $line = trim(fgets($file));
    if ($line !== "") {
        $content[] = $line;
    }
}
fclose($file);

// Sau đó, lặp qua từng phần tử trong danh sách nội dung và giải từng phương trình bậc 1.

foreach ($content as $line) {
    // Tách các giá trị a và b trong phương trình bằng khoảng trắng.
    $values = explode(" ", $line);
    $a = floatval($values[0]);
    $b = floatval($values[1]);
    $c = floatval($values[2]);
    
    // Giải phương trình bằng công thức ax + b = 0.
    $delta = $b * $b - 4 * $a * $c;

    if ($delta < 0) {
        echo "Phương trình {$a}x+{$b}y={$c} vô nghiệm"."<br/>";
    } else if ($delta == 0) {
        $x = (-$b) / (2 * $a);
        echo "Phương trình {$a}x+{$b}y={$c} có nghiệm kép x = ".$x."<br/>";
    } else {
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);
            echo "Phương trình {$a}x+{$b}y={$c} có hai nghiệm phân biệt:"."<br/>";
            echo "x1 = ".$x1."<br>";
            echo "x2 = ".$x2."<br/>";
        }
    echo "<hr/>";
    }
?>
</body>


</html>