<?php
    require("regex.php");
    $validate = new Regex("^(0?[1-9]|[1-2][0-9]|3[0-1])\/(0?[1-9]|1[0-2])\/\d{4}$", 'class-exercise-030302.txt');
    $validate->validate();
?>