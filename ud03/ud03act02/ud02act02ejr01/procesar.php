<?php
if (isset($_POST['color'])) {
    $color = $_POST['color'];
    setcookie("color", $color, time() + 86400, "/");
}


header("location: ud03act02ejr01.php");
exit();
