<?php
      if(isset($_POST["n"])) {
        $n = $_POST["n"];
        $sum = 1;
        for($i = 1; $i <= $n; $i++) {
          $sum *= $i;
        }
        echo "Tích các số từ 1 đến $n là: $sum";
      } else {
        echo "Vui lòng nhập giá trị n.";
      }
    ?>