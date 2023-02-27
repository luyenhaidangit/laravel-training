<!DOCTYPE html>
<html>

<head>
    <title>Giải phương trình bậc 1</title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="p-4">
    Hiện ảnh

   

    <br/>
    <?php


$file = fopen("class-exercise-270203.txt", "r") or die("Không thể mở file!");
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
    $values = explode("#", $line);
    $alt = $values[0];
    $src = $values[1];
    echo "<img src=".$src." class='img-fluid img' alt=".$alt.">";

    echo "<hr/>";
    }
?>

</div>



</body>
<style>
    .img{
        height:300px;
        width: 300px;
    }
    
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>