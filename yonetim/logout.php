<?php
session_start();

if ($_SESSION['Kullanici']) {
    session_destroy();
    header("Location:../index.php");
}

?>