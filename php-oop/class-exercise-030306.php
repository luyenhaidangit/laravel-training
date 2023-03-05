<?php
    require("regex.php");
    $validate = new Regex("^((http|https):\/\/)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$", 'class-exercise-030306.txt');
    $validate->validate();
?>