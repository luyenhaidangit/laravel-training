<?php
    require("regex.php");
    $validate = new Regex("^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$", 'class-exercise-030305.txt');
    $validate->validate();
?>