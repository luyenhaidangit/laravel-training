<!DOCTYPE html>
<html>
  <head>
    <title>Thông tin từ URL</title>
  </head>
  <body>
    <form action="" method="POST">
      <label for="url">Nhập URL:</label>
      <input type="text" id="url" name="url">
      <button type="submit">Lấy thông tin</button>
    </form>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $url = $_POST["url"];
        
        // Sử dụng regex để lấy thông tin từ URL
        $pattern = "/news-detail\/(.*?)\./";
        preg_match($pattern, $url, $matches);
        $result = $matches[1];
        
        // Hiển thị kết quả
        echo "<p>Dòng chữ được lấy từ URL: " . $result . "</p>";
      }
    ?>
  </body>
</html>
