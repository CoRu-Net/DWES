<?php 
session_start();
if (!isset($_SESSION['votosA'])) $_SESSION['votosA'] = 0;
if (!isset($_SESSION['votosB'])) $_SESSION['votosB'] = 0;

if (isset($_POST['borrar'])) {
    $_SESSION['votosA'] = 0;
    $_SESSION['votosB'] = 0;
}elseif (isset($_POST['opcion'])) {
    if ($_POST['opcion'] === 'A') {
        $_SESSION['votosA']++;
    } elseif ($_POST['opcion'] === 'B') {
        $_SESSION['votosB']++;
    }
}


header("location: act3_1.php");
exit();
?>