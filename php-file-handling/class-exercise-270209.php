<!DOCTYPE html>
<html>

<head>
    <title>Hiển thị nhân viên</title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="p-4">
    Tìm kiếm nhân viên

   

    <br/>

    





    <?php


$file = fopen("class-exercise-270206.txt", "r") or die("Không thể mở file!");
$content = array();
while (!feof($file)) {
    $line = trim(fgets($file));
    if ($line !== "") {
        $content[] = $line;
    }
}
fclose($file);


?>




<form name='form' method="POST">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Tên</label>
  <input name='name' type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Địa chỉ</label>
  <input name='andress' type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
    </form>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tên</th>
      <th scope="col">Ngày sinh</th>
      <th scope="col">Địa chỉ</th>
      <th scope="col">Phòng làm việc</th>
      <th scope="col">Chức vụ</th>
    </tr>
  </thead>
  <tbody>
    <?php 

        $file = fopen("class-exercise-270209.txt", "r") or die("Không thể mở file!");
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
                $search_text = $_POST['select'];
                echo $search_text;
                $result = array_filter($content, function($line) use ($search_text) {
                    $values = explode("#", $line);
                    $andress = $values[2];
                    // echo $andress;
                    // return $andress === $search_text;
                    return stripos($andress, $search_text) !== false;
                });
            } else {
                $result = $content;
            }


        $index = 1;
        foreach ($result as $line) {
            $values = explode("#", $line);
            $name = $values[0];
            $birthday = $values[1];
            $andress = $values[2];
            $room = $values[3];
            $job = $values[4];
            echo "<tr>";
            echo "<td>{$index}</td>";
            echo "<td>{$name}</td>";
            echo "<td>{$birthday}</td>";
            echo "<td>{$andress}</td>";
            echo "<td>{$room}</td>";
            echo "<td>{$job}</td>";
            echo "</tr>";
            $index++;
        }
    ?>
  </tbody>
</table>






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