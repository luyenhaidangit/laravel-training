<!DOCTYPE html>
<html>

<head>
    <title>Cập nhật nhân viên</title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="p-4">
    <form method="post" action="update-employee.php">
        <div class="form-group">
            <label for="name">Tên:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="birthday">Ngày sinh:</label>
            <input type="date" class="form-control" id="birthday" name="birthday" required>
        </div>
        <div class="form-group">
            <label for="address">Địa chỉ:</label>
            <input type="text" class="form-control" id="address" name="address" required>
        </div>
        <div class="form-group">
            <label for="room">Phòng làm việc:</label>
            <input type="text" class="form-control" id="room" name="room" required>
        </div>
        <div class="form-group">
            <label for="job">Chức vụ:</label>
            <input type="text" class="form-control" id="job" name="job" required>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>


    <?php
        <?php

$file = fopen("class-exercise-270206.txt", "a") or die("Không thể mở file!");

$name = $_POST['name'];
$birthday = $_POST['birthday'];
$address = $_POST['address'];
$room = $_POST['room'];
$job = $_POST['job'];

$data = "{$name}#{$birthday}#{$address}#{$room}#{$job}\n";

fwrite($file, $data);
fclose($file);

header('Location: display-employee.php');
exit();
    ?>

</body>

</html>
