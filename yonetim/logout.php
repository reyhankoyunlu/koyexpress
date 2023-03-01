<?php
session_start();

if ($_SESSION['Kullanici']) {
    session_destroy();
    header("Location:../index.php");
}
if ($_SESSION['admin']) {
    session_destroy();
    header("Location:../index.php");
}

?>