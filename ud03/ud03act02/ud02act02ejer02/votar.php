<?php
if(isset($_POST['aceptar'])){
    setcookie('cookies_aceptadas', '1', time() + 31536000, '/');
}elseif(isset($_POST['borrar'])){
    setcookie('cookies_aceptadas', '', time() - 3600, '/');
}
header("location: ud03act02ejr02.php");
exit();
?>