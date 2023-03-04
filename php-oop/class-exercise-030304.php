<?php
    require("regex.php");
    $validate = new Regex("^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$", 'class-exercise-030304.txt');
    $validate->validate();
?>