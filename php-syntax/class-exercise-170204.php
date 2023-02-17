<?php
      if(isset($_POST["n"])) {
        $n = $_POST["n"];
        $sum = 0;
        for($i = 0; $i <= $n; $i++) {
          $sum += $i;
        }
        echo "Tổng các số từ 0 đến $n là: $sum";
      } else {
        echo "Vui lòng nhập giá trị n.";
      }
    ?>