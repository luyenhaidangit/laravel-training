<?php
    require("regex.php");
    $validate = new Regex("^(?!^\d)(?!.*[_]{2})[a-zA-Z0-9_]{4,12}$", 'class-exercise-030303.txt');
    $validate->validate();
?>