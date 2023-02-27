<!DOCTYPE html>
<html>

<head>
    <title>Giải phương trình bậc 1</title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="p-4">
    Hiện sản phẩm

   

    <br/>
    <?php




// Sau đó, lặp qua từng phần tử trong danh sách nội dung và giải từng phương trình bậc 1.

?>

<h2>Tìm kiếm sản phẩm</h2>
    <form method="POST">
        <div class="mb-3">
            <input type="text" class="form-control" name="search_text" placeholder="Nhập từ khóa tìm kiếm">
        </div>
        <button type="submit" class="btn btn-primary">Tìm kiếm</button>
    </form>

<div class="row row-cols-1 row-cols-md-3 g-4">


 <?php 
            $file = fopen("class-exercise-270205.txt", "r") or die("Không thể mở file!");
            $content = array();
            while (!feof($file)) {
            $line = trim(fgets($file));
            if ($line !== "") {
                $content[] = $line;
                }
            }
            fclose($file);

            // kiểm tra nếu form đã được submit thì tìm kiếm sản phẩm
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $search_text = $_POST['search_text'];
                $result = array_filter($content, function($line) use ($search_text) {
                    return stripos($line, $search_text) !== false;
                });
            } else {
                $result = $content;
            }

            // hiển thị các sản phẩm được tìm thấy
            foreach ($result as $line) {
                $values = explode("#", $line);
                $name = $values[0];
                $image = $values[1];
                $price = $values[2];
                $description = $values[3];
                echo "<div class='col'>";
                echo "<div class='card'>";
                echo "<img src='{$image}' class='card-img-top' alt='ok'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>{$name}</h5>";
                echo "<p class='card-text text-danger'>Giá {$price}</p>";
                echo "<p class='card-text'>{$description}</p>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
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