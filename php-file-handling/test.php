<!DOCTYPE html>
<html>

<head>
    <title>Slide Show</title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="p-4">
    Hiện ảnh slide show
    <br/>

     <?php
// Đầu tiên, mở file và đọc nội dung vào một mảng.
// Trong đoạn code này, file có tên là "equations.txt" và được đặt trong cùng thư mục với file chứa code.

$file = fopen("test.txt", "r") or die("Không thể mở file!");
$content = array();
while (!feof($file)) {
    $line = trim(fgets($file));
    if ($line !== "") {
        $content[] = $line;
    }
}
fclose($file);

?>


<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <?php
        $index = 0;
        foreach ($content as $line) {
  
            $values = explode("#", $line);
            $name = $values[0];
            $slide = $values[1];
            if($index===0){
                echo "<div class='carousel-item active'>";
                echo "<img src='{$slide}' class='d-block w-100 img' alt='{$name}'>";
                echo "</div>";
            }else{
                echo "<div class='carousel-item'>";
                echo "<img src='{$slide}' class='d-block w-100 img' alt='{$name}'>";
                echo "</div>";
            }
            $index++;
        }
    ?>
    
    <!-- <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div> -->
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>




</body>
<style>
    .img{
        height:600px;
        width: 600px;
    }
    
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>