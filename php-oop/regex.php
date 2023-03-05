<?php
class Regex {
  private $regex;
  private $fileUrl;

  public function __construct($regex, $fileUrl) {
    $this->regex = $regex;
    $this->fileUrl = $fileUrl;
  }

  public function validate() {
    $file = fopen($this->fileUrl, "r");
    if ($file) {
      while (($line = fgets($file)) !== false) {
        $line = trim($line);
        if (preg_match('/' . $this->regex . '/', $line)) {
          echo 'Hợp lệ: ' . $line . '<br>';
        } else {
          echo 'Lỗi: ' . $line . '<br>';
        }
      }
      fclose($file);
    } else {
      echo "Error opening file: " . $this->fileUrl . "<br>";
    }
  }
}
?>
