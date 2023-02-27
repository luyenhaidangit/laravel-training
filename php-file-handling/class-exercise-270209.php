<?php
// Thêm một nhân viên mới vào danh sách
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $birthday = $_POST['birthday'];
    $address = $_POST['address'];
    $room = $_POST['room'];
    $job = $_POST['job'];
    $employee_info = "{$name}#{$birthday}#{$address}#{$room}#{$job}";

    $file = fopen("class-exercise-270206.txt", "a") or die("Không thể mở file!");
    fwrite($file, "\n" . $employee_info);
    fclose($file);
}

// Đọc thông tin các nhân viên từ file
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

<!-- Form để thêm một nhân viên mới -->
<form method="post">
    <label for="name">Tên:</label>
    <input type="text" id="name" name="name" required>

    <label for="birthday">Ngày sinh:</label>
    <input type="text" id="birthday" name="birthday" required>

    <label for="address">Địa chỉ:</label>
    <input type="text" id="address" name="address" required>

    <label for="room">Phòng làm việc:</label>
    <input type="text" id="room" name="room" required>

    <label for="job">Chức vụ:</label>
    <input type="text" id="job" name="job" required>

    <button type="submit">Thêm nhân viên</button>
</form>

<!-- Hiển thị danh sách nhân viên -->
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
        $index = 1;
        foreach ($content as $line) {
            $values = explode("#", $line);
            $name = $values[0];
            $birthday = $values[1];
            $address = $values[2];
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
