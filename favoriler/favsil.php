<?php

include('../yonetim/register.php');


$id = $_GET['favoriid'];
$delete = $baglan->prepare("DELETE from favoribilgileri where favoriid = '$id'");
$sil = $delete->execute();

if ($sil) {
    header('location:index.php');
}

?>