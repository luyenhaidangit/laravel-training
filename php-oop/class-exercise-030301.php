<?php
    require("regex.php");
    $validate = new Regex('^\d{4}-\d{4}-\d{4}-\d{4}$', 'class-exercise-030301.txt');
    $validate->validate();
?>