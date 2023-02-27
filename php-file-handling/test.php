
<?php
    // Mở file chứa dữ liệu
    $file = fopen("class-exercise-270204.txt", "r");
    if (!$file) {
        die("Không thể mở file!");
    }

    // Đọc dữ liệu từ file
    $data = array();
    while (($line = fgets($file)) !== false) {
        $line = trim($line);
        $data[] = $line;
    }

    // Đóng file
    fclose($file);

    // Trả về dữ liệu dưới dạng JSON
    header('Content-Type: application/json');
    echo json_encode($data);
?>
